<?php
$files=array("picture1.jpg", "picture10.jpg", "picture2.jpg", "picture20.jpg","picture5.jpg","picture15.jpg","picture8.jpg");
echo "<pre>";
print_r($files);

natsort($files);
echo "<hr>";
print_r($files);

?>