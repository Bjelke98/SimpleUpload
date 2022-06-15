<?php
$target_dir = "./up/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$newfilename = time() . '_' . rand(100, 999) . '.' . end(explode(".",$_FILES["fileToUpload"]["name"]));
if ($uploadOk == 0) {
  echo "failed1";
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $newfilename)) {
    echo $newfilename;
  } else {
    echo "failed2";
  }
}
?>