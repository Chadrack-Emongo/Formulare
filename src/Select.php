<?php

require 'HTMLElement.php';
class Select extends HTMLElement {
    private $options = [];

    public function __construct($name) {
        parent::__construct('select');
        $this->setAttribute('name', $name);
    }

    public function addOption($value, $text) {
        $this->options[] = "<option value=\"$value\">$text</option>";
    }

    public function render() {
        $this->content = implode('', $this->options);
        return parent::render();
    }
}
