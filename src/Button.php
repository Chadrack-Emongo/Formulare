<?php

require 'HTMLElement.php';
class Button extends HTMLElement {
    public function __construct($type, $content) {
        parent::__construct('button', $content);
        $this->setAttribute('type', $type);
    }
}
