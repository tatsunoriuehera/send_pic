<?php
  $file=$_FILES["picture"];//input_typeのname名　連想配列として格納される
?>
<!--連想配列の中身を表示-->
file_name:<?php print ($file["name"]); ?><br />
file_type:<?php print ($file["type"]); ?><br />
upload_file:<?php print ($file["tmp_name"]); //一時フォルダ?><br />
error:<?php print ($file["error"]); ?><br />
size:<?php print ($file["size"]); ?><br />

<?php
$ext=substr($file["name"],-4);//拡張子の検査　後ろから４つ分
if($ext==".git"||$ext==".jpg"||$ext==".png"||$ext==".JPG"):
  $filePath="./user_img/" . $file["name"];//保存したいフォルダの指定
  $success=move_uploaded_file($file["tmp_name"], $filePath);//一時フォルダから保存したいフォルダへ移動

  if($success): ?>
    upload success!
    <img=src="<?php print($filePath); ?>">
  <?php else: ?>
    file upload failure!
  <?php endif; ?>

<?php else: ?>
upload file is "gif" or "jpg" or "png" only!
<?php endif; ?>
