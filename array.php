<?php 
    $title = "Arrays and Printouts";
    include 'include/header.php' 
?>

    <h1><?php echo $title ?></h1>
    <hr>
    <?php 
        $numbers = array(1,2,3,4,5,6,7,8,9,10);
        $size = count($numbers);

        echo $numbers[5];
        echo '<p>There are '.$size.' numbers in the array.</p>';

        for ($i=0; $i < $size; $i++) { 
            echo "<p>$numbers[$i]</p>";
        }

        // foreach ($numbers as $key => $value) {
        //     echo '<p>'.$key.'</p>';
        // }    
    ?>

<?php require 'include/footer.php'?>