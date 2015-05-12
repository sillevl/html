<?php

namespace Sillevl\Html;

class H6 extends Element
{
    public function __construct($content, $attributes = array())
    {
        parent::__construct($content, $attributes);
        $this->tag = 'h6';
    }
}