<?php

class Multillect extends CFormModel
{
    public $text;
    public $from;
    public $to;
    public $resText;

    public function Tr($text, $from, $to)
    {
        $url = "https://api.multillect.com/translate/json/1.0/621?method=translate/api/translate&from=".$this->from."&to=".$this->to."&text=".$this->text."&sig=4868f954f8fa1500b0a84aa11cfd7aa0";

        $ans = file_get_contents($url);

        //echo $ans;

        $resres = json_decode($ans, true);

        //print_r($resres[result][translated]);

        //print_r($resres);

//        if(preg_match("/\"translated\":\".+?\"/u",$ans, $res))
//        {
//            //echo  $res[0];
//            $resText = substr(substr($res[0], 14), 0, -2);
//        }
//
//        $resText = str_replace('__ ', "\r\n", $resText);

        //echo utf8_decode($resText);

        $resText = $resres[result][translated];

        $resText = str_replace('__ ', "\n", $resText);

        return $resText;
    }
}