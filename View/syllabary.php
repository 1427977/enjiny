<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
    <body>
        <div id="pantalla_syllabary">
            <div id="pantalla_syllabary_header">
                <p>Selecciona el tipus de joc</p>
            </div>
            <br/>
            <form action="./index.php?accio=syllabary" target="_self" method="post">
                <input id='submit_hiragana'    type='submit' name = 'submit_hiragana'    value = 'HIRAGANA' />
                <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                    <span class="tooltiptext">Sil·labari compost per 46 símbols representant un so diferent.<br/> S'escriuen inflexions i modificacions dels verbs, adjectius, adverbis i partícules.</span>
                </div>
                <br/> <br/> <br/>
                <input id='submit_katakana'    type='submit' name = 'submit_katakana'    value = 'KATAKANA' />
                <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                    <span class="tooltiptext">Sil·labari compost per 46 símbols representant un so diferent.<br/> S'utilitza per escriure paraules estrangeres, onomatopeies i noms científics i tècnics. </span>
                </div>
                <br/> <br/> <br/>
                <input id='submit_kanji'    type='submit' name = 'submit_kanji'    value = 'KANJI' />
                <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                    <span class="tooltiptext">Ideogrames d'origen xinès, poseeixen valor fonètic i/o tenen un valor conceptual.</span>
                </div>
            </form>
            <br/> <br/>
            <div id="pantalla_syllabary_footer"
                <a href="./index.php?accio=cover"> <img src="https://www.pikpng.com/pngl/b/365-3650457_flecha-hacia-la-derecha-png-arrow-left-to.png"></a>
            </div>
        </section>
    </body>
</html>