<?php
// MediaWiki Config File
include('/data/project/wm/priv.php');
$wgConf->settings = [
	'wgServer' => [
		$wgDBmainwiki => 'https://wm.toolforge.org',
	],
	'wgCanonicalServer' => [
		$wgDBmainwiki => 'https://wm.toolforge.org',
	],
	'wgScriptPath' => [
		'default' => '',
	],
//	'wgArticlePath' => [
//		'default' => '/index.php?title=$1',
//	],
	'wgLanguageCode' => [
		$wgDBmainwiki => 'en',
	],
	'wgLocalInterwiki' => [
		$wgDBmainwiki => 'en',
	],
	'wgAddGroups' => [
		'default' => [
			'bureaucract' => [ 'sysop', 'bureaucrat' ],
		],
	],
	
	// CentralAuth // !becarefull
	'wgCentralAuthDatabase' => [
		'default' => $wgDBcentralauth,
	],
	'wgCentralAuthAutoNew' => [
		'default' => true,
	],
	'wgCentralAuthAutoMigrate' => [
		'default' => true,
	],
	'wgCentralAuthAutoMigrateNonGlobalAccounts' => [
		'default' => true,
	],
	'wgCentralAuthCookies' => [
		'default' => true,
	],
//	'wgCentralAuthCookieDomain' => [
//		'default' => '.toolforge.org'
//	],
//	'wgCentralAuthAutoLoginWikis' => [
//	],
	'wgCentralAuthCreateOnView' => [
		'default' =>  true,
	],
	'wgCentralAuthEnableGlobalRenameRequest' => [
		'default' =>  true,
	],
	'wgCentralAuthEnableUserMerge' => [
		'default' =>  true,
	],
//	'wgCentralAuthLoginWiki' => [
//		'default' =>  '',
//	],
	'wgCentralAuthLoginIcon' => [
		'default' => true,
	],
	'wgCentralAuthSilentLogin' => [
		'default' =>  true,
	],
	'wgGlobalRenameBlacklistRegex' => [
		'default' => true,
	],
	'wgGlobalRenameBlacklist' => [
		'default' => 'https://meta.wikimedia.org/w/index.php?title=Global_rename_blacklist&action=raw'
	],

	// CentralNotice
	'wgNoticeInfrastructure' => [
		'default' => false,
		$wgDBmainwiki => true,
	],
	'wgCentralSelectedBannerDispatcher' => [
		'default' => "https://wm.toolforge.org/index.php/Special:BannerLoader",
	],
	'wgCentralBannerRecorder' => [
		'default' => "https://wm.toolforge.org/index.php/Special:RecordImpression",
	],
	'wgCentralDBname' => [
		'default' => $wgDBmainwiki,
	],
	'wgCentralHost' => [
		'default' => "https://wm.toolforge.org",
	],
	'wgNoticeProject' => [
		'default' => 'all',
		$wgDBmainwiki => 'all',
	],
	'wgNoticeProjects' => [
		'default' => [
			'all',
			'optout',
		],
	],
	'wgNoticeCookieDomain' => [
		'default' => '',
	],
	'wgNoticeUseTranslateExtension' => [
		'default' => false,
	],
	
	// Checkuser
	'wgCheckUserGBtoollink' => [
		'centralDB' => $wgDBmainwiki,
		'groups' => [ 'steward', 'staff' ]
	],
	'wgCheckUserForceSummary' => [
		'default' => true,
	],
	'wgCheckUserCIDRLimit' => [ 
		'IPv4' => 16,
		'IPv6' => 32
	],
	'wgCheckUserCAMultiLock' => [
		'centralDB' => $wgDBmainwiki,
		'groups' => [ 'steward' ]
	],
	'wgCheckUserCAtoollink ' => [
		'default' => $wgDBmainwiki,
	],
	'wgCheckUserEnableSpecialInvestigate' => [
		'default' => true,
	],

	'wgEnableUploads' => [
		'default' => true,
	],
	'wgUploadDirectory' => [
		'default' => 'images',
	],
	'wgUseImageMagick' => [
		'default' => true,
	],
	'wgSVGConverter' => [
		'default' => 'ImageMagick',
	],
	'wgUseImageResize' => [
		'default' => true,
	],
	'wgMemoryLimit' => [
		'default' => '50M',
	],
	'wgMaxImageArea' => [
		'default' => 1.25e7,
	],
	'wgGenerateThumbnailOnParse' => [
		'default' => true,
	],
	'wgUseInstantCommons' => [
		'default' => true,
	],
	'wgPingback' => [
		'default' => true,
	],
	'wgShellLocale' => [
		'default' => 'en_US.utf8',
	],
	// Logo //
	'wgLogo' => [
		'default' => '/images/b/bc/Wiki.png',
	],
];
require_once( '/data/project/wm/public_html/LocalExtensions.php' );
$wgShowExceptionDetails = true;
