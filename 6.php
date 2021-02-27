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
             6- you have array of developers data:
        */
        $developers = [
            [
              'name' => 'ahmed hamdy',
               'job' => 'front-end',
              'experience' => 3
             ],
             [
                 'name' => 'mohammed shaker',
                 'job' => 'back-end',
                 'experience' => 2
             ],
             [
                 'name' => 'ali hasan',
                 'job' => 'full-stack',
                 'experience' => 4
             ],
        ];
        ?>
        <div class="row">
            <?php foreach ($developers as $dev) { ?>
            <div class="col-lg-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize"><?= $dev['name'] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted text-capitalize"><?= $dev['job'] ?></h6>
                        <p class="card-text"><?= $dev['experience'] ?> years of experience</p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>