<?php
function topi_lib_php_captcha($config = array()) {
    $captcha_config = array(
        'code' => '',
        'min_length' => 5,
        'max_length' => 7,
        'backgrounds' => array('./bg.png'),             //you can extednd it
        'fonts' => array('./Moms-typewriter.ttf'),      //you can extednd it
        'characters' => 'ABCDEFGHJKLMNPRSTUVWXYZabcdefghjkmnprstuvwxyz23456789',
        'min_font_size' => 24,
        'max_font_size' => 28,
        'color' => '#ff7e00',
        'angle_min' => -6,
        'angle_max' => 6,
        'shadow' => true,
        'shadow_color' => '#fff',
        'shadow_offset_x' => -1,
        'shadow_offset_y' => 1
    );
    
    // Restrict certain values
    if( $captcha_config['min_length'] < 1 ) $captcha_config['min_length'] = 1;
    if( $captcha_config['angle_min'] < 0 ) $captcha_config['angle_min'] = 0;
    if( $captcha_config['angle_max'] > 10 ) $captcha_config['angle_max'] = 10;
    if( $captcha_config['angle_max'] < $captcha_config['angle_min'] ) $captcha_config['angle_max'] = $captcha_config['angle_min'];
    if( $captcha_config['min_font_size'] < 10 ) $captcha_config['min_font_size'] = 10;
    if( $captcha_config['max_font_size'] < $captcha_config['min_font_size'] ) $captcha_config['max_font_size'] = $captcha_config['min_font_size'];
    
    // Use milliseconds instead of seconds
    srand(microtime() * 100);
    
    // Generate CAPTCHA code if not set by user
    if( empty($captcha_config['code']) ) {
        $captcha_config['code'] = '';
        $length = rand($captcha_config['min_length'], $captcha_config['max_length']);
        while( strlen($captcha_config['code']) < $length ) {
            $captcha_config['code'] .= substr($captcha_config['characters'], rand() % (strlen($captcha_config['characters'])), 1);
        }
    }
    
    // Generate HTML for image src
    $image_src = substr(__FILE__, strlen( realpath($_SERVER['DOCUMENT_ROOT']) )) . '?_CAPTCHA&amp;t=' . urlencode(microtime());
    $image_src = '/' . ltrim(preg_replace('/\\\\/', '/', $image_src), '/');
    
    $_SESSION['_CAPTCHA']['config'] = serialize($captcha_config);
    
    return array(
        'code' => $captcha_config['code'],
        'image_src' => $image_src
    );
    
}

// Draw the image
if( isset($_GET['_CAPTCHA']) ) {
    session_start();
    $captcha_config = unserialize($_SESSION['_CAPTCHA']['config']);
    if( !$captcha_config ) exit();
    unset($_SESSION['_CAPTCHA']);
    
    // Use milliseconds instead of seconds
    srand(microtime() * 100);
    
    require '../topi.lib.min';
    // Create panel
    $panel = new \TopiLib\TopiPanel('jpeg', 60, 255, 255, 255);
    $panel->txtLMagicMagnet = true;
    $panel->txtTMagicMagnet = true;
    $panel->txtRMagicMagnet = true;
    $panel->txtBMagicMagnet = true;
    $panel->txtLMagicMagnetTol = 10;
    $panel->createBlank(300, 200);
    
    // Pick random background, get info, and start captcha
    $background = $captcha_config['backgrounds'][rand(0, count($captcha_config['backgrounds']) -1)];
    $image = new \TopiLib\TopiImage($background, 'png');
    $image->position = 'tile';
    $panel->addImage($image);
 
    // Determine text angle
    $angle = rand( $captcha_config['angle_min'], $captcha_config['angle_max'] ) * (rand(0, 1) == 1 ? -1 : 1);
    
    // Select font randomly
    $font = $captcha_config['fonts'][rand(0, count($captcha_config['fonts']) - 1)];
    
    // Verify font file exists
    if( !file_exists($font) ) throw new Exception('Font file not found: ' . $font);
    
    //Set the font size.
    $font_size = rand($captcha_config['min_font_size'], $captcha_config['max_font_size']);

    $text1 = new \TopiLib\TopiText($font, $captcha_config['code'], 1, $captcha_config['max_font_size']+1, $font_size, $font_size);
    $text1->rotation = $angle;
    $text1->settxtHexColor($captcha_config['color']);
    $text1->startY = 20;
    $text1->startX = 20;
    $panel->addText($text1);  
    $panel->render();
}
?>