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
 * Add palettes
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['wrapper_start'] = '{type_legend},type;{template_legend:hide},customTpl;{expert_legend:hide},cssID';
$GLOBALS['TL_DCA']['tl_content']['palettes']['wrapper_stop']  = '{type_legend},type;{template_legend:hide},customTpl';
