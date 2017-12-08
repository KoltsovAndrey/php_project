<?php
    
    $text = $_POST["text"];

    $url = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20171207T231404Z.7f8566471c9b82ca.0074ef70006b378bdf8ed8b3d28eb2b80a05a9c7&text=".$text."&lang=ru-en&format=plain";

echo $ans = file_get_contents($url)."<br/>";

if(preg_match("/\"text\":\[\"\w*\"\]/",$ans, $res)){ 
  echo($restr = substr(substr($res[0], 9), 0, -2)); 
 } 

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