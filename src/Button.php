<?php

require 'src/HTMLElement.php';
class Button extends HTMLElement {
    public function __construct(string $type, $content) {
        parent::__construct('button', $content);
        $this->setAttribute('type', $type);
    }
}
