<?php
require 'classes/Request.php';
require 'classes/FileUpload.php';
require 'classes/Session.php';
require 'classes/Cookie.php';
require 'classes/Table.php';

Session::start();

$name = Request::post('name');
$email = Request::post('email');
$comments = Request::post('comments');
$country = Request::post('country');
$newsletter = Request::post('newsletter');
$gender = Request::post('gender');
$document = $_FILES['document'];

Session::set('name', $name);
Session::set('email', $email);
Session::set('comments', $comments);

Cookie::set('username', $name, time() + 3600);

if ($document['name']) {
    $upload = new FileUpload($document);
    $upload->save('uploads/' . $document['name']);
}

$table = new Table();
$table->addRow(['Name', $name]);
$table->addRow(['Email', $email]);
$table->addRow(['Comments', $comments]);
$table->addRow(['Country', $country]);
$table->addRow(['Newsletter', $newsletter]);
$table->addRow(['Gender', $gender]);

echo $table->render();
?>
