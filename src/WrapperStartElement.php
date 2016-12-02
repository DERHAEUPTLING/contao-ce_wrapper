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

class WrapperStartElement extends \Contao\ContentElement
{
    /**
     * Template name
     * @var string
     */
    protected $strTemplate = 'ce_wrapper_start';

    /**
     * Compile the content element
     */
    protected function compile()
    {
        if (TL_MODE === 'BE') {
            $this->strTemplate = 'be_wildcard';
            $this->Template    = new \Contao\BackendTemplate($this->strTemplate);
        }
    }
}
