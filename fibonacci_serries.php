<!-- QUESTION-2(WAP TO PRINT FIBONACCI SERIES UPTO GIVEN NTH TERM): -->
<?php
$num=7;
$sum=0;
$a=0;
$b=1;
for($i=0;$i<=$num;$i++){
    $a=$b; 
    $b=$sum; 
    $sum=$a+$b;
echo "fibonacci series=",$sum."<br>";
}
?>

<!-- OTHER PROCESS -->
<!-- <?php  
$num = 0;  
$n1 = 0;  
$n2 = 1;  
echo "Fibonacci series for first 12 numbers: "."<br>";   
echo $n1.' '."<br>".$n2.' '."<br>";  
while ($num < 10 )  
{  
    $n3 = $n2 + $n1;  
    echo $n3.' '."<br>";  
    $n1 = $n2;  
    $n2 = $n3;  
    $num = $num+1;
}
?> -->