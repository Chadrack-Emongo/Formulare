<?php

require 'HTMLElement.php';
class Checkbox extends HTMLElement {
    public function __construct($name, $value, $label) {
        parent::__construct('input');
        $this->setAttribute('type', 'checkbox');
        $this->setAttribute('name', $name);
        $this->setAttribute('value', $value);
        $this->content = $label;
    }

    public function render() {
        return parent::render() . " {$this->content}";
    }
}

