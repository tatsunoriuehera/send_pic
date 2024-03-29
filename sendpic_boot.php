<!-- bootstrap -->
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    .imagePreview {
        width: 100%;
        height: 180px;
        background-position: center center;
        background-size: cover;
        -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
        display: inline-block;
    }
</style>
    </head>
    <body>
        <div class="container page-header">
            <div class="col-sm-4">
                <form action="sendpicmulti_submit.php" method="post" enctype="multipart/form-data">
                    <div class="imagePreview"></div>
                    <div class="input-group">
                        <label class="input-group-btn">
                            <span class="btn btn-primary">
                                Choose File
                                <input type="file" style="display:none" class="uploadFile" name="userfile[]" id="upfile" onChange="printfile()" multiple>
                            </span>
                        </label>
                        <input type="text" class="form-control" readonly="">
                    </div>
                    <input type="submit" value="submit" class="btn btn-default"/>
                </form>
                <div id="result"></div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
        $(document).on('change', ':file', function() {
            var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.parent().parent().next(':text').val(label);

            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
            if (/^image/.test( files[0].type)){ // only image file
                var reader = new FileReader(); // instance of the FileReader
                reader.readAsDataURL(files[0]); // read the local file
                reader.onloadend = function(){ // set image data as background of div
                    input.parent().parent().parent().prev('.imagePreview').css("background-image", "url("+this.result+")");
                }
            }
        });
        </script>
        <script>
            function printfile(){
                var fileList = document.getElementById("upfile").files;
                var list = "";
                for(var i=0; i<fileList.length; i++){
                list += fileList[i].name + "<br>";
                }
                document.getElementById("result").innerHTML = list;
            }
        </script>
    </body>
</html
