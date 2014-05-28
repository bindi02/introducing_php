<?php
$input = '<p><script>alert("heyyyy");</script><a href="http://www.eg.com/">Mysite </a></p>';
//strip_tags
echo strip_tags($input);
echo strip_tags($input,'<p><a>');

?>