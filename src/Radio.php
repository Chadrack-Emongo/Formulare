<?php

require 'src/HTMLElement.php';
class Radio extends HTMLElement {
    public function __construct( string $name,string $value,string $label) {
        parent::__construct('input');
        $this->setAttribute('type', 'radio');
        $this->setAttribute('name', $name);
        $this->setAttribute('value', $value);
        $this->content = $label;
    }

    public function render() {
        return parent::render() . " {$this->content}";
    }
}
