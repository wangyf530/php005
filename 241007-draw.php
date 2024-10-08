<h1>直角三角形</h1>
    <?php
    for ($i=1; $i<=5; $i++){
        for ($j=1; $j<=$i; $j++){
            echo"*";
        }
    echo "<br>";
    }
    ?>

    <h1>倒直角三角形</h1>
    <?php
    for ($i=1; $i<=5; $i++){
        for ($j=5; $j>=$i; $j--){
            echo"*";
        }
    echo "<br>";
    }
    ?>

    <h1>正三角形</h1>
    <?php
    for ($i=1; $i<=5; $i++){
        for ($j=1; $j<=(5-$i); $j++){
            echo "&nbsp;";
        }
        for ($k=1; $k<=(2*$i-1); $k++){
            echo "*";
        }
        echo "<br>";
    }
    ?>

    <h1>菱形</h1>
    <?php
    $temp=0;
    for ($i=1; $i<=9; $i++){
        if ($i>5){
            $temp--;
        }else {
            $temp=$i;
        }
        for ($j=1; $j<=(4+$temp);$j++) {
            if($j<=(5-$temp)){
                echo "&nbsp";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }
    ?>

    <h1> 矩形 </h1>
    <?php
    for ($i=1;$i<=7;$i++){
        if ($i==1 || $i%7==0){
            echo "*******";
        } else {
            echo "*&nbsp&nbsp&nbsp&nbsp&nbsp*";
        }
        echo "<br>";
    }

    
    
    ?>