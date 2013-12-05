<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arParams["FORM_NAME"] = is_array($arParams["FORM_NAME"])? $arParams["FORM_NAME"]: array();
$arParams["USE_GLOBAL"] = ($arParams["USE_GLOBAL"] == "Y")? true : false;

$this->IncludeComponentTemplate();
?>
