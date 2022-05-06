<!DOCTYPE html>
<html lang="es">
    <body>
        <section id="form">
            <form action="./index.php?accio=register" target="_self" method="post">
                <p>Nom</p> <input type="text" maxlength="10" name="Nom" required ><br />
                <p>Correu</p> <input type="email"  maxlength="25" name="Correu" required ><br />
                <p>Contrasenya</p> <input type="password" minlength="5" name="Contrasenya" placeholder="5 caràcteres o més" required><br />
                <p>Data Naixement</p> <input type="date" name="Naixement" ><br />
                <p><input type="checkbox" name="validar" required> Accepto les condicions d'ús i de servei.</p><br />

                <input type="reset" value="NETEJAR">
                <input type="submit" value="ACCEPTAR"><br />
            </form>
        </section>
    </body>
</html>