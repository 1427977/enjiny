<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
    <body>
        <section id="type_mode">
            <div id="pantalla_mode_header">
                <p>Selecciona el tipus de joc </p>
            </div>

            <form action="./index.php?accio=type" target="_self" method="post">
                <input id='submit_eljp'    type='submit' name = 'submit_eljp'    value = 'Elecció múltiple jp->rm' />
                <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                    <span class="tooltiptext">Selecciona la representació correcte del caràcter japonès.</span>
                </div>
                <br/> <br/> <br/>
                <input id='submit_elrm'    type='submit' name = 'submit_elrm'    value = 'Elecció múltiple rm->jp' />
                <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                    <span class="tooltiptext">Selecciona el caràcter correcte de la síl·laba mostrada.</span>
                </div>
                <br/> <br/> <br/>
                <input id='submit_tecjp'    type='submit' name = 'submit_tecjp'    value = 'Teclat jp->rm' />
                <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                    <span class="tooltiptext">Escriu el so del caràcter japonès.</span>
                </div>
                <br/> <br/> <br/>
                <input id='submit_tecrm'    type='submit' name = 'submit_tecrm'    value = 'Teclat rm->jp' />
                <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                    <span class="tooltiptext">Escriu el caràcter japonés representat.</span>
                </div>
            </form>
            <br/> <br/>
            <div id="pantalla_mode_footer"><a href="./index.php?accio=mode"> <img src="https://www.pikpng.com/pngl/b/365-3650457_flecha-hacia-la-derecha-png-arrow-left-to.png" width="50px" ></a></div>
        </section>
    </body>
</html>