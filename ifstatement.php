<?php 
    $title = "If Statements";
    include 'include/header.php' 
?>

    <?php 


    echo '<h2>IF STATEMENTS</h2>';
    
    $grade = 60;

    if ($grade >= 50) {
        echo '<h3 style="color: green">You have passed!</h3>';
    } else {
        echo '<h3 style="color: red">You have failed!</h3>';

    }

    
    ?>
<?php require 'include/footer.php'?>