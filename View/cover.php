<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
    <body>
        <section id="pantalla_principal">
            <br/>
            <div id="pantalla_principal_header">
                <p>Benvingut a Enjiny </p>
            </div>
            <div id="pantalla_principal_body">
                <p>Comença ara mateix a aprendre donant-li click al següent botó.</p>
            </div>
            <br/> <br/>
            <div id="pantalla_principal_init">
                <?php  if(isset($_SESSION['User'])){ ?>
                    <button type="button" id="cbutton" onclick="estudiClick()">COMENÇAR</button>
                    <br/> <br/>
                    <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                        <span class="tooltiptext">Prem el botó de començar per donar inici a la teva experiència!</span>
                    </div>
                <?php } ?>
                <?php  if(!isset($_SESSION['User'])){ ?>
                    <p>Inicia sessió per començar.</p>
                    <div class="tooltip"> <img src="https://cdn.pixabay.com/photo/2012/04/24/23/56/information-41225_640.png">
                        <span class="tooltiptext">Registra't o inicia sessió abans de començar a jugar!</span>
                    </div>
                <?php } ?>
            </div>
        </section>
    </body>
</html>