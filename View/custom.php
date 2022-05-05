<!DOCTYPE html>
<html lang="es" xmlns="http://www.w3.org/1999/html">
    <body>
        <section id="pantalla_mode">
            <h1>Configura el joc </h1>
            <form action="./index.php?accio=custom" target="_self" method="post">
                <h3>Preguntes</h3> <input type="range" min="5" max="100" value="20" class="slider" id="myRange"> <span id="demo"></span>
                <h3>Temps per pregunta</h3> <input type="range" min="7" max="12" value="10" class="slider" id="myRange"> <span id="demo"></span>
                <h3>Temps </h3> <input type="range" min="30" max="300" value="120" class="slider" id="myRange"> <span id="demo"></span>
                <input type="submit" value="ACCEPTAR"><br />
            </form>
        </section>
    </body>
</html>

<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
    }
</script>