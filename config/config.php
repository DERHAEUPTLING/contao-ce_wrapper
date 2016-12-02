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
 * Content elements
 */
$GLOBALS['TL_CTE']['wrappers'] = [
    'wrapper_start' => 'WrapperStartElement',
    'wrapper_stop'  => 'WrapperStopElement',
];

/**
 * Content wrappers
 */
$GLOBALS['TL_WRAPPERS']['start'][] = 'wrapper_start';
$GLOBALS['TL_WRAPPERS']['stop'][]  = 'wrapper_stop';
