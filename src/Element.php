<?php

namespace Sillevl\Html;

class Element
{
    protected $tag = '';
    protected $content = '';
    protected $attributes = array();

    public function __construct($content, $attributes)
    {
        $this->content = $content;
        $this->attributes = $attributes;
    }

    protected function attributes()
    {
        $output = '';
        foreach ($this->attributes as $name => $value) {
            $output .= "$name=\"$value\" ";
        }

        return $output;
    }

    public function __toString()
    {
        return "<{$this->tag} ".$this->attributes().">{$this->content}</{$this->tag}>";
    }
}