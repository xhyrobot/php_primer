<?php 
    $title = "Functions";
    include 'include/header.php' 
?>

    <h1>Functions</h1>
    <hr>
    <?php 
    $a = 5;
    $b = 10;

    function writeMessage(){
        echo "Hello World!";
    }

    function addition($x,$y){
        $sum = $x + $y;
        echo "The sum of $x and $y is $sum";
    }


    function changeNum($num){
        $num = $num + 10;
    }

    function multiply($x,$y){
        $prod = $x * $y;
        return $prod;
    }

    $num = 500;
    $return_value = multiply(5,5);
    writeMessage();
    echo "<hr>";
    addition(5, 10);
    echo "<hr>";
    changeNum($num);
    echo $num;
    echo "<hr>";
    echo $return_value;
    
    
    
    ?>
<?php require 'include/footer.php'?>