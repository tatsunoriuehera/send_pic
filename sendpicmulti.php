<html>
    <head>
    </head>
    <body>
        <form action="sendpicmulti_submit.php" method="post" enctype="multipart/form-data">
            <input name="userfile[]" type="file" id="upfile" onChange="printfile()"  multiple><br>
            <input type="submit" value="Send">
        </form>
        <div id="result"></div>
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
</html>
