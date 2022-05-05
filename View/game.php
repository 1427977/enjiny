<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
    <script>
        // evitar repetició de carácters
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }

        // canviar pregunta si no es contesta en x segons
        window.onload=function(){
            window.setTimeout(function() { document.joc.submit(); }, 5000);
        };
    </script>
    <body>
        <section id="pantalla_game">
            <br/>
            <div id="header">
                <div id="points">
                    <?php print_r($_SESSION['points']);print_r("p "); ?>
                </div>
                <div id="questions">
                    <?php print_r($_SESSION['question']);echo("/");print_r($_SESSION['questionNum']); ?>
                </div>
            </div>
            <?php
                $values= array();
                $values[] = $_SESSION["randomNumber1"];
                $values[] = $_SESSION["randomNumber2"];
                $values[] = $_SESSION["randomNumber3"];
                $values[] = $_SESSION["randomNumber4"];
                shuffle($values);
            ?>

            <div id="EleccióJP">
                <p><?php if($_SESSION['gameType'] == "EleccióJP"){ print_r($syllabary[$_SESSION["randomNumber1"]]["Ideogram"]); ?></p>
                <form action="./index.php?accio=game" target="_self" method="post" name="joc">
                    <input id='submit_button1'    type='submit' name = 'submit_button1'    value = '<?php echo($syllabary[$values[0]]["Romaji"]);?>' />
                    <input id='submit_button2'    type='submit' name = 'submit_button2'    value = '<?php echo($syllabary[$values[1]]["Romaji"]);?>' />
                    <input id='submit_button3'    type='submit' name = 'submit_button3'    value = '<?php echo($syllabary[$values[2]]["Romaji"]);?>' />
                    <input id='submit_button4'    type='submit' name = 'submit_button4'    value = '<?php echo($syllabary[$values[3]]["Romaji"]);?>' />
                    <input id='submit_hidden'    type='hidden' name = 'submit_hidden'    value = '<?php echo($syllabary[$_SESSION["randomNumber1"]]["Romaji"]);?>' />
                    <input id='submit_random'    type='hidden' name = 'submit_random'    value = '<?php echo($_SESSION["randomNumber1"]);?>' />
                </form>
                <?php } ?>
            </div>

            <div id="EleccióRM">
                <p><?php if($_SESSION['gameType'] == "EleccióRM"){ print_r($syllabary[$_SESSION["randomNumber1"]]["Romaji"]); ?></p>
                    <form action="./index.php?accio=game" target="_self" method="post">
                        <input id='submit_button1'    type='submit' name = 'submit_button1'    value = '<?php echo($syllabary[$values[0]]["Ideogram"]);?>' />
                        <input id='submit_button2'    type='submit' name = 'submit_button2'    value = '<?php echo($syllabary[$values[1]]["Ideogram"]);?>' />
                        <input id='submit_button3'    type='submit' name = 'submit_button3'    value = '<?php echo($syllabary[$values[2]]["Ideogram"]);?>' />
                        <input id='submit_button4'    type='submit' name = 'submit_button4'    value = '<?php echo($syllabary[$values[3]]["Ideogram"]);?>' />
                        <input id='submit_hidden'    type='hidden' name = 'submit_hidden'    value = '<?php echo($syllabary[$_SESSION["randomNumber1"]]["Ideogram"]);?>' />
                        <input id='submit_random'    type='hidden' name = 'submit_random'    value = '<?php echo($_SESSION["randomNumber1"]);?>' />
                    </form>
                <?php } ?>
            </div>

            <div id="TeclatJP">
                <p><?php if($_SESSION['gameType'] == "TeclatJP"){ print_r($syllabary[$_SESSION["randomNumber1"]]["Ideogram"]); ?></p>
                    <form action="./index.php?accio=game" target="_self" method="post">
                        <input type="text" maxlength="25" name="teclat" required >
                        <input id='submit_hidden'    type='hidden' name = 'submit_hidden'    value = '<?php echo($syllabary[$_SESSION["randomNumber1"]]["Romaji"]);?>' />
                        <input id='submit_random'    type='hidden' name = 'submit_random'    value = '<?php echo($_SESSION["randomNumber1"]);?>' />
                    </form>
                <?php } ?>
            </div>

            <div id="TeclatRM">
                <p><?php if($_SESSION['gameType'] == "TeclatRM"){ print_r($syllabary[$_SESSION["randomNumber1"]]["Romaji"]); ?></p>
                    <form action="./index.php?accio=game" target="_self" method="post">
                        <input type="text" maxlength="25" name="teclat" required >
                        <input id='submit_hidden'    type='hidden' name = 'submit_hidden'    value = '<?php echo($syllabary[$_SESSION["randomNumber1"]]["Ideogram"]);?>' />
                        <input id='submit_random'    type='hidden' name = 'submit_random'    value = '<?php echo($_SESSION["randomNumber1"]);?>' />
                    </form>
                <?php } ?>
            </div>
        </section>
    </body>
</html>