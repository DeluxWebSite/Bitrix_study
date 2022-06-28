<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "feedback");
$APPLICATION->SetPageProperty("keywords_inner", "обратная связь");
$APPLICATION->SetPageProperty("title", "Обратная связь");
$APPLICATION->SetPageProperty("keywords", "обратная связь");
$APPLICATION->SetPageProperty("description", "Обратная связь");
$APPLICATION->SetTitle("Обратная связь");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"",
	Array(
		"EMAIL_TO" => "bitrix@qqbitrix.com",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array(),
		"USE_CAPTCHA" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>