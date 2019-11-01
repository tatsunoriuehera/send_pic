<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>

<?php
  for ($i=0; $i<count($_FILES['userfile']['name']); $i++) {
    $file_ext = pathinfo($_FILES["userfile"]["name"][$i], PATHINFO_EXTENSION);
    if (/*FileExtensionGetAllowUpload($file_ext) && */ is_uploaded_file($_FILES["userfile"]["tmp_name"][$i])) {
      if(move_uploaded_file($_FILES["userfile"]["tmp_name"][$i], "img/".$_FILES["userfile"]["name"][$i])) {
          echo $_FILES["userfile"]["name"][$i] . "_file upload suceed!<br>";
      } else {
        echo "error!<br>";
      }
    } else {
      echo "no choose file<br>";
    }
  }
  //アップロードできるファイルに拡張子の制限をかけたい時
  function FileExtensionGetAllowUpload($ext){
    $allow_ext = array("gif","jpg","jpeg","png","eps");
    foreach($allow_ext as $v){
      if ($v === $ext){
        return 1;
      }
    }
    return 0;
  }
?>
