<?php

require('vendor/autoload.php');


$form = new App\Form();
$form->addElement(new App\TextElement('Email:'));
$form->addElement(new App\InputElement());

$embed = new App\Form();
$embed->addElement(new App\TextElement('Password:'));
$embed->addElement(new App\InputElement());
var_dump($form);
$form->addElement($embed);
var_dump($form);
// This is just an example, in a real world scenario it is important to remember that web browsers do not
// currently support nested forms
