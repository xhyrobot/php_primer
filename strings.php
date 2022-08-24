<?php 
    $title = "Strings Manipulation";
    include 'include/header.php' 
?>
    <H1>PHP String Manipulation</H1>
    <hr>
    <?php 
        $phrase1 = "Hello world!";
        $phrase2 = "Hi World!";
        $name = "fritz xhyro";

        echo $phrase1. " " .$phrase2;
        echo "<hr>";
        echo ucfirst($name); //* Uppercase 1st letter
        echo "<hr>";
        echo ucwords($name); //* Uppercase 1st letter of each word
        echo "<hr>";
        echo strtoupper($name); //*convert lowercase to uppercase
        echo "<hr>";
        echo strtolower("THIS IS ALL UPPERCASE"); //*convert uppercase to lowercase
        echo "<hr>";
        echo strtoupper(str_repeat($name,10)); //*repeat strings
        echo "<hr>";
        echo strpos($name,'x'); //*find position of a character
        echo "<hr>";
        echo strlen($name); //*define length of the string
    ?>
<?php require 'include/footer.php'?>