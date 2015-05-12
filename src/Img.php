<?php

namespace Sillevl\Html;

class Img extends Element
{
    public function __construct($attributes = array())
    {
        parent::__construct('', $attributes);
        $this->tag = 'img';
    }

    public function __toString()
    {
        return "<{$this->tag} ".$this->attributes().'/>';
    }
}