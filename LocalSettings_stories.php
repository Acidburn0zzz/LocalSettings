<?php

$wgSitename = "LEGO Stories Wiki";
$wgMetaNamespace = "LEGO_Stories_Wiki";
$wgNamespaceAliases['LSW'] = NS_PROJECT;
$wgNamespaceAliases['LSW_T'] = NS_PROJECT_TALK;
$wgPasswordSender = "stories";
$wgPasswordSenderName = "LEGO Stories Wiki";

$wgLogo = "http://images.brickimedia.org/thumb/9/96/LEGO_Stories_Wiki_Logo.png/160px-LEGO_Stories_Wiki_Logo.png";
$wgFavicon = "http://images.brickimedia.org/favicons/favicon.ico";

$wgLanguageCode = "en";

#Skin stuff
require_once( "$IP/skins/Quartz/quartz/resources.php" );
$wgDefaultSkin = 'refreshed';
$wgSkipSkins = array("lia", "liamobile", "standard");

#SocialProfile
$wgUserStatsPointValues['edit'] = 5; // Points awarded on a mainspace edit
$wgUserStatsPointValues['vote'] = 1; // Points awarded for voting for an article
$wgUserStatsPointValues['comment'] = 2; // Points awarded for leaving a comment
$wgUserStatsPointValues['comment_plus'] = 2; // Points awarded if your comment gets a thumbs up
$wgUserStatsPointValues['comment_ignored'] = 0; // Points awarded if another user ignores your comments
$wgUserStatsPointValues['referral_complete'] = 0; // Points awarded for recruiting a new user
$wgUserStatsPointValues['friend'] = 1; // Points awarded for adding a friend
$wgUserStatsPointValues['foe'] = 0; // Points awarded for adding a foe
$wgUserStatsPointValues['gift_rec'] = 10; // Points awarded for receiving a gift
$wgUserStatsPointValues['gift_sent'] = 0; // Points awarded for giving a gift
$wgUserStatsPointValues['points_winner_weekly'] = 20; // Points awarded for having the most points for a week
$wgUserStatsPointValues['points_winner_monthly'] = 50; // Points awarded for having the most points for a month
$wgUserStatsPointValues['user_image'] = 5; // Points awarded for adding your first avatar
$wgUserStatsPointValues['poll_vote'] = 1; // Points awarded for taking a poll
$wgUserStatsPointValues['quiz_points'] = 1; // Points awarded for answering a quiz question
$wgUserStatsPointValues['quiz_created'] = 0; // Points awarded for creating a quiz question
$wgNamespacesForEditPoints = array( 0, ); // Array of namespaces that can earn you points. Use numerical keys. 0 is mainspace, 4 is project
// The actual user level definitions -- key is simple: 'Level name' => points needed
$wgUserLevels = array(
	'Learner' => 0,
	'Bookkeeper' => 1000,
	'Wordsmith' => 1100,
	'Reader' => 1250,
	'Skimmer' => 1500,
	'Scribbler' => 2000,
	'Scribe' => 3500,
	'Poet' => 6000,
	'Dramatist' => 8500,
	'Editor' => 11000,
	'Essayist' => 13500,
	'Journalist' => 16000,
	'Author' => 18500,
	'Novelist' => 21000,
	'Critic' => 26000,
	'Master Writer' => 31000,
);
$wgUserProfileDisplay['stats'] = true;

#Custom namespaces
define("NS_PORTAL", 300);
define("NS_PORTAL_TALK", 301);

$wgExtraNamespaces[NS_PORTAL] = "Portal";
$wgExtraNamespaces[NS_PORTAL_TALK] = "Portal_talk";

$wgNamespacesWithSubpages[NS_PORTAL] = true; //subpages enabled for the review namespace

$wgGroupPermissions['*']['edit'] = true;
$wgGroupPermissions['user']['edit'] = true;
$wgGroupPermissions['*']['createtalk'] = true;
$wgGroupPermissions['*']['createpage'] = false;
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['sysop']['createaccount'] = true;
$wgGroupPermissions['sysadmin']['createaccount'] = true;
$wgRemoveGroups['sysop'][] = 'betatest';

#global file descriptors
require_once("$IP/extensions/GlobalUsage/GlobalUsage.php");

#AVRU user group
$wgGroupPermissions['AVRU'] = $wgGroupPermissions['patroller'];
$wgGroupPermissions['AVRU']['delete'] = true;
$wgGroupPermissions['AVRU']['modchat'] = true;
$wgAddGroups['sysop'][] = 'AVRU';
$wgRemoveGroups['sysop'][] = 'AVRU';
$wgAddGroups['AVRU'][] = 'blockedfromchat';
$wgRemoveGroups['AVRU'][] = 'blockedfromchat';


# Refreshed
$wgRefreshedHeader = array(
	'url' => 'http://stories.brickimedia.org/wiki/Main_Page',
	'img' => $refreshedStories,
	'dropdown' => array(
		'http://meta.brickimedia.org/wiki/Main_Page' => $refreshedMeta,
		'http://en.brickimedia.org/wiki/Main_Page' => $refreshedEn,
		'http://customs.brickimedia.org/wiki/Main_Page' => $refreshedCustoms,
		'http://ideas.brickimedia.org/wiki/Main_Page' => $refreshedIdeas,
		'http://greatballcontraption.com/wiki/Main_Page' => $refreshedGBC,
		//'http://books.brickimedia.org/wiki/Main_Page' => $refreshedBooks,
		//'http://minifigures.brickimedia.org/wiki/Main_Page' => $refreshedMinifigures,
	)
);

# #brickimedia-rc-stories IRC
$wgRC2UDPAddress = '127.0.0.1';
$wgRC2UDPPort = '51667';
$wgRC2UDPPrefix = "";
