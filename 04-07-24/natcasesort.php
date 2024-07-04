<?php
$files=array("Picture1.jpg", "picture10.jpg", "picture2.jpg", "picture20.jpg","picture5.jpg","picture15.jpg","Picture8.jpg");
echo "<pre>";
print_r($files);

natcasesort($files);
echo "<hr>";
print_r($files);

?>