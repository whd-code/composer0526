<?php
// include '../src/img.php';
use whdcode\composer0526\image;
use whdcode\composer0526\lib\user;


include '../vendor/autoload.php';

$user=new User;
echo $user->create();
echo '<hr/>';
$Object = new Image;

echo $Object ->make();
echo '<hr/>';
echo app();

