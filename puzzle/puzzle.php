<?php
require '../topi.lib.min';
// Create panel
$panel = new \TopiLib\TopiPanel('png', 9, 100, 170, 190);

$panel->createBlank(500, 500);

// Add image to panel
$img = new \TopiLib\TopiImage(dirname(__FILE__) . './p1.png', 'png');
$img->startX = 91;
$img->startY = 301;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './p2.png', 'png');
$img->startX = 90;
$img->startY = 178;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './p3.png', 'png');
$img->startX = 90;
$img->startY = 95;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './p4.png', 'png');
$img->startX = 195;
$img->startY = 98;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './p5.png', 'png');
$img->startX = 170;
$img->startY = 200;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './p6.png', 'png');
$img->startX = 200;
$img->startY = 282;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './p7.png', 'png');
$img->startX = 275;
$img->startY = 305;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './p8.png', 'png');
$img->startX = 300;
$img->startY = 175;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './p9.png', 'png');
$img->startX = 273;
$img->startY = 98;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './border.png', 'png');
$img->startX = 63;
$img->startY = 72;
$panel->addImage($img);

// Add styled text to panel
$txt = new \TopiLib\TopiText('../font.ttf', 'Puzzle', 3, 25, 24, 36);
$txt->settxtHexColor('#fff');
$txt->startX = 200;
$txt->startY = 27;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font.ttf', 'Puzzle Sample - Topi Lib - version 1.3.1', 3, 60, 12, 36);
$txt->settxtHexColor('#fff');
$txt->startX = 32;
$txt->startY = 457;
$panel->addText($txt);

$img = new \TopiLib\TopiImage('../topilib.png', 'png');
$img->position = 'left-bottom';
$panel->addImage($img);

// Render image
//$panel->renderToImage('./des.png');
$panel->render();
?>