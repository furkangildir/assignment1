<?php   
//Define the number of elements of the array
$n=5;
//Define array
$arr=array();
//Throw elements into array
$i=0;
for($i=$i+1;$i<=$n;$i++)
{
  $arr[$i-1]=rand(1,100);
}
//Define first element of array as min  
$min = $arr[0];    
//Loop the array  
for ($i = 0; $i < sizeof($arr); $i++) {   
    //Compare elements of array with min  
   if($arr[$i] < $min)  
       $min = $arr[$i];  
}
//Print array elements
print_r($arr);
print("<br>"."Smallest element in array: " . $min);
?>