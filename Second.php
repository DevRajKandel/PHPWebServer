<?php
if($_REQUEST["q"]!="") //Error!
{
if($_REQUEST["q"]=="A")
{
echo ("3");
}
else
{
if($_REQUEST["q"] == "B")
{
    echo("4");
}
else
if($_REQUEST["q"] == "C")
{
echo ("5");
}
else
{
echo ("Out of Range");
}
}
}
else
{
    echo("Empty Input");
}
?>
