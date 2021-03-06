// TODO: replace with template/modal.js?

/*global define, setTimeout*/
define('ext.wikia.adEngine.slot.exitstitial', [
	'ext.wikia.adEngine.adContext',
	'jquery',
	'wikia.location',
	'wikia.log',
	'wikia.window'
], function (adContext, $, loc, log, win) {
	'use strict';

	var logGroup = 'ext.wikia.adEngine.slot.exitstitial',
		modalId = 'ExitstitialInfobox',
		modalWidth = 840,
		adSlot = 'EXIT_STITIAL_BOXAD_1',
		context = adContext.getContext(),
		enabled = context.slots.exitstitial && context.opts.pageType === 'all_ads',
		redirectDelay = context.slots.exitstitialRedirectDelay || 10;

	function init() {
		// Check if external links should be ad-guarded
		if (!enabled) {
			return;
		}

		log('Exitstitial ads: enabled', 'info', logGroup);

		$('.WikiaArticle a.exitstitial').filter('.external, .extiw').click(function (event) {
			event.preventDefault();

			var url = $(this).attr('href');

			log('Launching exitstitial ad', 'info', logGroup);

			$.getMessages('AdEngine', function () {
				var $goBack = $('<a></a>').attr('href', '').text($.msg('adengine-exitstitial-go-back')),
					modalTitle = $.msg('adengine-exitstitial-title-template', win.wgSiteName),
					$modal,
					$modalBody = $('<div></div>'),
					$modalText = $('<p></p>').text($.msg('adengine-exitstitial-redirecting') + ' '),
					$modalAd = $('<div class="ad-centered-wrapper"></div>'),
					$ad = $('<div class="wikia-ad noprint"></div>').attr('id', adSlot),
					$modalSkip = $('<div class="close-exitstitial-ad"></div>'),
					$skipAd = $('<a></a>').attr('href', url).text($.msg('adengine-exitstitial-button'));

				function skipAd() {
					log('Skipping ad', 'info', logGroup);
					$skipAd.filter(':visible').each(function () {
						loc.href = url;
					});
				}

				function showModal() {
					log('Showing modal', 'info', logGroup);
					$modal.css('opacity', 1);
				}

				$modalText.append($goBack);
				$modalSkip.append($skipAd);

				$goBack.click(function (event) {
					event.preventDefault();
					$modal.closeModal();
				});

				$modalBody.append($modalText).append($modalAd).append($modalSkip);

				// Load modal, but don't show its content yet
				$modal = $.showModal(modalTitle, $modalBody, {
					id: modalId,
					width: modalWidth
				}).css('opacity', 0);

				// Once the ad loads, show the modal
				$modalAd.html($('<div></div>').html($ad));
				win.adslots2.push({
					slotName: adSlot,
					onError: skipAd,
					onSuccess: showModal
				});
				// Show modal after a second even if the ad still loads
				setTimeout(showModal, 1000);

				// Skip ads after N seconds
				setTimeout(skipAd, redirectDelay * 1000);
			});
		});
	}

	return {
		init: init
	};
});
