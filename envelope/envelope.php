<?php
require '../topi.lib.min';
// Create panel
$panel = new \TopiLib\TopiPanel('png transparent', 9, 0, 0, 0);

$panel->createFromPNG('./body.png');

// Add image to panel
$img = new \TopiLib\TopiImage(dirname(__FILE__) . './stamps.png', 'png');
$img->startX = 270;
$img->startY = 35;
$panel->addImage($img);

// Add styled text to panel
$txt = new \TopiLib\TopiText('../font.ttf', 'Mr. Hadi Abdi Khojasteh', 1, 25, 18, 18);
$txt->startX = 50;
$txt->startY = 115;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font.ttf', 'Azadi Ave, #215', 1, 25, 18, 18);
$txt->startX = 50;
$txt->startY = 140;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font.ttf', 'Tehran, Tehran, 32000', 1, 25, 18, 18);
$txt->startX = 50;
$txt->startY = 165;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font.ttf', 'I.R.IRAN', 1, 25, 18, 18);
$txt->startX = 50;
$txt->startY = 190;
$panel->addText($txt);

$txt = new \TopiLib\TopiText('../font.ttf', 'Envelope Sample - Topi Lib - version 1.3.1', 1, 60, 12, 36);
$txt->startX = 50;
$txt->startY = 250;
$panel->addText($txt);

$img = new \TopiLib\TopiImage('../topilib.png', 'png');
$img->position = 'left-bottom';
$img->startX = 15;
$img->startY = -15;
$panel->addImage($img);

// Render image
//$panel->renderToImage('./des.png');
$panel->render();
?>