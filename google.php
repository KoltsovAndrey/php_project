<!--http://translate.google.ru/translate_a/t?client=x&text=apple&hl=en&sl=en&tl=ru-->

<?php
    
    $text = $_POST["text"];

    $url = "http://translate.google.ru/translate_a/t?client=x&text=".$text."&hl=ru&sl=ru&tl=en";

    echo $ans = file_get_contents($url)."<br/>";

//if(preg_match("/\"text\":\[\"\w*\"\]/",$ans, $res)){ 
//  echo($restr = substr(substr($res[0], 9), 0, -2)); 
// } 

?>

<!DOCTYPE HTML>
<html>
<head>
    
</head>
<body>
    <form method="post">
        <input type="text" name="text" id="text" value="<?php echo $text ?>">
        <input type="text" name="tr" id="tr" value="<?php echo $restr ?>">
        <input type="submit">
    </form>
</body>
</html>