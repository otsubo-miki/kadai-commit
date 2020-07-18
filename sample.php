<?php
$result = "無し";
?>

<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UTF-8">
        <title>おみくじ</title>
    </head>
    <body>
        <h1>おみくじ</h1>
        <p1>おみくじの結果：<?php print htmlspecialchars($result, ENT_QUOTES,"UTF-8");?></p1>
        <form action="sample.php" method="post">
            <buttn type="submit" name="act" value = "draw">おみくじをひく！</buttn>
        </form>
    </body>
</html>
    