<?php

$color = "I Love My country. It is my heart";
$text = preg_replace('/(\b[a-z])/i','<span style="color:red">\1</span>',$color);
echo $text;

// header('location:https://techstudy.org/');





?>