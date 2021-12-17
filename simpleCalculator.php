<!DOCTYPE html>
<html lang="en">
<head>
<title> Simple Calculator</title>

</head>
<body>
    <form action="" method="" name="">
       <label for="txt1"> Enter First Number </label> :
       <input id= "txt1" type="text" name="num1" required><br> <br>
       <label for="txt2"> Enter First Number </label>
       <input id="txt2" type="text" name="num2" required><br> <br>
       <label for="rslt"> Result: </label>       
       <input id= "rslt" type="text" name="result" disabled ><br> <br>
       <input type=submit value= "add" name="operation">
       <input type=submit value= "sub" name="operation">
       <input type=submit value= "prod" name="operation">
       <input type=submit value= "divi" name="operation">
       

    </form>
</body>
<?php

echo "Hey Calculator";
?>
</html>
>