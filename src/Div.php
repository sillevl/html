<?php

namespace Sillevl\Lib\Html;

class Div extends Element
{
    public function __construct($content, $attributes = array())
    {
        parent::__construct($content, $attributes);
        $this->tag = 'div';
    }
}