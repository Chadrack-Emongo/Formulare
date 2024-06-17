<?php

require 'src/HTMLElement.php';
class Select extends HTMLElement {
    private $options = [];

    public function __construct (string $name) {
        parent::__construct('select');
        $this->setAttribute('name', $name);
    }

    public function addOption(string $value,string $text) {
        $this->options[] = "<option value=\"$value\">$text</option>";
    }

    public function render() {
        $this->content = implode('', $this->options);
        return parent::render();
    }
}
