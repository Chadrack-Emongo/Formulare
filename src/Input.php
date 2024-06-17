<?php

require 'src/HTMLElement.php';

class Input extends HTMLElement {
    public function __construct($type, $name, $value = '') {
        parent::__construct('input');
        $this->setAttribute('type', $type);
        $this->setAttribute('name', $name);
        $this->setAttribute('value', $value);
    }
}
