<?php

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
