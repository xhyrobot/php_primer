<?php 
    $title = "Index";
    include 'include/header.php' 
?>

    <!-- BASIC HTML -->
    <h1>Hello World! - PHP Primer</h1>
    <hr>
    <?php 
        echo "This is a php script!";
        echo "<hr>";
        echo "Second Line";
        echo "<hr>";

    ?>

    <?php 
        $name = "Fritz Xhyro Getigan";
        $age = 21;
        echo $name;
        echo "<hr>";
        echo "<h1>My name is " .$name. "</h1>";
        echo "<h1>My age is  " .$age. "</h1>";

    ?>

<button type="button" class="btn btn-dark">CLICK ME</button>

<?php require 'include/footer.php'?>