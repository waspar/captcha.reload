<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = array(
	"NAME" => GetMessage("RELOAD_CAPTCHA"),
	"DESCRIPTION" => GetMessage("RELOAD_CAPTCHA_DESC"),
	"ICON" => "/images/icon.gif",
	"SORT" => 1,
	"COMPLEX" => "N",
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "misc",
        "CHILD" => array(
			"ID" => "misc_utils",
			"NAME" => 'Служебные',
		)
	),
);
?>