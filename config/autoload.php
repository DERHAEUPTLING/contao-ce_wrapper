<?php

/**
 * Register the classes
 */
ClassLoader::addClasses(
    [
        'WrapperStartElement' => 'system/modules/ce_wrapper/src/WrapperStartElement.php',
        'WrapperStopElement'  => 'system/modules/ce_wrapper/src/WrapperStopElement.php',
    ]
);

/**
 * Register the templates
 */
TemplateLoader::addFiles(
    [
        'ce_wrapper_start' => 'system/modules/ce_wrapper/templates',
        'ce_wrapper_stop'  => 'system/modules/ce_wrapper/templates',
    ]
);
