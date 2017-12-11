<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/12/2017
 * Time: 23:23
 */


require('vendor/autoload.php');


writeln('BEGIN TESTING BUILDER PATTERN');
writeln('');

$pageBuilder  = new \App\HTMLPageBuilder();
$pageDirector = new \App\HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();
$page = $pageDirector->GetPage();
writeln($page->showPage());
writeln('');

writeln('END TESTING BUILDER PATTERN');

function writeln($line_in)
{
    echo $line_in . "<br/>";
}