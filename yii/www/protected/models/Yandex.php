<?php


class Yandex extends CFormModel
{
    public $text;
    public $resText;

    public function YaTr($text)
    {
        //$text = $_POST["text"];

        $url = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20171207T231404Z.7f8566471c9b82ca.0074ef70006b378bdf8ed8b3d28eb2b80a05a9c7&text=".$this->text."&lang=ru-en&format=plain";

        $ans = file_get_contents($url);

        if(preg_match("/\"text\":\[\"\w*\"\]/",$ans, $res))
        {
            $resText = substr(substr($res[0], 9), 0, -2);
        }
        return $resText;
    }
}
