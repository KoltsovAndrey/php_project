<?php

class Yandex extends CFormModel
{
    public $text;
    public $from;
    public $to;
    public $resText;

    public function YaTr($text, $from, $to)
    {
        $this->text = str_replace(' ', '%20', $this->text);

        $url = "https://translate.yandex.net/api/v1.5/tr.json/translate?key=trnsl.1.1.20171207T231404Z.7f8566471c9b82ca.0074ef70006b378bdf8ed8b3d28eb2b80a05a9c7&text=".$this->text."&lang=".$this->from."-".$this->to."&format=plain";

        $ans = file_get_contents($url);

        $resres = json_decode($ans, true);

//        if(preg_match("/\"text\":\[.*\]/u", $ans, $res))
//        {
//            $resText = substr(substr($res[0], 9), 0, -2);
//        }
//
//        $resText = str_replace('__', "\r\n", $resText);

        $resText = $resres[text][0];

        $resText = str_replace('__', "\n", $resText);

        return $resText;
    }
}