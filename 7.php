<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>A1 - Omar Hany</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="p-5">

        <?php
        /*
             7- trace the code & discuss of each statement of value of x and y
        */
        $x = 3; // $x initial value => 3
        $y = $x++; // $x will change => 4 because of $var++ // $y will be => 3 not 4 because $var++ only affects original variable
        $y += ++$x; // $x will change => 5 because of ++$var // $y will be => 8 because ++$var affects both variables
        if ($y == 7) { // $y equals 8, so will enter next condition
             $x++;
             echo $x ."<br>";
        } else if ($y == 8) { // $y equals 8, so will enter this condition
             $x--; // $x will change => 4 again
             echo $x ."<br>";
        } else if ($y == 9) {
            $x +=2;
            echo $x ."<br>";
        } else { 
            $x= 0;
            echo $x ."<br>";
        }
        ?>
        <h6 class="mb-0 text-primary">X: <?= $x ?></h6>
        <h6 class="mb-0 text-primary">Y: <?= $y ?></h6>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>