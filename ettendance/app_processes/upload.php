<?php
$store_name = $_REQUEST['store_name'];
// Set new file name
$new_image_name = $store_name.mt_rand().".jpg";
// upload file
move_uploaded_file($_FILES["file"]["tmp_name"], '../store_images/'.$new_image_name);
echo $new_image_name;