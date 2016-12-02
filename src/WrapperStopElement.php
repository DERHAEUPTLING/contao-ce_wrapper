<?php

class WrapperStopElement extends \Contao\ContentElement
{
    /**
     * Template name
     * @var string
     */
    protected $strTemplate = 'ce_wrapper_stop';

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
