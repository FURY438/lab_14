<?php
echo '<h3>Москалик Василь, СП-41 (3.11.2022)</h3>';
echo '<br>';
echo '<img src="Screenshot_2.png"/>';
echo '<br>';
$myArr=array(array(-1.2,13.8,-5.2),array(6.1,-3.2,12.1),array(2.2,-4.2,7.1));
echo '<h4>Наш масив: </h4>';
print_r($myArr);
?>
<div>
    <?php
    for($row=0;$row<count($myArr);$row++){
    $negativeElArr[]=array_filter($myArr[$row],function ($n){if($n<0) return (true);});
    }

    for($row=0;$row<count($negativeElArr);$row++) {
        $maxNegativeElArr[] = max($negativeElArr[$row]);
}

    $maxNegativeEl=max($maxNegativeElArr);
    echo "<br>Максимальний від'мний елемент: {$maxNegativeEl}";
    ?>
</div>
<div>
    <?php
    for($row=0;$row<count($myArr);$row++) {
        $maxEllArr[] = max($myArr[$row]);
    }
    $maxEl=max($maxEllArr);
    for($row=0;$row<count($myArr);$row++){
        $myArr2[]=array_map(function ($n){ global $maxEl; return ($n*$maxEl);},$myArr[$row]);
    }
    echo "<h4>Нова матриця елементи якої рівні добутку елементів старої матриці на максимальний елемент матриці</h4>";
    print_r($myArr2);
    ?>
</div>
<div>
    <?php
    for($row=0;$row<count($myArr2);$row++){
        $positivElArr[]=array_filter($myArr2[$row],function ($n){if($n>=0) return (true);});
    }

    for($row=0;$row<count($positivElArr);$row++) {
    $sumEllArr[] = array_sum($positivElArr[$row]);
    $multEllArr[]=array_product($positivElArr[$row]);
    }
    $sumArr2=array_sum($sumEllArr);
    $multArr2=array_product($multEllArr);

    echo "<br>Сума додатніх елементів масиву: {$sumArr2}";
    echo "<br>Добуток додатных елементыв масиву: {$multArr2}";
    if($sumArr2>$multArr2) echo "<br>Сума більша від добутку";
    else echo "<br>добуток більший від суми";
    ?>

</div>
<div>
    <?php
   echo "Координати від'ємних елементів масиву";
    for($row=0;$row<count($myArr2);$row++){
        $negativeElArr2[]=array_filter($myArr2[$row],function ($n){if($n<0) return (true);});
        $zeroElArr2[]=array_filter($myArr2[$row],function ($n){if($n==0) return (true);});
    }
    print_r($negativeElArr2);
    echo "<br>";
    if(array_values($zeroElArr2))echo "<br>Нульових елементів немає";
    else print_r($zeroElArr2);
    ?>
</div>
