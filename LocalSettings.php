<?php
# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}
## Private file
include('/data/project/wm/priv.php');

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "WM Toolforge Wiki";
$wgMetaNamespace = "WM_Toolforge_Wiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "https://wm.toolforge.org";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [ '1x' => "$wgResourceBasePath/resources/assets/wiki.png" ];

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@toolforge.org";
$wgPasswordSender = "apache@toolforge.org";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = $wgDBserverwiki;
$wgDBname = $wgDBmainwiki;
$wgDBuser = $wgDBuserwiki;
$wgDBpassword = $wgDBPassword;

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = false;
#$wgUseImageMagick = true;
#$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale. This should ideally be set to an English
## language locale so that the behaviour of C library functions will
## be consistent with typical installations. Use $wgLanguageCode to
## localise the wiki.
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

$wgSecretKey = $wgSecretKeywiki;

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = $wgUpgradeKeywiki;

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";
// Ca
$wgCentralAuthDatabase = $wgDBcentralauth;
# General CentralAuth configuration
# $wgCentralAuthAutoNew = true;
$wgCentralAuthAutoMigrate = true;
$wgCentralAuthCookies = true;
# $wgCentralAuthCookieDomain = '*.localhost';
 
# Create the local account on pageview, set false to require a local login to create it.
$wgCentralAuthCreateOnView = true;
$wgLocalDatabases = array( $wgDBmainwiki );

$wgconf = new SiteConfiguration;
$wgConf->wikis = $wgLocalDatabases;
$wgConf->suffixes = [ 'wiki' ];
$wgConf->localVHosts = [ 'localhost' ];
include('GlobalSkins.php');
include('GlobalExtensions.php');
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
//require_once( '/data/project/wm/public_html/LocalExtensions.php' );
$wgShowExceptionDetails = true;
function efGetSiteParams( $conf, $wiki ) {
    $site = null;
    $lang = null;
    foreach( $conf->suffixes as $suffix ) {
        if ( substr( $wiki, -strlen( $suffix ) ) == $suffix ) {
            $site = $suffix;
            $lang = substr( $wiki, 0, -strlen( $suffix ) );
            break;
        }
    }
    return array(
        'suffix' => $site,
        'lang' => $lang,
        'params' => array(
            'lang' => $lang,
            'site' => $site,
            'wiki' => $wiki,
        ),
        'tags' => array(),
    );
}
$wgConf->suffixes = $wgLocalDatabases;
$wgConf->siteParamsCallback = 'efGetSiteParams';
$wgConf->extractAllGlobals( $wgDBname );
