<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
</head>
<body>
    <div class="jumbotron text-center">
        <h1>𝐂𝐚𝐥𝐜𝐮𝐥𝐚𝐭𝐢𝐧𝐠 𝐭𝐡𝐞 𝐃𝐢𝐟𝐟𝐞𝐫𝐞𝐧𝐜𝐞 𝐁𝐞𝐭𝐰𝐞𝐞𝐧 𝐓𝐰𝐨 𝐃𝐚𝐭𝐞𝐬</h1>
    </div>

    <div class="container p-3 my-3 w-50 bg-primary rounded text-white text-center">
    
    <!-- Calculate the difference between two dates using PHP OOP approach. -->

        <?php

        class Date{
            public $firstDate;
            public $secondDate;
            public $gap;

            function CalculateDiffDates($firstDate, $secondDate){
                $gap = date_create($firstDate)->diff(date_create($secondDate));
                echo "<h4>The First Date is: ".$firstDate. " <br> <br>The Second Date is: ".$secondDate."<br> <br> ";
                echo "The Difference Between the Two Date is: ". $gap->y . " year(s), " . $gap->m." month(s), ".$gap->d." day(s). </h4>";
            }
        }
        $date = new Date;
        $date->CalculateDiffDates("1981-11-03", "2013-09-04");

        ?>

    </div>
</body>
</html>
