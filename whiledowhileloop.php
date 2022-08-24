<?php 
    $title = "While-DO-While Statements";
    include 'include/header.php' 
?>
    <h1>WHILE LOOP PAGE</h1>
    <hr>
    <?php 
    $grade = 0;
        // while ($grade < 10) {
        //     echo '<p>I am less than 10</p>';
        // }
        while ($grade < 10) {
        echo '<p>I am less than 10</p>';
        $grade++;
        }

    ?>
    <h1>DO WHILE LOOP PAGE</h1>
    <hr>
    <?php 
        $grade = 0;
        do {
            echo '<p>I am a do while loop</p>';
            $grade++;
        } while ($grade < 10);
    
    ?>
<?php require 'include/footer.php'?>