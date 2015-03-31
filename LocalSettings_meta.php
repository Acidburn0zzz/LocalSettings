<?php

$wgSitename           = "Brickimedia Meta";
$wgMetaNamespace      = "Brickimedia";
$wgLogo               = "http://images.brickimedia.org/thumb/a/ab/Brickimedia-logo.png/150px-Brickimedia-logo.png";
$wgFavicon            = "http://images.brickimedia.org/favicons/favicon.ico";
$wgPasswordSender     = "meta";
$wgPasswordSenderName = "Brickimedia Meta";

$wgLanguageCode = "en";
$wgDefaultSkin = 'refreshed';

$wgGroupPermissions['board']['read'] = true;
$wgGroupPermissions['board']['edit'] = true;
$wgGroupPermissions['board']['userrights-interwiki'] = true;
$wgGroupPermissions['board']['userrights'] = true;
$wgGroupPermissions['board']['boardedit'] = true;
$wgGroupPermissions['board']['userrights-global'] = true;
$wgGroupPermissions['sysadmin']['userrights-global'] = true;
$wgGroupPermissions['sysadmin']['userrights-interwiki'] = true;
$wgGroupPermissions['sysadmin']['userrights'] = true;
$wgGroupPermissions['sysadmin']['globalblock'] = true;
$wgGroupPermissions['sysadmin']['globalunblock'] = true;
$wgAddGroups['sysadmin'] = array( 'sysadmin' );
$wgRemoveGroups['sysadmin'] = array( 'sysadmin' );

$wgGroupPermissions['boardedit']['boardedit'] = true;

$wgGroupPermissions['sysop']['globalblock'] = true;
$wgGroupPermissions['sysop']['globalunblock'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['sysop']['abusefilter-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;
$wgGroupPermissions['sysop']['abusefilter-view-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-log-private'] = true;

$wgLocalDatabases = array( 'en', 'customs', 'dev', 'gbc', 'ideas', 'admin' );

$wgExtraNamespaces[104] = "Board";
$wgNamespaceProtection[104] = array( 'boardedit' );
$wgNamespacesWithSubpages[104] = true;
$wgExtraNamespaces[105] = 'Board_talk';
$wgNamespacesWithSubpages[105] = true;

//uploading
$wgEnableUploads = true;
$wgUploadSizeWarning = 8388608;
$wgMaxUploadSize = 1024*1024*32; // 32MB Set mich higher than actually - the actual limits are in PHP config.

#SocialProfile
$wgUserStatsPointValues['edit'] = 5; // Points awarded on a mainspace edit
$wgUserStatsPointValues['vote'] = 1; // Points awarded for voting for an article
$wgUserStatsPointValues['comment'] = 1; // Points awarded for leaving a comment
$wgUserStatsPointValues['comment_plus'] = 2; // Points awarded if your comment gets a thumbs up
$wgUserStatsPointValues['comment_ignored'] = 0; // Points awarded if another user ignores your comments
$wgUserStatsPointValues['opinions_created'] = 5; // Points awarded for writing a blog article
$wgUserStatsPointValues['opinions_pub'] = 10; // Points awarded for having that article hit the "Blogs" page
$wgUserStatsPointValues['referral_complete'] = 0; // Points awarded for recruiting a new user
$wgUserStatsPointValues['friend'] = 1; // Points awarded for adding a friend
$wgUserStatsPointValues['foe'] = 0; // Points awarded for adding a foe
$wgUserStatsPointValues['gift_rec'] = 10; // Points awarded for receiving a gift
$wgUserStatsPointValues['gift_sent'] = 0; // Points awarded for giving a gift
$wgUserStatsPointValues['points_winner_weekly'] = 20; // Points awarded for having the most points for a week
$wgUserStatsPointValues['points_winner_monthly'] = 50; // Points awarded for having the most points for a month
$wgUserStatsPointValues['user_image'] = 5; // Points awarded for adding your first avatar
$wgUserStatsPointValues['poll_vote'] = 0; // Points awarded for taking a poll
$wgUserStatsPointValues['quiz_points'] = 0; // Points awarded for answering a quiz question
$wgUserStatsPointValues['quiz_created'] = 0; // Points awarded for creating a quiz question
$wgNamespacesForEditPoints = array( 0, 4, 12, 110, 1198 ); // Array of namespaces that can earn you points. Use numerical keys. 0 is mainspace, 4 is project
// The actual user level definitions -- key is simple: 'Level name' => points needed
$wgUserLevels = array(
	'Brickimedian' => 0,
);
$wgUserProfileDisplay['stats'] = true;

#multi upload
require_once("$IP/extensions/MultiUpload/MultiUpload.php");

# Donate
require_once("$IP/extensions/Donate/Donate.php");

# UploadWizard
require_once( "$IP/extensions/UploadWizard/UploadWizard.php" );
$wgUploadWizardConfig = array(
    'debug' => false,
    'altUploadForm' => 'Special:Upload',
    'fallbackToAltUploadForm' => false,
    'enableFormData' => true,  # Should FileAPI uploads be used on supported browsers?
    'enableMultipleFiles' => true,
    'enableMultiFileSelect' => true,
    'tutorial' => array( 'template' => 'File:UploadWizardTutorial.png' )
);

# Refreshed
$wgRefreshedHeader = array(
	'url' => 'http://meta.brickimedia.org/wiki/Main_Page',
	'img' => $refreshedMeta,
	'dropdown' => array(
		'http://en.brickimedia.org/wiki/Main_Page' => $refreshedEn,
		'http://customs.brickimedia.org/wiki/Main_Page' => $refreshedCustoms,
		'http://ideas.brickimedia.org/wiki/Main_Page' => $refreshedIdeas,
		'http://greatballcontraption.com/wiki/Main_Page' => $refreshedGBC,
		//'http://books.brickimedia.org/wiki/Main_Page' => $refreshedBooks,
		//'http://minifigures.brickimedia.org/wiki/Main_Page' => $refreshedMinifigures,
	)
);

# Translate
/*require_once ( "$IP/extensions/UniversalLanguageSelector/UniversalLanguageSelector.php" );
include_once("$IP/extensions/Translate/Translate.php");
$wgGroupPermissions['translator']['translate'] = true;
$wgTranslateDocumentationLanguageCode = 'qqq';
$wgGroupPermissions['sysop']['pagetranslation'] = true; disabled while it breaks meta */

# #brickimedia-rc-meta IRC
$wgRC2UDPAddress = '127.0.0.1';
$wgRC2UDPPort = '51665';
$wgRC2UDPPrefix = "";

#remove steward - some 1.22 thing
$wgGroupPermissions['smwadministrator']['smw-admin'] = false;
unset( $wgGroupPermissions['steward'] );
unset( $wgGroupPermissions['smwadministrator'] );
unset( $wgGroupPermissions['staff'] );