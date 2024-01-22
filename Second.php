<?php
if($_REQUEST["q"]!="") //Error!
{
if($_REQUEST["q"]=="A")
{
echo ("Activated");
}
else
{
echo ("Not activated");
}
}
else
{
    echo("Well no such input");
}
?>
