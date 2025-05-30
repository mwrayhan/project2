<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Percabangan</title>
</head>
<body>
    <h1>Percabangan IF</h1>
    <?php
    $total_belanja = 150000;
    if($total_belanja > 100000){
    echo "Anda dapat hadiah!";
    }
    ?>

    <hr>
    <h1>Percabangan IF/ELSE</h1>
    <?php
    $umur = 19;
    if ($umur < 18 ){
        echo "Kamu tidak boleh membuka situs ini!";
    } else {
        echo "Selamat datang di website kami!";
    }
    ?>

    <hr>
    <h1>Percabangan If/ElseIf/Else</h1>
    <?php
    $nilai = 88;
    if ($nilai > 90) {
    $grade = "A+";
    } elseif($nilai > 80){
    $grade = "A";
    } elseif($nilai > 70){
    $grade = "B+";
    } elseif($nilai > 60){
    $grade = "B";
    } elseif($nilai > 50){
    $grade = "C+";
    } elseif($nilai > 40){
    $grade = "C";
    } elseif($nilai > 30){
    $grade = "D";
    } elseif($nilai > 20){
    $grade = "E";
    } else {
    $grade = "F";
    }
    echo "Nilai anda: $nilai<br>";
    echo "Grade: $grade";
    ?>

    <hr>
    <h1>Percabangan Switch/Case</h1>
    <?php
    $level = 3;
    switch($level){
    case 1:
        echo "Pelajari HTML";
    break;
    case 2:
        echo "Pelajari CSS";
    break;
    case 3:
        echo "Pelajari Javascript";
    break;
    case 4:
        echo "Pelajari PHP";
    break;
    default:
        echo "Kamu bukan programmer!";
    }
    ?>

    <hr>
    <h1>Percabangan Nested</h1>
    <?php
    $umur = 19;
    $menikah = false;
    if($umur > 18){
    if($menikah){
        echo "Selamat datang pak!";
    } else {
        echo "Selamat datang wahai pemuda!";
    }
    } else {
        echo "Maaf website ini hanya untuk yang sudah berumur 18+";
    }
    ?>
</body>
</html>