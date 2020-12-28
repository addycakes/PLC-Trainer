
<!DOCTYPE html>
<html>

<body style="text-align:center;">

        <h1 style="color:blue;">
                PLC Trainer
        </h1>

        <h4>
                Input simulator for fog light cover at press 34.
                Ram chrome, drive screws, then pack part.
        </h4>

        <?php

                if(isset($_POST['power'])) {
                        system("gpio mode 15 out");
                        system("gpio write 15 1");
                        sleep(.25)
                        system("gpio write 15 0");
                }
                if(isset($_POST['start'])) {
                        system("gpio mode 16 out");
                        system("gpio write 16 1");
                        sleep(.25)
                        system("gpio write 16 0");
                }
                if(isset($_POST['stop'])) {
                        system("gpio mode 1 out");
                        system("gpio write 1 1");
                        sleep(.25)
                        system("gpio write 1 0");
                }
                if(isset($_POST['ram'])) {
                        system("gpio mode 4 out");
                        system("gpio write 4 1");
                        sleep(.25)
                        system("gpio write 4 0");
                }
                if(isset($_POST['nest'])) {
                        system("gpio mode 5 out");
                        system("gpio write 5 1");
                        sleep(.25)
                        system("gpio write 5 0");
                }
                if(isset($_POST['drive'])) {
                        system("gpio mode 6 out");
                        system("gpio write 6 1");
                        sleep(.25)
                        system("gpio write 6 0");
                }
                if(isset($_POST['rCurtain'])) {
                        system("gpio mode 10 out");
                        system("gpio write 10 1");
                        sleep(.25)
                        system("gpio write 10 0");
                }
                if(isset($_POST['pCurtain'])) {
                        system("gpio mode 11 out");
                        system("gpio write 11 1");
                        sleep(.25)
                        system("gpio write 11 0");
                }
            
                echo fread($myfile,filesize("ascii.txt"));
                fclose($myfile);
        ?>

        <div>
            <?php
                //open up the contact file
                $fp = fopen("ascii.txt", "r") or die("error");
                //print a line at a time
                while (!feof($fp)){
                    $line = fgets($fp);
                    print "$line <br />";
                }
                //close the file
                fclose($fp);
            ?>
        </div>

        <h1 style="color:orange;">
                PLC OUTPUT
        </h1>

        <form method="post">
            <h2>Control</h2>
            <fieldset>
                <input type="submit" name="power"
                                value="Power"/>

                <input type="submit" name="start"
                                value="Start"/>

                <input type="submit" name="stop"
                                value="Stop"/>
            </fieldset>
            <fieldset>
                <input type="submit" name="ram"
                                value="Ram Cycle"/>

                <input type="submit" name="nest"
                                value="Nest Part"/>

                <input type="submit" name="drive"
                                value="Drive Screw"/>
            </fieldset>
            <fieldset>


                <input type="submit" name="rCurtain"
                                value="Ram Curtain"/>

                <input type="submit" name="pCurtain"
                                value="Pack Curtain"/>
            </fieldset>
        </form>
</head>
</html>
</html>



