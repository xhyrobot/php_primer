<?php 
    $title = "For Loop";
    include 'include/header.php' 
?>

    <h1>FOR LOOP PAGE</h1>
    <hr>
    <?php 
        for ($count = 0; $count < 10; $count++) { 
            echo '<p>Hello World!</p>';
        }
        
        for ($count = 0; $count < 10; $count++) { 
            echo "<p>The count is : $count </p>";
        }
    ?>
<?php require 'include/footer.php'?>