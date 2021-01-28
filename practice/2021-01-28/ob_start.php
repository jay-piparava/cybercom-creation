<?php ob_start(); ?>
<h1>hello</h1>
<?php

header('location:http://www.google.com');

ob_flush();
?>