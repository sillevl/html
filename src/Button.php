<?php

namespace Sillevl\Lib\Html;

class Button extends Element
{
    public function __construct($content, $attributes = array())
    {
        parent::__construct($content, $attributes);
        $this->tag = 'button';
    }
}
