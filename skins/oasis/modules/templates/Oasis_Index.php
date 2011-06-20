<!doctype html>
<html lang="<?= $lang ?>" dir="<?= $dir ?>">
<head>
	<meta http-equiv="Content-Type" content="<?= $mimetype ?>; charset=<?= $charset ?>">
	<meta name="viewport" content="width=1200">
	<?= $headlinks ?>

	<title><?= $pagetitle ?></title>
	<!-- SASS-generated CSS file -->
	<link rel="stylesheet" href="<?= AssetsManager::getInstance()->getSassCommonURL($mainsassfile) ?>">
	<!-- CSS injected by extensions -->
	<?= $csslinks ?>
	<?php
		global $wgUser;
		$srcs = AssetsManager::getInstance()->getGroupLocalURL($wgUser->isLoggedIn() ? 'site_user_css' : 'site_anon_css');
		foreach($srcs as $src) {
			echo '<link rel="stylesheet" href="'.$src.'">';
		}

		// RT #68514: load global user CSS (and other page specific CSS added via "SkinTemplateSetupPageCss" hook)
		if ($pagecss != '') {
	?>


	<!-- page CSS -->
	<style type="text/css"><?= $pagecss ?></style>
	<?php
		}
	?>

	<?= $globalVariablesScript ?>

	<!-- Make IE recognize HTML5 tags. -->
	<!--[if IE]>
		<script>/*@cc_on'abbr article aside audio canvas details figcaption figure footer header hgroup mark menu meter nav output progress section summary time video'.replace(/\w+/g,function(n){document.createElement(n)})@*/</script>
	<![endif]-->

	<!-- Used for page load time tracking -->
	<script>/*<![CDATA[*/
		var wgNow = new Date();
	/*]]>*/</script><?php
		if(!$jsAtBottom) {
			print $wikiaScriptLoader; // needed for jsLoader and for the async loading of CSS files.
			print "\n\n\t<!-- Combined JS files (StaticChute) and head scripts -->\n";
			print $jsFiles . "\n";
		}
	?>
</head>
<body class="<?= implode(' ', $bodyClasses) ?>"<?= $body_ondblclick ? ' ondblclick="' . htmlspecialchars($body_ondblclick) . '"' : '' ?>>
<?= $body ?>

<!-- comScore -->
<?= $comScore ?>

<!-- googleAnalytics -->
<?= $googleAnalytics ?>

<?php
	if($jsAtBottom) {
		print $wikiaScriptLoader; // needed for jsLoader and for the async loading of CSS files.
		print "\n\n\t<!-- Combined JS files (StaticChute) and head scripts -->\n";
		print $jsFiles . "\n";
	}
?>

<?php
	if (empty($wgSuppressAds)) {
		echo wfRenderModule('Ad', 'Index', array('slotname' => 'INVISIBLE_1'));
		if (!$wgEnableCorporatePageExt) {
			echo wfRenderModule('Ad', 'Index', array('slotname' => 'INVISIBLE_2'));
		}
	}
?>
<?= AdEngine::getInstance()->getDelayedIframeLoadingCode() ?>

<!-- quantServe -->
<?= $quantServe ?>

<?php
	print '<script type="text/javascript">/*<![CDATA[*/while(wgAfterContentAndJS.length>0){wgAfterContentAndJS.shift()();}/*]]>*/</script>' . "\n";
	print "<!-- BottomScripts -->\n";
	print $bottomscripts;
	print "<!-- end Bottomscripts -->\n";
?>

<!-- printable CSS -->
<?= $printableCss ?>

<?= wfReportTime()."\n" ?>
</body>
<?= wfRenderModule('Ad', 'Config') ?>
</html>
