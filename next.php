<?php
$a=$_POST["pickup"];
$b=$_POST["drop"];
global $dis1;
global $dis2;


$arr=array(
    "Charbagh"=>"0",
    "Indira Nagar"=>"10",
    "BBD"=>"30",
    "Barabanki"=>"60",
    "Faizabad"=>"100",
    "Basti"=>"150",
    "Gorakhpur"=>"210"
);
foreach($arr as $key=>$value)
{
    
    if($key==$a)
    {
        $dis1=$value;
    }
    elseif($key==$b)
    {
        $dis2=$value;
    }
    
}


if($dis1>$dis2)
{
    echo "Total Distance=".($dis1-$dis2);

}
else{
    echo "Total Distance=".($dis2-$dis1);

}

?>