<?php
$result="";
//checking if the submit btn is clicked
if(isset($_POST['submit'])){
    // echo "Info submitted";
    $m=$_POST['num1'];
    $n=$_POST['num11'];
    $op=$_POST['operation'];
     if(is_numeric($m) && is_numeric($n))
     {
         switch($op)
         {
             case "Add" :
                $result=$m+$n;
                break;
             case "Subtract" :
                $result=$m-$n;
                break;
            case "Product" :
                 $result=$m*$n;
                 break;
             case "Divide" :
                $result=$m/$n;
                   break;
            default:
              echo "Please select a valid Operator";
         }
     }

}
?>
<!doctype html
<html>
    <head>
    </head>
    <body>
    <p>
       <label for="txt3" >Result :</label>
       <input id="tx3" type="text" name="rslt" value="<?=$result?>" disabled/>
    </p>
    </body>
   
</html>