<?php

require_once 'fileOpen.php';

$fileopen = new fileOpen('test.txt');
$fileopen->openFile();
$g = $fileopen->readFile();
echo ($g);