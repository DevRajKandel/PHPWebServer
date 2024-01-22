<?php
if($_REQUEST("q")!=="")
{

if($_REQUEST("q")==="A")
{
echo ("Activated");
  //Need to use sql connection to store complex data.
  //From this point we can continue producing json
}
else
{
echo ("Not activated");
}

}
?>
