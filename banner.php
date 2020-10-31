<?php
$pictureDirecotry  = 'pictures/*';

header('Content-Type: image/png');

$pictureList = glob($pictureDirecotry);

shuffle($pictureList);
$picture = file_get_contents($pictureList[0]);
echo $picture;
?> 
