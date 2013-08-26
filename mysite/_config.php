<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	"type" => 'MySQLDatabase',
	"server" => 'localhost',
	"username" => 'root',
	"password" => '',
	"database" => 'ss_mldb',
	"path" => '',
);

Object::add_extension('SiteConfig', 'CustomSiteConfig');

SS_Log::add_writer(new SS_LogFileWriter('F:\wamp\www\matt\error.log'));
Director::set_environment_type("dev");
MySQLDatabase::set_connection_charset('utf8');

// Set the current theme. More themes can be downloaded from
// http://www.silverstripe.org/themes/
SSViewer::set_theme('ml');

Director::setBaseURL('/');
// Set the site locale
i18n::set_locale('en_US');

// Enable nested URLs for this site (e.g. page/sub-page/)
if (class_exists('SiteTree')) SiteTree::enable_nested_urls();
