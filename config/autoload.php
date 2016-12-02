<?php

/**
 * ce_wrapper extension for Contao Open Source CMS
 *
 * Copyright (C) 2016 derhaeuptling
 *
 * @author  derhaeuptling <https://derhaeuptling.com>
 * @author  Codefog <http://codefog.pl>
 * @license LGPL
 */


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
