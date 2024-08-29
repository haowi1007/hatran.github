<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Bài tập</title>
</head>
<body>
<?php //4
$a= 'life is short';
$a1= strpos($a,'is');
echo $a1; //output 5
?> 
<?php //7
$b = 'life is short';
$b1 = strtoupper($b);
echo $b1; // Output LIFE IS SHORT
?> 
<?php //9
$c= 'life is short';
$c = ucwords($c);
echo $c; // Output Life Is Short
?> 
<?php //14
$fruit = ['nho','táo'];
echo implode(",",$fruit); // Output nho,táo
?> 
<?php //16
 $e = strrchr($chuoi_lon, $chuoi_con;

 echo " Chuỗi lớn là: ".$chuoi_lon." và chuỗi con là: ".$chuoi_con, " &rArr; ";
 if ($e == true) {
     echo "Chuỗi lớn kết thúc bằng chuỗi con";
 } else {
     echo "Chuỗi lớn không kết thúc bằng chuỗi con";
?> 
<?php //17
$d = 'life is short';
echo strstr($d, 'i');//output is short
?> 
<?php //18
$f = "Life is mort";
echo "Thay thế ký tự trong chuỗi $f bằng một ký tự khác: ", preg_replace('/m/',"sh",$f);
?> 
</body>
</html>