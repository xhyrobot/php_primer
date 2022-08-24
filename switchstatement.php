<?php 
    $title = "Switch Statements";
    include 'include/header.php' 
?>
    <?php 
        $grade = 'C';

        switch ($grade) {
            case 'A':
                echo '<h3 style="color: green">You have passed!</h3>';
                break;
            
            case 'B':
                echo '<h3 style="color: blue">You did well!</h3>';
                break;

            default:
                echo '<h3 style="color: red">You have failed!</h3>';
                break;
        }
    
    ?>
<?php require 'include/footer.php'?>