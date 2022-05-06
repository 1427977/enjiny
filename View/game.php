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
        <section id = "pantalla_game">
            <br/>
            <div id="header">
                <div id = "points">
                    <?php print_r($_SESSION['points']);print_r("p "); ?>
                </div>
                <div id = "questions">
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

            <div id = "EleccióJP">
                <div id = "title_game"><?php if($_SESSION['gameType'] == "EleccióJP"){ print_r($syllabary[$_SESSION["randomNumber1"]]["Ideogram"]); ?></div>
                <form action="./index.php?accio=game" target="_self" method="post" name="joc">
                    <div id = "form_game">
                        <?php for($i=1; $i<$_SESSION['AnswerNum']+1; $i++){ ?>
                            <div class = "submit_button<?php print_r($i); ?>"><input id='submit_button<?php print_r($i); ?>' type='submit' name = 'submit_button<?php print_r($i); ?>' value = '<?php echo($syllabary[$values[$i-1]]["Romaji"]);?>' /></div>
                        <?php } ?>
                        <input id='submit_hidden'    type='hidden' name = 'submit_hidden'    value = '<?php echo($syllabary[$_SESSION["randomNumber1"]]["Romaji"]);?>' />
                        <input id='submit_random'    type='hidden' name = 'submit_random'    value = '<?php echo($_SESSION["randomNumber1"]);?>' />
                    </div>
                </form>
                <?php } ?>
            </div>

            <div id = "EleccióJP">
                <div id = "title_game"><?php if($_SESSION['gameType'] == "EleccióJP"){ print_r($syllabary[$_SESSION["randomNumber1"]]["Romaji"]); ?></div>
                <form action="./index.php?accio=game" target="_self" method="post" name="joc">
                    <div id = "form_game">
                        <?php for($i=1; $i<$_SESSION['AnswerNum']+1; $i++){ ?>
                            <div class = "submit_button<?php print_r($i); ?>"><input id='submit_button<?php print_r($i); ?>' type='submit' name = 'submit_button<?php print_r($i); ?>' value = '<?php echo($syllabary[$values[$i-1]]["Ideogram"]);?>' /></div>
                        <?php } ?>
                        <input id='submit_hidden'    type='hidden' name = 'submit_hidden'    value = '<?php echo($syllabary[$_SESSION["randomNumber1"]]["Ideogram"]);?>' />
                        <input id='submit_random'    type='hidden' name = 'submit_random'    value = '<?php echo($_SESSION["randomNumber1"]);?>' />
                    </div>
                </form>
                <?php } ?>
            </div>

            <div id = "TeclatJP">
                <div id = "title_game"><?php if($_SESSION['gameType'] == "TeclatJP"){ print_r($syllabary[$_SESSION["randomNumber1"]]["Ideogram"]); ?></div>
                    <form action="./index.php?accio=game" target="_self" method="post">
                        <input type="text" maxlength="5" name="teclat" required >
                        <input id='submit_hidden'    type='hidden' name = 'submit_hidden'    value = '<?php echo($syllabary[$_SESSION["randomNumber1"]]["Romaji"]);?>' />
                        <input id='submit_random'    type='hidden' name = 'submit_random'    value = '<?php echo($_SESSION["randomNumber1"]);?>' />
                    </form>
                <?php } ?>
            </div>

            <div id = "TeclatRM">
                <div id = "title_game"><?php if($_SESSION['gameType'] == "TeclatRM"){ print_r($syllabary[$_SESSION["randomNumber1"]]["Romaji"]); ?></div>
                    <form action="./index.php?accio=game" target="_self" method="post">
                        <input type="text" maxlength="5" name="teclat" required >
                        <input id='submit_hidden'    type='hidden' name = 'submit_hidden'    value = '<?php echo($syllabary[$_SESSION["randomNumber1"]]["Ideogram"]);?>' />
                        <input id='submit_random'    type='hidden' name = 'submit_random'    value = '<?php echo($_SESSION["randomNumber1"]);?>' />
                    </form>
                <?php } ?>
            </div>
        </section>
    </body>
</html>