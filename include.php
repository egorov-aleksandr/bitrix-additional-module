<?php

Bitrix\Main\Loader::registerAutoloadClasses(
    "additional.options",
    array(
        "AdditionalOptions\\OptionsManager\\OptionsManager" => "/lib/OptionsManager/OptionsManager.php",
        "AdditionalOptions\\FormPainter\\FormPainter" => "/lib/FormPainter/FormPainter.php",
        "AdditionalOptions\\EventHandler\\EventHandler" => "/lib/EventHandler/EventHandler.php",
    ));