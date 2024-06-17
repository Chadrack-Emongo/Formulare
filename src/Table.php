<?php

require 'src/HTMLElement.php';
class Table extends HTMLElement {
    private $rows = [];

    public function __construct() {
        parent::__construct('table');
    }

    public function addRow($cells) {
        $this->rows[] = "<tr>" . implode('', array_map(function($cell) {
            return "<td>$cell</td>";
        }, $cells)) . "</tr>";
    }

    public function render() {
        $this->content = implode('', $this->rows);
        return parent::render();
    }
}
