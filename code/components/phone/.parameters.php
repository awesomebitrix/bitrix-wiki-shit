<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);


$arComponentParameters = array(
    "GROUPS" => array(),
    "PARAMETERS" => array(
        "CACHE_TIME"  =>  array("DEFAULT"=>36000000),
        "PHONE" => array(
            "PARENT" => "BASE",
            "NAME" => Loc::getMessage("PHONE"),
            "TYPE" => "STRING",
            "DEFAULT" => '',
        ),
    ),
);
