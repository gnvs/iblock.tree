<?php
/* /local/components/gnvs/iblock.tree/templates/.default/result_modifier.php */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/* Проверка разделов */
if (!empty($arResult)) {
    foreach ($arResult as $key => $value) {
        $arResult[$key]['IS_PARENT'] = false;
        if (isset($arResult[$key+1]) && $arResult[$key+1]['DEPTH_LEVEL'] > $value['DEPTH_LEVEL']) {
            $arResult[$key]['IS_PARENT'] = true;
        }
    }
}

/* Картинка раздела */
if ($arResult["SECTION"]["PATH"]["0"]["PICTURE"]) {
    $tmpFileID = $arResult["SECTION"]["PATH"]["0"]["PICTURE"];
    $tmpFile = CFile::GetFileArray($tmpFileID);
    $arResult["SECTION"]["PATH"]["0"]["PICTURE"] = $tmpFile;
}