<?php

require 'HTMLElement.php';
class Textarea extends HTMLElement {
    public function __construct($name, $content = '') {
        parent::__construct('textarea', $content);
        $this->setAttribute('name', $name);
    }
}
