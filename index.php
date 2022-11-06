<?php
echo '<h3>Москалик Василь, СП-41 (3.11.2022)</h3>';
echo '<br>';
echo '<img src="Screenshot_2.png"/>';
echo '<br>';
$myArr=array(array(-1.2,13.8,-5.2),array(6.1,-3.2,12.1),array(2.2,-4.2,7.1));
echo '<h4>Наш масив: </h4>';

for($row=0;$row<=count($myArr)-1;$row++){
    for($col=0;$col<=count($myArr[$row])-1;$col++){
        echo "{$myArr[$row][$col]}; ";
    }
    echo "<br>";
}
?>
<div>
    <?php
    $oneArr=array();
    $negativeElArr=array();
    for($row=0;$row<=count($myArr)-1;$row++) {
        for ($col = 0; $col <= count($myArr[$row]) - 1; $col++) {
            if($myArr[$row][$col]<0)
            $negativeElArr[] = $myArr[$row][$col];
            $oneArr[] = $myArr[$row][$col];
        }
    }

    if($maxNegativeEl=max($negativeElArr)) echo "<br>Максимальний від'мний елемент: {$maxNegativeEl}";
    else echo "<p>В даному масиві немає від'ємних елементів</p>";
    ?>
</div>
<div>
    <?php
    $maxEl=max($oneArr);
    $newArr=array();
    $newArr=$myArr;
    echo "<h4>Нова матриця елементи якої рівні добутку елементів старої матриці на максимальний елемент матриці</h4>";
    for($row=0;$row<=count($newArr)-1;$row++){
        for($col=0;$col<=count($newArr[$row])-1;$col++){
            $newArr[$row][$col]*=$maxEl;
            echo "{$newArr[$row][$col]}; ";
        }
        echo "<br>";
    }
    ?>
</div>
<div>
    <?php
    $oneArr2=array();
    for($row=0;$row<=count($newArr)-1;$row++) {
        for ($col = 0; $col <= count($newArr[$row]) - 1; $col++) {
            $oneArr2[] = $newArr[$row][$col];
        }
    }
    $sumArr2=0;
    $multArr2=1;
    for($row=0;$row<=count($newArr)-1;$row++) {
        for ($col = 0; $col <= count($newArr[$row]) - 1; $col++) {
            if($newArr[$row][$col]>=0){
                $sumArr2+=$newArr[$row][$col];
                $multArr2=$newArr[$row][$col];
            }
        }
    }
    echo "<br>Сума додатніх елементів масиву: {$sumArr2}";
    echo "<br>Добуток додатных елементыв масиву: {$multArr2}";
    ?>
</div>
<div>
    <?php
    $positionNegEl=array();
    echo "<p>Координати від'ємних елементів матриці</p>";
    for($row=0;$row<=count($newArr)-1;$row++) {
        for ($col = 0; $col <= count($newArr[$row]) - 1; $col++) {
            if($newArr[$row][$col]<0 ){
            $positionNegEl[]=array($row,$col);
            }
        }
    }
    for($row=0;$row<=count($positionNegEl)-1;$row++){
        for($col=0;$col<=count($positionNegEl[$row])-1;$col++){
            echo "[{$positionNegEl[$row][$col]}]; ";
        }
        echo "<br>";
    }
    ?>
</div>
<div>
    <?php
    $positionZeroEl=array();
    echo "<p>Координати нульових елементів матриці</p>";
    for($row=0;$row<=count($newArr)-1;$row++) {
        for ($col = 0; $col <= count($newArr[$row]) - 1; $col++) {
            if($newArr[$row][$col]= 0 ){
                $positionZeroEl[]=array($row,$col);
            }
        }
    }
   if(count($positionZeroEl)>0) {
       for ($row = 0; $row <= count($positionNegEl) - 1; $row++) {
           for ($col = 0; $col <= count($positionNegEl[$row]) - 1; $col++) {
               echo "[{$positionNegEl[$row][$col]}]; ";
           }
           echo "<br>";
       }
   }
   else
       echo "<p>Нулових елементів в матриці немає!!!!</p>";
    ?>
</div>