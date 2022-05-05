<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
    <body>
        <section id="pantalla_principal">
            <br/>
            <h1>Benvingut a Enjiny </h1>
            <h3>Comença ara mateix a aprendre donant-li click al següent botó.</h3>
            <br/><br/><br/>
            <?php  if(isset($_SESSION['User'])){ ?>
                <button type="button" id="cbutton" onclick="estudiClick()">COMENÇAR</button>
            <?php } ?>
            <?php  if(!isset($_SESSION['User'])){ ?>
                <b>Inicia sessió per començar.</b>
            <?php } ?>
            <br/>
            <div class="tooltip">Informació
                <span class="tooltiptext">Registra't o inicia sessió abans de començar a jugar!</span>
            </div>
        </section>
    </body>
</html>