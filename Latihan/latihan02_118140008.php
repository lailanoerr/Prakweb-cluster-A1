<!DOCTYPE html>
<html>
<head>
    <title>Praktikum Web Mengurutkan Data Laila Noer Islami H</title>
</head>
<body>
    <?php
    $a = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "mela", "nara", "keira");
    sort($a);
   
    for ($x=0;$x<10;$x++) {
        if($x!=9){
            echo $a[$x] . ", ";
        }else{
            echo $a[$x];
        }
    }
    ?>
</body>
</html>