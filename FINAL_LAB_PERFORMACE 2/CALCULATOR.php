<?php
if(isset($_POST))
{
    extract($_POST);
    $operators = array('+', '-', '*', '/', '%', '+/-','.', '=');

    case 'equal':
            $last = '';
            if(strlen($old)>0)
            {
                $last = substr($old, -1);
            }
            if($old <> '' and !in_array($last, $operators))
            {
               $out = eval("return ($old);");
            }
            else
            {
                $out = $old;
            }
        break;

?>