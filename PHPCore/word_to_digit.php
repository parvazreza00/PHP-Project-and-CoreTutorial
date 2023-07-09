<?php 
function word_to_digit($word){
    $warr = explode(';',$word);
    $result = '';
    foreach($warr as $value){
        switch(trim($value)){
            case 'zero':
                $result .= '0';
                break;
            case 'one':
                $result .= '1';
                break;
            case 'two':
                $result .= '2';
                break;
            case 'three':
                $result .= '3';
                break;
            case 'four':
                $result .= '4';
                break;
            case 'five':
                $result .= '5';
                break;
            case 'six':
                $result .= '6';
                break;
            case 'seven':
                $result .= '7';
                break;  
            case 'eight':
                $result .= '8';
                break;
            case 'nine':
                $result .= '9';
                break;                                                                                      
        }
    }
    return $result;

}

echo word_to_digit("one;five;three;nine");



?>