<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
    <body>
        <section id="pantalla_ranking">
                <div class="pantalla_ranking_header">
                    <h1>La teva puntuació és de <u><?php print_r($_SESSION['points']); ?> punts</u></h1>
                </div>
                <!-- /////////////////////////////////////////////////  LOCAL ///////////////////////////////////////////////// -->
                <div class="local_ranking">
                    <h3><u>Rànquing Personal</u></h3>
                    <?php for($i=0;$i<10;$i++){ ?>
                        <div id="pos_<?php print_r($i); ?>">
                            <?php if($localRankingSize > $i){ ?>
                                <b><p><?php print_r($localRanking[$i][3]);?> punts ; <?php print_r($localRanking[$i][4]);?> segons</p></b>
                            <?php }else{?>
                            <b><p> - - - punts</p></b>
                            <?php }?>
                        </div>
                    <?php } ?>
                    <?php if($localRankingSize == 10 && $localRanking[9][3] > $_SESSION['points']){ ?>
                        <div id="pos_10">
                            <b><p><?php print_r($_SESSION['points']);?> punts ; <?php print_r($_SESSION['gameTime']);?> segons</p></b>
                        </div>
                    <?php } ?>
                </div>
                <!-- /////////////////////////////////////////////////  GLOBAL ///////////////////////////////////////////////// -->
                <div class="global_ranking">
                    <h3><u>Rànquing Global</u></h3>
                    <?php for($i=0;$i<10;$i++){ ?>
                        <div id="pos_<?php print_r($i); ?>">
                            <?php if($GlobalRankingSize > $i){ ?>
                                <b><p><u><?php print_r($userName[$i]);?></u>: <?php print_r($globalRanking[$i][3]);?> punts ; <?php print_r($globalRanking[$i][4]);?> segons</p></b>
                            <?php }else{?>
                                <b><p> - - - punts</p></b>
                            <?php }?>
                        </div>
                    <?php } ?>
                </div>
                <div class = "pantalla_ranking_footer">
                    <br/>
                    <a href="./index.php?accio=cover">CONTINUAR</a>
                </div>
        </section>
    </body>
</html>