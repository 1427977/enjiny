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

<br/> <br/>

<div id = "profile_learning">

    <?php if($_SESSION["learning"] == "Hiragana" ){   ?>

            <?php $j = 0; ?>
            <p id="profile_learning_header">Hiragana</p>
            <p id="profile_learning_percent">El teu grau d'aprenentatge de Hiragana és de <?php print_r(intval($_SESSION["average"])); ?>%
            <div class="barra">
                <span style="width: <?php print_r($_SESSION["average"]); ?>%"></span>
            </div>
            <br/>
            <div id="switch_check_all">
                <label > <b>Desmarcar tot el hiragana:</b>
                        <input type="checkbox" onClick="typeSelectedUncheck('All','Hiragana',<?php print_r($_SESSION["User"]); ?>, 1)" >
                </label>
            </div>
            <div id="switch_uncheck_all">
                <label ><b>Marcar tot el hiragana:</b>
                        <input type="checkbox" onClick="typeSelectedCheck('All','Hiragana',<?php print_r($_SESSION["User"]); ?>, 0)" >
                </label>
            </div>

            <?php foreach($syllabary as $ideogram){ ?>
            <!-- ///////////////////// GOJUON ///////////////////// -->
                <?php if($ideogram["Subtype"] == "Gojūon"){ ?>
                    <?php if($j == 0){ ?>
                        <p id="profile_learning_title">Gojuon</p>
                        <div id="switch_check_all">
                            <label > <p><b>Desmarcar tots:</b>
                                <input type="checkbox" onClick="typeSelectedUncheck('Gojuon','Hiragana',<?php print_r($_SESSION["User"]); ?>, 1)" ></p>
                            </label>
                        </div>
                        <div id="switch_uncheck_all">
                            <label ><p><b>Marcar tots:</b>
                                <input type="checkbox" onClick="typeSelectedCheck('Gojuon','Hiragana',<?php print_r($_SESSION["User"]); ?>, 0)" ></p>
                            </label>
                        </div>
                        <table class="table_learning">
                            <tr>
                                <th>Lletra</th>
                                <th>A</th>
                                <th>I</th>
                                <th>U</th>
                                <th>E</th>
                                <th>O</th>
                            </tr>
                    <?php $i = 0; $j++; }?>
                    <?php if($i == 0) { ?> <tr> <th><?php $firstCharacter = substr($ideogram["Romaji"], 0, 1); print_r($firstCharacter);?></th><?php } ?>
                        <?php $lastCharacter = substr($ideogram["Romaji"], -1, strlen($ideogram["Romaji"])); ?>
                        <?php if(($i == 0 && $lastCharacter == "A") || ($i == 1 && $lastCharacter == "I") || ($i == 2 && $lastCharacter == "U") || ($i == 3 && $lastCharacter == "E") || ($i == 4 && $lastCharacter == "O")){ ?>
                                <td id="learning_<?php print_r(intval($userSyllabary[$ideogram["ID"]-1]["Level"])); ?>"><span><?php print_r($ideogram["Ideogram"]);?></span><br/><?php print_r($ideogram["Romaji"]); ?> <br/>
                                    <label class="switch">
                                        <input type="checkbox" onClick="updateSelected(<?php print_r($ideogram["ID"]); ?>, <?php print_r($_SESSION["User"]); ?>)" <?php if($userSyllabary[$ideogram["ID"]-1]["Selected"] == 1){ $userSyllabary[$ideogram["ID"]-1]["Selected"] = 0;?> checked <?php } ?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                        <?php } else { ?>
                            <?php if ($ideogram["Romaji"] != "WO") { ?>
                                <?php if ($ideogram["Romaji"] != "N") { ?>
                                    <td></td> <td id="learning_<?php $i++; print_r(intval($userSyllabary[$ideogram["ID"]-1]["Level"])); ?>"><span><?php print_r($ideogram["Ideogram"]);?></span><br/><?php print_r($ideogram["Romaji"]); ?> <br/>
                                        <label class="switch">
                                            <input type="checkbox" onClick="updateSelected(<?php print_r($ideogram["ID"]); ?>, <?php print_r($_SESSION["User"]); ?>)" <?php if($userSyllabary[$ideogram["ID"]-1]["Selected"] == 1){ ?> checked <?php } ?>>
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                <?php } else { ?>
                                    <th>N</th>
                                    <td id="learning_<?php $i++; print_r(intval($userSyllabary[$ideogram["ID"]-1]["Level"])); ?>"><span><?php print_r($ideogram["Ideogram"]);?></span><br/><?php print_r($ideogram["Romaji"]); ?> <br/>
                                        <label class="switch">
                                            <input type="checkbox" onClick="updateSelected(<?php print_r($ideogram["ID"]); ?>, <?php print_r($_SESSION["User"]); ?>)" <?php if($userSyllabary[$ideogram["ID"]-1]["Selected"] == 1){ ?> checked <?php } ?>>
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                <?php } ?>
                            <?php } else { ?>
                                <td></td> <td></td> <td></td>
                                <td id="learning_<?php $i++; print_r(intval($userSyllabary[$ideogram["ID"]-1]["Level"])); ?>"><span><?php print_r($ideogram["Ideogram"]);?></span><br/><?php print_r($ideogram["Romaji"]); ?> <br/>
                                        <label class="switch">
                                            <input type="checkbox" onClick="updateSelected(<?php print_r($ideogram["ID"]); ?>, <?php print_r($_SESSION["User"]); ?>)" <?php if($userSyllabary[$ideogram["ID"]-1]["Selected"] == 1){ ?> checked <?php } ?>>
                                            <span class="slider round"></span>
                                        </label>
                                </td></tr>
                            <?php } ?>
                        <?php } ?>
                        <?php if($i == 4) { ?> </tr> <?php } ?>
                        <?php if($i != 4){$i++;}else{$i=0;} ?>
                    <?php } ?>

                    <!-- ///////////////////// GOJUON HANDAKUTEN ///////////////////// -->
                    <?php if($ideogram["Subtype"] == "Gojūon (han)dakuten"){ ?>
                        <?php if($j == 1){ ?>
                            </table>
                            <p id="profile_learning_title">Gojūon (han)dakuten</p>
                            <div id="switch_check_all">
                                <label > <p><b>Desmarcar tots:</b>
                                        <input type="checkbox" onClick="typeSelectedUncheck('GojuonHan','Hiragana',<?php print_r($_SESSION["User"]); ?>, 1)" ></p>
                                </label>
                            </div>
                            <div id="switch_uncheck_all">
                                <label ><p><b>Marcar tots:</b>
                                        <input type="checkbox" onClick="typeSelectedCheck('GojuonHan','Hiragana',<?php print_r($_SESSION["User"]); ?>, 0)" ></p>
                                </label>
                            </div>
                            <table class="table_learning">
                                <tr>
                                    <th>Lletra</th>
                                    <th>A</th>
                                    <th>I</th>
                                    <th>U</th>
                                    <th>E</th>
                                    <th>O</th>
                                </tr>
                        <?php $i = 0; $j++; }?>
                        <?php if($i == 0) { ?> <tr> <th><?php $firstCharacter = substr($ideogram["Romaji"], 0, 1); print_r($firstCharacter);?></th><?php } ?>
                        <?php $lastCharacter = substr($ideogram["Romaji"], -1, strlen($ideogram["Romaji"])); ?>
                        <?php if(($i == 0 && $lastCharacter == "A") || ($i == 1 && $lastCharacter == "I") || ($i == 2 && $lastCharacter == "U") || ($i == 3 && $lastCharacter == "E") || ($i == 4 && $lastCharacter == "O")){ ?>
                            <td id="learning_<?php print_r(intval($userSyllabary[$ideogram["ID"]-1]["Level"])); ?>"><span><?php print_r($ideogram["Ideogram"]);?></span><br/><?php print_r($ideogram["Romaji"]); ?> <br/>
                                <label class="switch">
                                    <input type="checkbox" onClick="updateSelected(<?php print_r($ideogram["ID"]); ?>, <?php print_r($_SESSION["User"]); ?>)" <?php if($userSyllabary[$ideogram["ID"]-1]["Selected"] == 1){ $userSyllabary[$ideogram["ID"]-1]["Selected"] = 0;?> checked <?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        <?php } ?>
                        <?php if($i == 4) { ?> </tr> <?php } ?>
                        <?php if($i != 4){$i++;}else{$i=0;} ?>
                    <?php } ?>

                     <!-- ///////////////////// YOON ///////////////////// -->
                    <?php if($ideogram["Subtype"] == "Yoon"){ ?>
                        <?php if($j == 2){ ?>
                            </table>
                            <p id="profile_learning_title">Yoon</p>
                            <div id="switch_check_all">
                                <label > <p><b>Desmarcar tots:</b>
                                        <input type="checkbox" onClick="typeSelectedUncheck('Yoon','Hiragana',<?php print_r($_SESSION["User"]); ?>, 1)" ></p>
                                </label>
                            </div>
                            <div id="switch_uncheck_all">
                                <label ><p><b>Marcar tots:</b>
                                        <input type="checkbox" onClick="typeSelectedCheck('Yoon','Hiragana',<?php print_r($_SESSION["User"]); ?>, 0)" ></p>
                                </label>
                            </div>
                            <table class="table_learning">
                            <tr>
                                <th>Lletra</th>
                                <th>A</th>
                                <th>U</th>
                                <th>O</th>
                            </tr>
                            <?php $i = 0; $j++; }?>
                            <?php if($i == 0) { ?> <tr> <th><?php $firstCharacter = substr($ideogram["Romaji"], 0, 1); print_r($firstCharacter);?></th><?php } ?>
                            <?php $lastCharacter = substr($ideogram["Romaji"], -1, strlen($ideogram["Romaji"])); ?>
                            <?php if(($i == 0 && $lastCharacter == "A") || ($i == 1 && $lastCharacter == "U") || ($i == 2 && $lastCharacter == "O")){ ?>
                                <td id="learning_<?php print_r(intval($userSyllabary[$ideogram["ID"]-1]["Level"])); ?>"><span><?php print_r($ideogram["Ideogram"]);?></span><br/><?php print_r($ideogram["Romaji"]); ?> <br/>
                                    <label class="switch">
                                        <input type="checkbox" onClick="updateSelected(<?php print_r($ideogram["ID"]); ?>, <?php print_r($_SESSION["User"]); ?>)" <?php if($userSyllabary[$ideogram["ID"]-1]["Selected"] == 1){ $userSyllabary[$ideogram["ID"]-1]["Selected"] = 0;?> checked <?php } ?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            <?php } ?>
                            <?php if($i == 2) { ?> </tr> <?php } ?>
                            <?php if($i != 2){$i++;}else{$i=0;} ?>
                    <?php } ?>

                    <!-- ///////////////////// YOON HANDAKUTEN ///////////////////// -->
                    <?php if($ideogram["Subtype"] == "Yoon (han)dakuten"){ ?>
                        <?php if($j == 3){ ?>
                            </table>
                            <p id="profile_learning_title">Yoon (han)dakuten</p>
                            <div id="switch_check_all">
                                <label > <p><b>Desmarcar tots:</b>
                                        <input type="checkbox" onClick="typeSelectedUncheck('YoonHan','Hiragana',<?php print_r($_SESSION["User"]); ?>, 1)" ></p>
                                </label>
                            </div>
                            <div id="switch_uncheck_all">
                                <label ><p><b>Marcar tots:</b>
                                        <input type="checkbox" onClick="typeSelectedCheck('YoonHan','Hiragana',<?php print_r($_SESSION["User"]); ?>, 0)" ></p>
                                </label>
                            </div>
                            <table class="table_learning">
                            <tr>
                                <th>Lletra</th>
                                <th>A</th>
                                <th>U</th>
                                <th>O</th>
                            </tr>
                            <?php $i = 0; $j++; }?>
                        <?php if($i == 0) { ?> <tr> <th><?php $firstCharacter = substr($ideogram["Romaji"], 0, 1); print_r($firstCharacter);?></th><?php } ?>
                        <?php $lastCharacter = substr($ideogram["Romaji"], -1, strlen($ideogram["Romaji"])); ?>
                        <?php if(($i == 0 && $lastCharacter == "A") || ($i == 1 && $lastCharacter == "U") || ($i == 2 && $lastCharacter == "O")){ ?>
                            <td id="learning_<?php print_r(intval($userSyllabary[$ideogram["ID"]-1]["Level"])); ?>"><span><?php print_r($ideogram["Ideogram"]);?></span><br/><?php print_r($ideogram["Romaji"]); ?> <br/>
                                <label class="switch">
                                    <input type="checkbox" onClick="updateSelected(<?php print_r($ideogram["ID"]); ?>, <?php print_r($_SESSION["User"]); ?>)" <?php if($userSyllabary[$ideogram["ID"]-1]["Selected"] == 1){ $userSyllabary[$ideogram["ID"]-1]["Selected"] = 0;?> checked <?php } ?>>
                                    <span class="slider round"></span>
                                </label>
                            </td>
                        <?php } ?>
                        <?php if($i == 2) { ?> </tr> <?php } ?>
                        <?php if($i != 2){$i++;}else{$i=0;} ?>
                    <?php } ?>

                <?php } ?>
            </table>
        <?php } ?>


        <?php if($_SESSION["learning"] == "Katakana" ){   ?>


        <label class="switch">
            <input type="checkbox" onclick="<?php $sql = 'UPDATE `learning` SET `Selected` = 0 WHERE idIdeogram = 6 AND idUser = 6';$consulta = $con->prepare($sql);$consulta->execute(); ?>" checked>
            <span class="slider round"></span>
        </label>

        <br/>

            <?php $i = 0; ?>
            <table class="default">
                <?php for($j=0; $j<50; $j++){ ?>
                    <?php if ($i == 0) { ?> <tr> <?php } ?>
                    <td> <?php print_r($i); ?> </td>
                    <?php if ($i == 5) { ?> </tr> <?php } ?>
                    <?php if($i!=5){$i++;}else{$i=0;} ?>
                <?php } ?>
            </table>

    <?php } ?>


</div>