<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Web Mengurutkan Data Laila Noer Islami H</title>
</head>
<body>
    <?php
    $prima="";
    for($x=1; $x<=50; $x++){
        $i=0;
        for($y=1; $y<=$x; $y++){
            if($x%$y==0){
                $i++;
            }
        }
        if($i<=2){
           $prima .= $x."<br/>";
        }
    }
    echo $prima;
    ?>
</body>
</html>
