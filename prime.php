<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    if ($num > 1) {
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                echo "$num is not a prime number.";
                break;
            }
        }
        if ($i > sqrt($num)) {
            echo "$num is a prime number.";
        }
    } else {
        echo "$num is not a prime number.";
    }
}
