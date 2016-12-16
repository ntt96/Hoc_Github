<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name = "ntt" />
            <input type="submit" name="uploadclick" value="Upload"/>
        </form>
        <?php
            // Xử Lý Upload
            var_dump($_FILES);
        ?>
    </body>
</html>