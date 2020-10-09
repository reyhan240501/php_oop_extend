<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str="<p>Deskripsi text yang boleh ditampilkan<p><h2>Text yang tidak ditampilkan</h2><script>alert(document.cookie);</script>";
        $text=strip_tags($str,'p');

        var_dump($text);
    ?>
</body>
</html>