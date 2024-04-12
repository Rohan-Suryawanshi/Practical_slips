<?php

$list=array("Rohan","Harish","Rahesh","Dishant","Vishal","Rahul","Gaurav");
$name= $_GET['query'];
$suggestion=array();
foreach($list as $l)
{
    if(strpos($l,$name)===0)
    {
        array_push($suggestion,$l);
    }
}
foreach($suggestion as $s)
{
    echo "$s<br>";
}

?>