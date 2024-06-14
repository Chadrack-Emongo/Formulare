<?php
require 'classes/HTMLElement.php';
require 'classes/Input.php';
require 'classes/Button.php';
require 'classes/Select.php';
require 'classes/Checkbox.php';
require 'classes/Radio.php';
require 'classes/Textarea.php';
require 'classes/Form.php';
require 'classes/Request.php';
require 'classes/FileUpload.php';
require 'classes/Session.php';
require 'classes/Cookie.php';
require 'classes/Table.php';

Session::start();

$form = new Form('resume.php');
$form->addElement(new Input('text', 'name', Session::get('name')));
$form->addElement(new Input('email', 'email', Session::get('email')));
$form->addElement(new Textarea('comments', Session::get('comments')));

$select = new Select('country');
$select->addOption('fr', 'France');
$select->addOption('us', 'USA');
$select->addOption('jp', 'Japan');
$form->addElement($select);

$form->addElement(new Checkbox('newsletter', 'yes', 'Subscribe to newsletter'));
$form->addElement(new Radio('gender', 'male', 'Male'));
$form->addElement(new Radio('gender', 'female', 'Female'));
$form->addElement(new Input('file', 'document'));
$form->addElement(new Button('submit', 'Submit'));

echo $form->render();
?>
