<?php
class HTMLElement {
    protected $tag;
    protected $attributes = [];
    protected $content;

    public function __construct($tag, $content = '') {
        $this->tag = $tag;
        $this->content = $content;
    }

    public function setAttribute($name, $value) {
        $this->attributes[$name] = $value;
    }

    public function render() {
        $attributes = '';
        foreach ($this->attributes as $name => $value) {
            $attributes .= " $name=\"$value\"";
        }
        return "<{$this->tag}{$attributes}>{$this->content}</{$this->tag}>";
    }
}
