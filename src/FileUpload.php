<?php

class FileUpload {
    private $file;

    public function __construct($file) {
        $this->file = $file;
    }

    public function save($destination) {
        move_uploaded_file($this->file['tmp_name'], $destination);
    }
}
