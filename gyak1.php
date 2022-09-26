<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Gyakorlas 1.</title>
</head>
<body>
    <?php
    //Szövegek
    echo "Helló, Én egy PHP szkript vagyok!";
    print "<br/>";
    $szoveg1 ="Érik a szőlő,";
    $szoveg2 = "Hajlik a vessző.";
    print $szoveg1 ." ". $szoveg2;
    print "<p/>";
    $a = "Pisti";
    $b = &$a;
    $b = "Józsi";
    print $a;
    print "<p/>";
    ?>
</body>
</html>