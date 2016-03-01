<?php

$wgSitename = "Brickimedia Admin Wiki";
$wgMetaNamespace = "Admin";
$wgPasswordSender = "admin";
$wgPasswordSenderName = "Brickimedia Admin Wiki";

$wgLogo = "http://images.brickimedia.org/d/df/BrickiCustomsLogo.png/160px-BrickiCustomsLogo.png";
$wgFavicon = "http://images.brickimedia.org/favicons/favicon.ico";

$wgLanguageCode = "en";

$wgRightsUrl  = "http://creativecommons.org/publicdomain/zero/1.0/";
$wgRightsText = "a Creative Commons 0 license";
$wgRightsIcon = "//meta.brickimedia.org/resources/assets/licenses/cc-0.png";

# SocialProfile
$wgUserStatsPointValues['edit'] = 5;
$wgUserStatsPointValues['vote'] = 1;
$wgUserStatsPointValues['comment'] = 1;
$wgUserStatsPointValues['comment_plus'] = 2;
$wgUserStatsPointValues['comment_ignored'] = 0;
$wgUserStatsPointValues['opinions_created'] = 5;
$wgNamespacesForEditPoints = $wgContentNamespaces;
$wgUserLevels = array( 'Sysop' => 0 );

$wgGroupPermissions['bureaucrat']['userrights'] = true;
$wgGroupPermissions['*']['createaccount'] = false; //nobody needs to be creating an account through the admin wiki

# Namespaces for each project's private discussions
require_once("$IP/extensions/Lockdown/Lockdown.php"); //extension to handle per-namespace restrictions of 'read' rights
define("NS_EN", 2000);
define("NS_CUSTOMS", 2001);
//NS-2002 is available
define("NS_IDEAS", 2003);
$wgExtraNamespaces[NS_EN] = "Bricki";
$wgExtraNamespaces[NS_CUSTOMS] = "Customs";
$wgExtraNamespaces[NS_IDEAS] = "Ideas";

# Protection for the namespaces
$wgGroupPermissions['*']['read'] = false;
$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['user']['read'] = false;
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['autoconfirmed']['read'] = false;
$wgGroupPermissions['autoconfirmed']['edit'] = false;
$wgGroupPermissions['sysop']['read'] = true;

$wgNamespaceProtection[NS_EN] = array( 'editen' );
$wgNamespacePermissionLockdown[NS_EN]['read'] = array( 'brickipedia', 'global' );
$wgNamespacePermissionLockdown[NS_EN]['move'] = array( 'brickipedia', 'global' );
$wgNamespacePermissionLockdown[NS_EN]['delete'] = array( 'brickipedia', 'global' );

$wgNamespaceProtection[NS_CUSTOMS] = array( 'editcustoms' );
$wgNamespacePermissionLockdown[NS_CUSTOMS]['read'] = array( 'customs', 'global' );
$wgNamespacePermissionLockdown[NS_CUSTOMS]['move'] = array( 'customs', 'global' );
$wgNamespacePermissionLockdown[NS_CUSTOMS]['delete'] = array( 'customs', 'global' );

$wgNamespaceProtection[NS_IDEAS] = array( 'editideas' );
$wgNamespacePermissionLockdown[NS_IDEAS]['read'] = array( 'ideas', 'global' );
$wgNamespacePermissionLockdown[NS_IDEAS]['move'] = array( 'ideas', 'global' );
$wgNamespacePermissionLockdown[NS_IDEAS]['delete'] = array( 'ideas', 'global' );

$all = array( 'sysop', 'en', 'customs', 'ideas', 'global');
$wgNamespacePermissionLockdown[NS_MAIN]['edit'] = $all;
$wgNamespacePermissionLockdown[NS_MAIN]['read'] = $all;
$wgNamespacePermissionLockdown[NS_MAIN]['move'] = $all;
$wgNamespacePermissionLockdown[NS_MAIN]['delete'] = $all;
$wgNamespacePermissionLockdown[NS_HELP]['edit'] = $all;
$wgNamespacePermissionLockdown[NS_HELP]['read'] = $all;
$wgNamespacePermissionLockdown[NS_HELP]['move'] = $all;
$wgNamespacePermissionLockdown[NS_HELP]['delete'] = $all;
$wgNamespacePermissionLockdown[NS_PROJECT]['edit'] = $all;
$wgNamespacePermissionLockdown[NS_PROJECT]['read'] = $all;
$wgNamespacePermissionLockdown[NS_PROJECT]['move'] = $all;
$wgNamespacePermissionLockdown[NS_PROJECT]['delete'] = $all;

# Permissions
$wgGroupPermissions['brickipedia']['editen'] = true;
$wgGroupPermissions['customs']['editcustoms'] = true;
$wgGroupPermissions['ideas']['editideas'] = true;
$wgGroupPermissions['global']['editen'] = true;
$wgGroupPermissions['global']['editcustoms'] = true;
$wgGroupPermissions['global']['editideas'] = true;

# Track edits in Special:Statistics just for records
$wgContentNamespaces = array( NS_MAIN, NS_HELP, NS_PROJECT, NS_EN, NS_CUSTOMS, NS_IDEAS);

# Refreshed
$wgRefreshedHeader = array(
	'url' => 'http://admin.brickimedia.org/wiki/Main_Page',
	'img' => $refreshedAdmin,
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
