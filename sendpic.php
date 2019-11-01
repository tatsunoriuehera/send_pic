<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
  <!-- BootstrapのCSS読み込み -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!-- jQuery読み込み -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- BootstrapのJS読み込み -->
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--<link rel="stylesheet" href="css/style.css">-->
</head>
<body>
  <!--エンコード化-->
  <form action="sendpic_submit.php" method="post" enctype="multipart/form-data">
    <fieldset>
      <!--<input type="text" name="ok" />-->
      <div class="form-group">picture:<input type="file" name="picture" class="form-control-file"/></div>
      <div><input type="submit" value="submit" class="btn btn-default"/></div>
    </fieldset>
     <div><!--一時ファイルの保存場所-->
       <?php print ini_get("upload_tmp_dir"); ?>
     </div>
  </form>
</body>
</html>
