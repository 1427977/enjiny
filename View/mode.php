<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
    <body>
        <section id="pantalla_mode">
            <div id="pantalla_mode_header">
                <p>Selecciona el mode de joc </p>
            </div>
            <form action="./index.php?accio=mode" target="_self" method="post">
                <input id='submit_classic'    type='submit' name = 'submit_classic'    value = 'CLÀSSIC' />
                <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                    <span class="tooltiptext">Mode de joc amb 20 preguntes sense temps.</span>
                </div>
                <br/> <br/>
                <input id='submit_temps'    type='submit' name = 'submit_temps'    value = 'PER TEMPS' />
                <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                    <span class="tooltiptext">Mode de joc amb 20 preguntes en un límit de temps de 90 segons.</span>
                </div>
                <br/> <br/>
                <input id='submit_punts'    type='submit' name = 'submit_punts'    value = 'PER PUNTS' />
                <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                    <span class="tooltiptext">Mode de joc amb 20 preguntes i límit de 90s. Guanya més punts amb ratxa d'encerts.</span>
                </div>
                <br/> <br/> <br/> <br/> <br/>
                <input id='submit_personalitza'    type='submit' name = 'submit_personalitza'    value = 'PERSONALITZA' />
                <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                    <span class="tooltiptext">Personalitza les teves preferències per la teva partida.</span>
                </div>
            </form>

            <br/><br/>
            <div class="barra">
                <span style="width: <?php print_r($_SESSION["average"]); ?>%"></span>
            </div>
            <br/> <br/>
            <div id="pantalla_mode_footer"><a href="./index.php?accio=syllabary"> <img src="https://www.pikpng.com/pngl/b/365-3650457_flecha-hacia-la-derecha-png-arrow-left-to.png" width="50px" ></a></div>
        </section>
    </body>
</html>