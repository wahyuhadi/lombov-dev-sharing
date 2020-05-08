<?php
if (isset($_GET['src']))
    highlight_file(__FILE__) and die();
if (isset($_GET['pass']))
{
    $pass=$_GET['pass'];
    if (intval($pass)=="Pdmin_P4sswD")
        echo "Success bypass "; //.require __DIR__."/flag.php";
    else
        echo "Failed  ";
}


?>
<p>Find a string that has a MD5 digest equal to itself!</p>
<form>
    <label>Answer: </label>
    <input type='text' name='pass' />
    <input type='submit' />
</form>

<a href='?src'>Source Code</a>