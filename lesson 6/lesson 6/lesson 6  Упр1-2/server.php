<?php

$oper=$_POST['operation'];
$arg1=$_POST['d1']; 
$arg2=$_POST['d2']; 

switch ($oper) {
        
    case '+':
        $result = $arg1 + $arg2;
        break;
     case '-': 
        $result = $arg1 - $arg2;
        break;
      case '*':  
        $result = $arg1 * $arg2;
        break; 
     case '/' :
        $result = $arg2 != 0 ? ($arg1 / $arg2) : 'На ноль делить нельзя';
        break; 
        
        default:
        return 'Операция не поддерживается';
}
 echo 'Результат &nbsp;'.$result.'<br>';
   ?> 

