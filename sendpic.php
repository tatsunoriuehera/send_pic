<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
  <!--<link rel="stylesheet" href="css/style.css">-->
</head>
<body>
  <!--エンコード化-->
  <form action="submit.php" method="post" enctype="multipart/form-data">
    <fieldset>
      <!--<input type="text" name="ok" />-->
      <div>picture:<input type="file" name="picture" /></div>
      <div><input type="submit" value="submit" /></div>
    </fieldset>
     <div><!--一時ファイルの保存場所-->
       <?php print ini_get("upload_tmp_dir"); ?>
     </div>
  </form>
</body>
</html>
