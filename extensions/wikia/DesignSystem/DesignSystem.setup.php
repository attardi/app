<?php
/**
 * Design System Extension
 */
$dir = dirname( __FILE__ ) . '/';

$wgExtensionCredits['api'][] = [
	'name' => 'Design System',
	'descriptionmsg' => 'design-system-desc',
	'version' => 1.0,
	'url' => 'https://github.com/Wikia/app/tree/dev/extensions/wikia/DesignSystem'
];

$wgExtensionMessagesFiles['DesignSystem'] = $dir . 'DesignSystem.i18n.php';

$wgAutoloadClasses[ 'DesignSystemGlobalFooterController' ] = $dir . 'controllers/DesignSystemGlobalFooterController.class.php';
