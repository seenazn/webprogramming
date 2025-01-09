<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    echo "Factorial of $num is: $factorial";
}