
<!DOCTYPE html>
<html>

<body style="text-align:center;">

        <h1 style="color:blue;">
                PLC Trainer Demo
        </h1>

        <h4>
                for demonstration purposes only.
        </h4>

        <?php

                if(isset($_POST['X1'])) {
                        system("gpio mode 1 out");
                        system("gpio write 1 1");
                        sleep(1.25);
                        system("gpio write 1 0");
                }
                if(isset($_POST['X2'])) {
                        system("gpio mode 4 out");
                        system("gpio write 4 1");
                        sleep(1.25);
                        system("gpio write 4 0");
                }
                if(isset($_POST['X3'])) {
                        system("gpio mode 5 out");
                        system("gpio write 5 1");
                        sleep(1.25);
                        system("gpio write 5 0");
                }
                if(isset($_POST['X4'])) {
                        system("gpio mode 6 out");
                        system("gpio write 6 1");
                        sleep(1.25);
                        system("gpio write 6 0");
                }
                if(isset($_POST['X5'])) {
                        system("gpio mode 10 out");
                        system("gpio write 10 1");
                        sleep(1.25);
                        system("gpio write 10 0");
                }
                if(isset($_POST['X6'])) {
                        system("gpio mode 11 out");
                        system("gpio write 11 1");
                        sleep(1.25);
                        system("gpio write 11 0");
                }
        ?>
        
        <form method="post">
            <h2>Control</h2>
            <fieldset>
                <input type="submit" name="X1"
                                value="X1"/>
            </fieldset>
            <fieldset>
                <input type="submit" name="X2"
                                value="X2"/>
            </fieldset>
            <fieldset>
                <input type="submit" name="X3"
                                value="X3"/>
            </fieldset>
            <fieldset>
                <input type="submit" name="X4"
                                value="X4"/>
            </fieldset>
            <fieldset>
                <input type="submit" name="X5"
                                value="X5"/>
            </fieldset>
            <fieldset>
                <input type="submit" name="X6"
                                value="X6"/>
            </fieldset>
        </form>

</head>
</html>
</html>



