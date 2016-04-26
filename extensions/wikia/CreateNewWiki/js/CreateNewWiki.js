/*global WikiBuilderCfg, ThemeDesigner */

define('CreateNewWiki',[], function () {
	'use strict';

	var wntimer = false,
		wdtimer = false,
		createStatus = false,
		createStatusMessage = false,
		cityId = false,
		finishCreateUrl = false,
		retryGoto = 0,
		nameAjax = false,
		domainAjax = false,
		wb,
		$nameWikiWrapper,
		$descWikiWrapper,
		$authWrapper,
		$themWikiWrapper,
		$progress,
		steps,
		wikiName,
		wikiNameStatus,
		wikiNameError,
		wikiDomain,
		wikiDomainError,
		wikiDomainStatus,
		wikiDomainCountry,
		nameWikiSubmitError,
		wikiLanguage,
		wikiVertical,
		wikiAllAges,
		allAgesDiv,
		descWikiSubmitError,
		nextButtons,
		finishSpinner,
		descWikiNext,
		categoriesSetId,
		hiddenDuplicate,
		answer,
		keys,
		userAuth;

	function init(stringHelper) {
		// pre-cache
		wb = $('#CreateNewWiki');
		$nameWikiWrapper = $('#NameWiki');
		$descWikiWrapper = $('#DescWiki');
		$authWrapper = $('#UserAuth');
		$themWikiWrapper = $('#ThemeWiki');
		$progress = $('#StepsIndicator');
		steps = wb.find('.steps .step');
		wikiName = $nameWikiWrapper.find('input[name=wiki-name]');
		wikiNameStatus = $nameWikiWrapper.find('.wiki-name-status-icon');
		wikiNameError = $nameWikiWrapper.find('.wiki-name-error');
		wikiDomain = $nameWikiWrapper.find('input[name=wiki-domain]');
		wikiDomainError = $nameWikiWrapper.find('.wiki-domain-error');
		wikiDomainStatus = $nameWikiWrapper.find('.domain-status-icon');
		wikiDomainCountry = $nameWikiWrapper.find('.domain-country');
		nameWikiSubmitError = $nameWikiWrapper.find('.submit-error');
		wikiLanguage = $nameWikiWrapper.find('select[name=wiki-language]');
		wikiVertical = $descWikiWrapper.find('select[name=wiki-vertical]');
		wikiAllAges = $descWikiWrapper.find('input[name=all-ages]');
		allAgesDiv = $('#all-ages-div');
		descWikiSubmitError = $descWikiWrapper.find('.submit-error');
		nextButtons = wb.find('nav .next');
		finishSpinner = wb.find('.finish-status');
		descWikiNext = $descWikiWrapper.find('nav .next');

		var pane;

		// Name Wiki event handlers
		checkNextButtonStep1();

		$nameWikiWrapper.find('input.next').click(function () {
			if (isNameWikiSubmitError()) {
				nameWikiSubmitError
					.show()
					.html(WikiBuilderCfg['name-wiki-submit-error'])
					.delay(3000)
					.fadeOut();
			} else {
				saveState({
					wikiName: wikiName.val(),
					wikiDomain: wikiDomain.val(),
					wikiLang: wikiLanguage.find('option:selected').val()
				});
				if (window.wgUserName) {
					onAuthSuccess();
				} else {
					require(['AuthModal', 'wikia.querystring'], function (authModal, Querystring) {
						var redirectUrl = new Querystring();

						redirectUrl.setVal({
							wikiName: wikiName.val(),
							wikiDomain: wikiDomain.val(),
							wikiLanguage: wikiLanguage.find('option:selected').val()
						});

						authModal.load({
							url: '/signin?redirect=' + encodeURIComponent(redirectUrl.toString()),
							origin: 'create-new-wikia',
							onAuthSuccess: onAuthSuccess
						});
					});
				}
			}
		});

		wikiDomain.keyup(function () {
			domainAjax = true;
			checkNextButtonStep1();
			if (wdtimer) {
				clearTimeout(wdtimer);
			}
			wdtimer = setTimeout(checkDomain, 500);
		});

		wikiName.keyup(function () {
			nameAjax = true;
			checkNextButtonStep1();
			var name = $(this).val();

			name = $.trim(stringHelper.latinise(name).replace(/[^a-zA-Z0-9 ]+/g, '')).replace(/ +/g, '-');
			wikiDomain.val(name.toLowerCase()).trigger('keyup');
			if (wntimer) {
				clearTimeout(wntimer);
			}
			wntimer = setTimeout(checkWikiName, 500);
		});

		wikiLanguage.bind('change', function () {
			checkWikiName();
			checkDomain();
			var selected = wikiLanguage.find('option:selected').val();

			if (selected && selected !== window.wgLangAllAgesOpt) {
				wikiDomainCountry.html(selected + '.');
				allAgesDiv.hide();
			} else {
				wikiDomainCountry.html('');
				allAgesDiv.show();
			}

		});
		$('#ChangeLang').click(function (e) {
			e.preventDefault();
			$nameWikiWrapper.find('.language-default').hide();
			$nameWikiWrapper.find('.language-choice').show();
		});
		wb.find('nav .back').bind('click', function () {
			var id = $(this).closest('.step').attr('id');
			if (id === 'DescWiki') {
				transition('DescWiki', false, '-');
				if ($authWrapper.length) {
					userAuth.loginAjaxForm.retrieveLoginToken({
						clearCache: true
					});
					userAuth.loginAjaxForm.submitButton.removeAttr('disabled');
				}
			} else {
				transition(id, false, '-');
			}
		});

		// Description event handlers
		descWikiNext.click(function () {
			var val,
				descriptionVal;

			descWikiNext.attr('disabled', true);
			val = wikiVertical.find('option:selected').val();

			if (val !== '-1' /* yes, it is a string */ ) {
				descriptionVal = $('#Description').val();
				$.nirvana.sendRequest({
					controller: 'CreateNewWiki',
					method: 'Phalanx',
					data: {
						text: descriptionVal
					},
					callback: function (res) {
						// check phalanx result
						if (res.msgHeader) {
							$.showModal(res.msgHeader, res.msgBody);
							descWikiNext.attr('disabled', false);
						} else {
							// call create wiki ajax
							saveState({
								wikiDescription: (descriptionVal === WikiBuilderCfg.descriptionplaceholder ?
									'' : descriptionVal)
							}, function () {
								createWiki();
								transition('DescWiki', true, '+');
							});
						}
					}
				});
			} else {
				descWikiSubmitError
					.show()
					.html(WikiBuilderCfg['desc-wiki-submit-error'])
					.delay(3000)
					.fadeOut();

				descWikiNext.attr('disabled', false);
			}
		});
		$('#Description').placeholder();

		// Theme event handlers
		$themWikiWrapper.find('nav .next').click(function () {
			saveState(ThemeDesigner.settings, function () {
				if (WikiBuilderCfg.skipwikiaplus) {
					gotoMainPage();
				} else {
					transition('ThemeWiki', true, '+');
				}
			});
		});

		wikiVertical.on('change', function () {
			var $this = $(this),
				selectedValue = $this.val(),
				selectedOption,
				selectedShort,
				categoriesSets = $('.categories-sets'),
				newCategoriesSetId,
				duplicate;

			if (selectedValue === '-1' /* yes, it is a string */ ) {
				categoriesSets.hide();
			} else {
				categoriesSets.show();

				selectedOption = $this.find('option:selected');
				selectedShort = selectedOption.data('short');
				newCategoriesSetId = selectedOption.data('categoriesset');

				if (newCategoriesSetId !== categoriesSetId) {
					$('#categories-set-' + categoriesSetId).hide();
					$('#categories-set-' + newCategoriesSetId).show();
					categoriesSetId = newCategoriesSetId;
				}

				// unhide 'duplicates'
				if (hiddenDuplicate) {
					hiddenDuplicate.show();
				}

				// hide 'duplicates'
				duplicate = $('#categories-set-' + categoriesSetId)
					.find('[data-short="' + selectedShort + '"]');
				if (duplicate) {
					duplicate.attr('checked', false);
					hiddenDuplicate = duplicate.parent().hide();
				}
			}
		});

		// Set current step on page load
		if (WikiBuilderCfg.currentstep) {
			pane = $('#' + WikiBuilderCfg.currentstep);
			wb.width(pane.width());
			steps.hide();
			pane.show();
		}

		$('.tooltip-icon').tooltip();

		// onload stuff
		wikiName.focus();
		if (wikiName.val() || wikiDomain.val()) {
			checkDomain();
			checkWikiName();
		}
	}

	function requestKeys() {
		keys = WikiBuilderCfg['cnw-keys'];
	}

	function solveKeys() {
		var v = 0,
			i;
		for (i = 0; i < keys.length; i++) {
			v *= (i % 5) + 1;
			v += keys[i];
		}
		answer = v;
	}

	function onAuthSuccess() {
		transition('NameWiki', true, '+');
	}

	function checkWikiName () {
		var name = wikiName.val(),
			lang = wikiLanguage.val();
		if (name) {
			nameAjax = true;
			checkNextButtonStep1();

			$.nirvana.sendRequest({
				controller: 'CreateNewWiki',
				method: 'CheckWikiName',
				data: {
					name: name,
					lang: lang
				},
				callback: function (res) {
					if (res) {
						var response = res.res;
						if (response) {
							wikiNameError.html(response);
						} else {
							wikiNameError.html('');
						}
						nameAjax = false;
						checkNextButtonStep1();
					}
				}
			});
		} else {
			showIcon(wikiNameStatus, '');
			wikiNameError.html('');
		}
	}

	function checkDomain() {
		var wd = wikiDomain.val(),
			lang = wikiLanguage.val();

		if (wd) {
			wd = wd.toLowerCase();
			wikiDomain.val(wd);
			showIcon(wikiDomainStatus, 'spinner');
			domainAjax = true;
			checkNextButtonStep1();

			$.nirvana.sendRequest({
				controller: 'CreateNewWiki',
				method: 'CheckDomain',
				data: {
					name: wd,
					lang: lang
				},
				callback: function (res) {
					if (res) {
						var response = res.res;

						if (response) {
							wikiDomainError.html(response);
							showIcon(wikiDomainStatus, '');
						} else {
							wikiDomainError.html('');
							showIcon(wikiDomainStatus, 'ok');
						}

						domainAjax = false;
						checkNextButtonStep1();
					}
				}
			});
		} else {
			wikiDomainError.html('');
			showIcon(wikiDomainStatus, '');
		}
	}

	function isNameWikiSubmitError() {
		return !wikiDomain.val() ||
			!wikiName.val() ||
			$nameWikiWrapper.find('.wiki-name-error').html() ||
			$nameWikiWrapper.find('.wiki-domain-error').html() ||
			nameAjax ||
			domainAjax;
	}

	/**
	 * Update the state of "Next" button on step #1.
	 * It depends on two AJAX validation requests which are performed in parallel.
	 *
	 * This method is used solely by automated tests (enabled class is added when test can proceed to the next step)
	 */
	function checkNextButtonStep1() {
		var nextButton = nextButtons.eq(0);

		if (isNameWikiSubmitError()) {
			nextButton.removeClass('enabled');
		} else {
			nextButton.addClass('enabled');
		}
	}

	function showIcon(el, art) {
		if (art) {
			var markup = '<img src="';
			if (art === 'spinner') {
				markup += window.stylepath + '/common/images/ajax.gif';
			} else if (art === 'ok') {
				markup += window.wgExtensionsPath + '/wikia/CreateNewWiki/images/check.png';
			}
			markup += '">';
			$(el).html(markup);
		} else {
			$(el).html('');
		}
	}

	function transition(from, next, dot) {
		var f = $('#' + from),
			t = (next ? f.next() : f.prev()),
			op = t.css('position'),
			th, tw;

		t.css('position', 'absolute');
		th = t.height();
		tw = t.width();
		t.css('position', op);

		wb.animate({
			height: th,
			width: tw
		}, function () {
			t.animate({
				'opacity': 'show'
			}, {
				queue: false,
				duration: 250
			});
			if (dot) {
				if (dot === '+') {
					$progress.find('.step.active').last().next().addClass('active');
				} else if (dot === '-') {
					$progress.find('.step.active').last().removeClass('active');
				}
			}
			wb.height('auto');
		});
		f.animate({
			'opacity': 'hide'
		}, {
			queue: false,
			duration: 250
		});
	}

	function saveState(data, callback) {
		var c = JSON.parse($.cookies.get('createnewwiki')),
			key;

		if (!c) {
			c = {};
		}
		for (key in data) {
			c[key] = data[key];
		}
		$.cookies.set('createnewwiki', JSON.stringify(c), {
			hoursToLive: 24,
			domain: window.wgCookieDomain,
			path: window.wgCookiePath
		});
		if (typeof callback === 'function') {
			callback();
		}
	}

	function gotoMainPage() {
		nextButtons.attr('disabled', true);
		if (createStatus && createStatus === 'ok' && finishCreateUrl) {
			location.href = finishCreateUrl;
		} else if (createStatus && createStatus === 'backenderror') {
			$.showModal(createStatusMessage, createStatusMessage);
		} else if (retryGoto < 300) {
			if (!finishSpinner.data('spinning')) {
				finishSpinner.data('spinning', 'true');
				showIcon(finishSpinner, 'spinner');
			}
			retryGoto++;
			setTimeout(gotoMainPage, 200);
		}
	}

	function createWiki() {
		var throbberWrapper = $themWikiWrapper.find('.next-controls'),
			verticalOption = wikiVertical.find('option:selected'),
			categories = [];

		requestKeys();
		solveKeys();

		throbberWrapper.startThrobbing();

		$('#categories-set-' + verticalOption.data('categoriesset') + ' :checked').each(function () {
			categories.push($(this).val());
		});

		$.get('/api.php', {
			action: 'query',
			uiprop: 'preferencestoken',
			meta: 'userinfo',
			format: 'json'
		}).then(function (response) {
			var preferencesToken;

			if (!response || !response.query || !response.query.userinfo) {
				generateAjaxErrorMsg();
				return;
			}

			preferencesToken = response.query.userinfo.preferencestoken;

			$.nirvana.sendRequest({
				controller: 'CreateNewWiki',
				method: 'CreateWiki',
				data: {
					data: {
						wName: wikiName.val(),
						wDomain: wikiDomain.val(),
						wLanguage: wikiLanguage.find('option:selected').val(),
						wVertical: verticalOption.val(),
						wCategories: categories,
						wAllAges: wikiAllAges.is(':checked') ? wikiAllAges.val() : null,
						wAnswer: Math.floor(answer)
					},
					token: preferencesToken
				},
				callback: function (res) {
					createStatus = res.status;
					createStatusMessage = res.statusMsg;

					throbberWrapper.stopThrobbing();

					if (createStatus && createStatus === 'ok') {
						cityId = res.cityId;
						finishCreateUrl = (res.finishCreateUrl.indexOf('.com/wiki/') < 0 ?
							res.finishCreateUrl.replace('.com/', '.com/wiki/') :
							res.finishCreateUrl);

						// unblock "Next" button (BugId:51519)
						$themWikiWrapper.find('.next-controls input').
						attr('disabled', false).
						addClass('enabled'); // for QA with love
					} else {
						$.showModal(res.statusHeader, createStatusMessage);
					}
				},
				onErrorCallback: function () {
					generateAjaxErrorMsg();
				}
			});
		}).fail(function () {
			generateAjaxErrorMsg();
		});
	}

	function generateAjaxErrorMsg() {
		$.showModal(WikiBuilderCfg['cnw-error-general-heading'], WikiBuilderCfg['cnw-error-general']);
	}

	return {
		init: init
	};
});

$(function () {
	'use strict';
	window.wgAjaxPath = window.wgScriptPath + window.wgScript;

	mw.loader.using('wikia.stringhelper')
		.done(function () {
			require(['wikia.stringhelper', 'CreateNewWiki'], function (stringHelper, cnw) {
				cnw.init(stringHelper);
			});
		});

	if (window.wgOasisResponsive || window.wgOasisBreakpoints) {
		ThemeDesigner.slideByDefaultWidth = 500;
		ThemeDesigner.slideByItems = 3;

	} else {
		ThemeDesigner.slideByDefaultWidth = 608;
		ThemeDesigner.slideByItems = 4;
	}
	ThemeDesigner.themeTabInit();
});
