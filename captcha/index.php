<?php
session_start();
$_SESSION = array();

include("captcha.php");
$_SESSION['captcha'] = topi_lib_php_captcha();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Topi Lib PHP Captcha script</title>
    <style type="text/css">       
        pre {
    		border: solid 1px #bbb;
    		padding: 10px;
    		margin: 2em;
    	}
    	
    	img {
    		border: solid 1px #fbd56c;
    		margin: 0 2em;
    	}
        
        a{
            color: #ff7e00;
        }
    </style>
</head>
<body>
    <h1>
        Topi Lib Captcha Example
    </h1>
    
    <h2>Usage</h2>
    
    <p>
    	The following code will prepare a "topi lib captcha" image and keep the code in a session
    	variable for later use:
    </p>
    
<pre>
&lt;?php
session_start();
include("captcha.php");
$_SESSION['captcha'] = topi_lib_php_captcha();
?&gt;
</pre>
    
    <p>
    	After the call to <code>topi_lib_php_captcha()</code> above, 
    	<code>$_SESSION['captcha']</code> will be something like this:
    </p>
    
<pre>
<?php
print_r($_SESSION['captcha']);
?>
</pre>
    
    <p>
    	To display the "topi lib captcha" image, create an HTML <code>&lt;img&gt;</code> using 
    	<code>$_SESSION['captcha']['image_src']</code> as the <code>src</code> attribute:
    </p>
    
    <p>
    	<?php
    	echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="topi lib captcha code">';
    	?>
    </p>
    
    <p>
    	To verify the CAPTCHA value on the next page load (or in an AJAX request), test 
    	against  <code>$_SESSION['captcha']['code']</code>. You can use 
    	<code>strtolower()</code> or <code>strtoupper()</code> to perform a 
    	case-insensitive match.
    </p>
    
    <h2>Copyright</h2>
    <p>
    	This product an example of <a href="hadiabdikhojasteh.ir#topiLib">Topi Lib version 1.3.1</a>, available on <a href="hadiabdikhojasteh.ir">Hadi Abdi Khojasteh personal page</a>. Topi Lib is under MIT License.
    </p>
</body>
</html>