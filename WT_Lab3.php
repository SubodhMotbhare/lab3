<html>
    <head>
    </head>
    <body>
        <?php
            if(isset($_POST['units']))
            {
                $units = $_POST['units'];
                $total = 0;
                if($units <= 50)
                {
                    $total = $units * 3.50;
                }
                else
                if($units <= 150)
                {
                    $total = 50 * 3.50 + ($units - 50) * 4.00;
                }
                else
                if($units <= 250)
                {
                    $total = 50 * 3.50 + 100 * 4.00 + ($units - 150) * 5.20;
                }
                else
                {
                    $total = 50 * 3.50 + 100 * 4.00 + 100 * 5.20 + ($units - 250) * 6.50;
                }
            }

            echo "The total bill: $total"
        ?>
    </body>
</html>


