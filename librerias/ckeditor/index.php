<?php
    error_reporting(0);
    echo $_POST['dato'];
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>A Simple Page with CKEditor</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor.js"></script>
    </head>
    <body>
        <form action="" method="post">
            <textarea name="dato" id="editor1" rows="10" cols="80">
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            <input type="submit" name="enviar" value="enviar">
        </form>
    </body>
</html>