<?php 
    $title = "Date & Time";
    include 'include/header.php' 
?>

    <H1>PHP Date and Time Manipulation</H1>
    <hr>
    <?php
    $datenow = getdate();


    // echo $datenow['mday'];
    echo "Today's date: ".$datenow['mday'];
    echo "<hr>";
    echo "Today's month: ".$datenow['mon'];
    echo "<hr>";
    echo "Today's year: ".$datenow['year'];
    echo "<hr>";
    echo "Today's complete date is ".$datenow['mon']."/".$datenow['mday']."/".$datenow['year'];
    echo "<hr>";
    echo time();
    ?>
<?php require 'include/footer.php'?>