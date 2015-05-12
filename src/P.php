<?php

namespace Sillevl\Html;

class P extends Element
{
    public function __construct($content, $attributes = array())
    {
        parent::__construct($content, $attributes);
        $this->tag = 'p';
    }
}