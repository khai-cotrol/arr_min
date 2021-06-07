<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$a =[1,2,3,4,5,6,7,8,0];
function minArr($b)
{
    $c=$b;
    sort($c);
    $min =$c[0];
    for ($i=0;$i<count($b);$i++){
        if ($min == $b[$i]){
            printf($i);
            echo "<br>";
        }
    }
}
echo "minArr trong mang da cho la: <br> ";
minArr($a);
?>
</body>
</html>

