<?php

require 'HTMLElement.php';
class Form extends HTMLElement {
    private $elements = [];

    public function __construct($action, $method = 'post') {
        parent::__construct('form');
        $this->setAttribute('action', $action);
        $this->setAttribute('method', $method);
    }

    public function addElement(HTMLElement $element) {
        $this->elements[] = $element;
    }

    public function render() {
        $this->content = implode('', array_map(function($element) {
            return $element->render();
        }, $this->elements));
        return parent::render();
    }
}
