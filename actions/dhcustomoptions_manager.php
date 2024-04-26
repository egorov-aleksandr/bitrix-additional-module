<?php

use Bitrix\Main;
use Bitrix\Main\Loader;
use Bitrix\Main\Config\Option;
use AdditionalOptions\OptionsManager\OptionsManager;
		
require $_SERVER["DOCUMENT_ROOT"] . '/bitrix/modules/main/include/prolog_before.php';
Loader::includeModule("additional.options");

$status = 'ok';
$formType='';
$siteId = '';
try {
    $optionsManager = new OptionsManager();

    foreach ($_POST as $option => $value) {
        if ($option == 'FORM_TYPE') {
            $formType = $value;
            continue;
        }
        if ($option == 'SITE_ID') {
            $siteId = $value;
            continue;
        }
        $optionsManager->setOption($option, $value, $siteId);
    }

    foreach ($_FILES as $option => $value) {
        if ($value['error'] == 0) {
            $oldFileId = Option::get("additional.options", $option, '',$siteId);
            CFile::Delete($oldFileId);

            $newFile = $value;
            $newFile['MODULE_ID'] = 'additional.options';
            $newFileId = CFile::SaveFile($newFile, "additional_options");
            $optionsManager->setOption($option, $newFileId, $siteId);
        } elseif ($_POST[$option . '_del']) {
            $oldFileId = Option::get("additional.options", $option, '', $siteId);
            CFile::Delete($oldFileId);
            $optionsManager->setOption($option, 'NULL', $siteId);
        }
    }
} catch (Exception $e)
{
    $status = 'error';
    echo $e->getMessage();
}
LocalRedirect("/bitrix/admin/dhcustomoptions.php?mess=".$status."&TYPE=".$formType."&SITE_ID=".$siteId);

