<div id = "profile_header">
    <div class="profile_dropdown">
        <button class="profile_dropdown_button">APRENENTATGE</button>
        <div class="profile_dropdown_content">
            <a href="./index.php?accio=learningHiragana">HIRAGANA</a>
            <a href="./index.php?accio=learningKatakana">KATAKANA</a>
            <a href="./index.php?accio=learningKanji">KANJI</a>
        </div>
    </div>
    <a href="./index.php?accio=profile">PERFIL</a>
    <div class="profile_dropdown">
        <button class="profile_dropdown_button">RANKING</button>
        <div class="profile_dropdown_content">
            <a href="./index.php?accio=profileRankingHiragana">HIRAGANA</a>
            <a href="./index.php?accio=profileRankingKatakana">KATAKANA</a>
            <a href="./index.php?accio=profileRankingKanji">KANJI</a>
        </div>
    </div>
</div>

<br/>

<div class="profile_ranking">

    <div class="profile_ranking_title"> <h1> <?php print_r($_SESSION["viewRanking"]); ?></h1> </div>

    <!-- //////////////////////////////////////////// PART  1 //////////////////////////////////////////// -->
    <div class="profile_ranking_mode_0"> <h1>Mode Clàssic</h1></div>

    <div class="profile_ranking_title_0"> <h1>Elecció JP -> RM</h1> </div>
    <div class="local_ranking_0">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingClas[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingClas[$i][3]);?> punts ; <?php print_r($localRankingClas[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_0">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingClas[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingClas[$i][3]);?> punts ; <?php print_r($globalRankingClas[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_1"> <h1>Elecció RM -> JP</h1> </div>
    <div class="local_ranking_1">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingClas2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingClas2[$i][3]);?> punts ; <?php print_r($localRankingClas2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_1">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingClas2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingClas2[$i][3]);?> punts ; <?php print_r($globalRankingClas2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_2"> <h1>Teclat JP</h1> </div>
    <div class="local_ranking_2">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingClas3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingClas3[$i][3]);?> punts ; <?php print_r($localRankingClas3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_2">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingClas3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingClas3[$i][3]);?> punts ; <?php print_r($globalRankingClas3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_3"> <h1>Teclat RM</h1> </div>
    <div class="local_ranking_3">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingClas3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingClas3[$i][3]);?> punts ; <?php print_r($localRankingClas3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_3">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingClas3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingClas3[$i][3]);?> punts ; <?php print_r($globalRankingClas3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>


    <!-- //////////////////////////////////////////// PART  2 //////////////////////////////////////////// -->
    <div class="profile_ranking_mode_1"> <h1>Mode Per Temps</h1></div>

    <div class="profile_ranking_title_4"> <h1>Elecció JP -> RM</h1> </div>
    <div class="local_ranking_4">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingTemps[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingTemps[$i][3]);?> punts ; <?php print_r($localRankingTemps[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_4">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingTemps[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingTemps[$i][3]);?> punts ; <?php print_r($globalRankingTemps[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_5"> <h1>Elecció RM -> JP</h1> </div>
    <div class="local_ranking_5">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingTemps2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingTemps2[$i][3]);?> punts ; <?php print_r($localRankingTemps2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_5">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingTemps2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingTemps2[$i][3]);?> punts ; <?php print_r($globalRankingTemps2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_6"> <h1>Teclat JP</h1> </div>
    <div class="local_ranking_6">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingTemps3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingTemps3[$i][3]);?> punts ; <?php print_r($localRankingTemps3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_6">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingTemps3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingTemps3[$i][3]);?> punts ; <?php print_r($globalRankingTemps3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_7"> <h1>Teclat RM</h1> </div>
    <div class="local_ranking_7">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingTemps4[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingTemps4[$i][3]);?> punts ; <?php print_r($localRankingTemps4[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_7">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingTemps4[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingTemps4[$i][3]);?> punts ; <?php print_r($globalRankingTemps4[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>


    <!-- //////////////////////////////////////////// PART  3 //////////////////////////////////////////// -->
    <div class="profile_ranking_mode_2"> <h1>Mode Per Punts</h1></div>

    <div class="profile_ranking_title_8"> <h1>Elecció JP -> RM</h1> </div>
    <div class="local_ranking_8">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts[$i][3]);?> punts ; <?php print_r($localRankingPunts[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_8">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunt[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunt[$i][3]);?> punts ; <?php print_r($globalRankingPunt[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_9"> <h1>Elecció RM -> JP</h1> </div>
    <div class="local_ranking_9">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts2[$i][3]);?> punts ; <?php print_r($localRankingPunts2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_9">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunts2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunts2[$i][3]);?> punts ; <?php print_r($globalRankingPunts2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_10"> <h1>Teclat JP</h1> </div>
    <div class="local_ranking_10">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts3[$i][3]);?> punts ; <?php print_r($localRankingPunts3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_10">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunts3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunts3[$i][3]);?> punts ; <?php print_r($globalRankingPunts3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_11"> <h1>Teclat RM</h1> </div>
    <div class="local_ranking_11">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts4[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts4[$i][3]);?> punts ; <?php print_r($localRankingPunts4[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_11">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunts4[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunts4[$i][3]);?> punts ; <?php print_r($globalRankingPunts4[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <!-- //////////////////////////////////////////// PART  3 //////////////////////////////////////////// -->
    <div class="profile_ranking_mode_2"> <h1>Mode Per Punts</h1></div>

    <div class="profile_ranking_title_8"> <h1>Elecció JP -> RM</h1> </div>
    <div class="local_ranking_8">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts[$i][3]);?> punts ; <?php print_r($localRankingPunts[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_8">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunt[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunt[$i][3]);?> punts ; <?php print_r($globalRankingPunt[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_9"> <h1>Elecció RM -> JP</h1> </div>
    <div class="local_ranking_9">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts2[$i][3]);?> punts ; <?php print_r($localRankingPunts2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_9">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunts2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunts2[$i][3]);?> punts ; <?php print_r($globalRankingPunts2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_10"> <h1>Teclat JP</h1> </div>
    <div class="local_ranking_10">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts3[$i][3]);?> punts ; <?php print_r($localRankingPunts3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_10">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunts3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunts3[$i][3]);?> punts ; <?php print_r($globalRankingPunts3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_11"> <h1>Teclat RM</h1> </div>
    <div class="local_ranking_11">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts4[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts4[$i][3]);?> punts ; <?php print_r($localRankingPunts4[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_11">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunts4[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunts4[$i][3]);?> punts ; <?php print_r($globalRankingPunts4[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <!-- //////////////////////////////////////////// PART  3 //////////////////////////////////////////// -->
    <div class="profile_ranking_mode_2"> <h1>Mode Per Punts</h1></div>

    <div class="profile_ranking_title_8"> <h1>Elecció JP -> RM</h1> </div>
    <div class="local_ranking_8">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts[$i][3]);?> punts ; <?php print_r($localRankingPunts[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_8">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunt[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunt[$i][3]);?> punts ; <?php print_r($globalRankingPunt[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_9"> <h1>Elecció RM -> JP</h1> </div>
    <div class="local_ranking_9">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts2[$i][3]);?> punts ; <?php print_r($localRankingPunts2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_9">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunts2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunts2[$i][3]);?> punts ; <?php print_r($globalRankingPunts2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_10"> <h1>Teclat JP</h1> </div>
    <div class="local_ranking_10">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts3[$i][3]);?> punts ; <?php print_r($localRankingPunts3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_10">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunts3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunts3[$i][3]);?> punts ; <?php print_r($globalRankingPunts3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_11"> <h1>Teclat RM</h1> </div>
    <div class="local_ranking_11">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPunts4[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPunts4[$i][3]);?> punts ; <?php print_r($localRankingPunts4[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_11">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPunts4[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPunts4[$i][3]);?> punts ; <?php print_r($globalRankingPunts4[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <!-- //////////////////////////////////////////// PART  4 //////////////////////////////////////////// -->
    <div class="profile_ranking_mode_3"> <h1>Mode Personalitzat</h1></div>

    <div class="profile_ranking_title_12"> <h1>Elecció JP -> RM</h1> </div>
    <div class="local_ranking_12">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPerso[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPerso[$i][3]);?> punts ; <?php print_r($localRankingPerso[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_12">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPerso[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPerso[$i][3]);?> punts ; <?php print_r($globalRankingPerso[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_13"> <h1>Elecció RM -> JP</h1> </div>
    <div class="local_ranking_13">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPerso2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPerso2[$i][3]);?> punts ; <?php print_r($localRankingPerso2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_13">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPerso2[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPerso2[$i][3]);?> punts ; <?php print_r($globalRankingPerso2[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_14"> <h1>Teclat JP</h1> </div>
    <div class="local_ranking_14">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPerso3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPerso3[$i][3]);?> punts ; <?php print_r($localRankingPerso3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_14">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPerso3[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPerso3[$i][3]);?> punts ; <?php print_r($globalRankingPerso3[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>

    <br/>

    <div class="profile_ranking_title_15"> <h1>Teclat RM</h1> </div>
    <div class="local_ranking_15">
        <h3><u>Rànquing Personal</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($localRankingPerso4[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($localRankingPerso4[$i][3]);?> punts ; <?php print_r($localRankingPerso4[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>
    <div class="global_ranking_15">
        <h3><u>Rànquing Global</u></h3>
        <?php for($i=0;$i<10;$i++){ ?>
            <?php if(!empty($globalRankingPerso4[$i]) ){ ?>
                <div id="pos_<?php print_r($i); ?>"> <b><p><?php print_r($globalRankingPerso4[$i][3]);?> punts ; <?php print_r($globalRankingPerso4[$i][4]);?> s</p></b></div>
            <?php } else {?>
                <div id="pos_10"><b><p> - - - punts</p></b></div>
            <?php }?>
        <?php } ?>
    </div>


</div>