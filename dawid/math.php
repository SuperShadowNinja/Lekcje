<?php
class math{
    public function dodawanie($a,$b){
        return $a+$b;
    }
    public function odejmowanie($a,$b){
        return $a-$b;
    }
    public function mnożenie($a,$b){
        return $a*$b;
    }
    public function dzielenie($a,$b){
        return $a/$b;
    }
}
$example= new math();
echo $example->dzielenie($example->dodawanie(5, 11), $example->odejmowanie(3, 1));

?>