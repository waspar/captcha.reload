<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"GROUPS" => array(
		"MAIN_PARAMS" => array(
			"NAME" => GetMessage("MAIN_PARAMS"),
			"SORT" => "100"
			),
		"ADDITIONAL_PARAMS" => array(
			"NAME" => GetMessage("ADDITIONAL_PARAMS"),
			"SORT" => "110"
			)
		),
	"PARAMETERS" => array( 
		"USE_GLOBAL" => Array(
			"PARENT" => "MAIN_PARAMS",
			"NAME" => GetMessage("C_USE_GLOBAL"),
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y",
		),
		"IMAGE_DIALOG" => Array(
			"PARENT" => "ADDITIONAL_PARAMS",
			"NAME" => GetMessage("IMAGE_DIALOG"),
			"TYPE" => "FILE",
			"DEFAULT" => "/bitrix/components/florange/reload.captcha/templates/.default/images/reload.png"
		)
	)
);
?>