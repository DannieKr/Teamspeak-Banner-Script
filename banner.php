<?php
# set your picture directory, where all your pictures are located in
$pictureDirecotry  = '/var/www/public/tsscript/pictures/*';

header('Content-Type: image/png');

$pictureList = glob($pictureDirecotry);
shuffle($pictureList);
$picture = file_get_contents($pictureList[0]);

echo $picture;
?> 
