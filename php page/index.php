<?php
echo"welcome to rock code";
echo "<br>my caculator app<br><br>enter the details";

if(isset($_post['cal']))
{
    $txt1=$_post['n1']
    $txt2=$_post['n2']
    $ans=$_post['cal']

    if($ans=="+")
    $res=$txt1+$txt2;
    else if($ans=="-")
    $res=$txt1-$txt2;
    else if($ans=="/")
    $res=$txt1/$txt2;
    else if($ans=="%")
    $res=$tet1%$txt2;
}
?>"
<html>
    <form method="post" action="">
        <br>
        number 1: <input name="n1" value="<?php 
        echo $txt1="";?>">
        <br>
        <br>
        number 2: <input name="n2" value="<?php 
        echo $txt2="";?>">
        result :  <input name="res" value="<?php 
        echo $res;?>">
        <br>
        <br>
        <input type="submit" name="cal" 
        value="+">
        <input type="submit" name="cal" 
        value="-">
        <input type="submit name="cal" 
value="/">
<input type="submit name="cal" 
        value="%">
    </form>
</html>