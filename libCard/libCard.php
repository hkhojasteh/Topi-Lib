<?php
require '../topi.lib.min';
// Create panel
$panel = new \TopiLib\TopiPanel('jpeg', 100, 205, 240, 220);
$panel->createBlank(500, 500);

// Add image to panel
$img = new \TopiLib\TopiImage(dirname(__FILE__) . './card.png', 'png');
$img->startX = 34;
$img->startY = 89;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './logo.png', 'png');
$img->startX = 294;
$img->startY = 289;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './pic.png', 'png');
$img->startX = 55;
$img->startY = 129;
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './in.png', 'png');
$img->position = 'right';
$img->startX = -40;
$img->startY = -80;
$panel->addImage($img);

$img = new \TopiLib\TopiImage('../topilib.png', 'png');
$img->position = 'left-bottom';
$panel->addImage($img);

$img = new \TopiLib\TopiImage(dirname(__FILE__) . './watermark.png', 'png transparent');
$img->position = 'tile';
$panel->addImage($img);

// Add styled text to panel
$txt = new \TopiLib\TopiText('../font.ttf', 'Hadi', 1, 15, 18, 18);
$txt->settxtHexColor('#fff');
$txt->startX = 150;
$txt->startY = 145;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font.ttf', 'Abdi Khojasteh', 1, 15, 24, 24);
$txt->settxtHexColor('#fff');
$txt->startX = 150;
$txt->startY = 165;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font1.otf', 'Example Public Library', 3, 12, 15, 18);
$txt->settxtHexColor('#fff');
$txt->startX = 370;
$txt->startY = 285;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font1.otf', 'www.example.org', 1, 20, 15, 18);
$txt->settxtHexColor('#fff');
$txt->startX = 55;
$txt->startY = 317;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font.ttf', 'EXPIRES: 16/12', 1, 20, 16, 18);
$txt->settxtHexColor('#fff');
$txt->startX = 55;
$txt->startY = 293;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font.ttf', 'Library Card Sample - Topi Lib - version 1.3.1', 3, 60, 12, 36);
$txt->settxtHexColor('#969696');
$txt->startX = 32;
$txt->startY = 456;
$panel->addText($txt);

// Render image
//$panel->renderToImage('./des.jpg');
$panel->render();
?>