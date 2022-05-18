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

<section id="profile_information">
    <p><b>Nom:</b> <?= $information[0]['Username']; ?></p>
    <p><b>Correu electrònic:</b> <?= $information[0]['Email']; ?></p>
    <p><b>Població:</b> <?= $information[0]['BirthDate']; ?></p>
</section>

<br/>

<div id="profile_modify">
    <form action="../index.php?accio=editarUsuario" enctype="multipart/form-data" target="_self" method="post">
        <p>Nom</p> <input type="text" maxlength="10" name="Nombre" placeholder="<?= $information[0]['Username']; ?>" >
        <p>Correu electrònic</p> <input type="email"  maxlength="25" name="Correo" placeholder="<?= $information[0]['Email']; ?>" >
        <p>Contrasenya</p> <input type="password" minlength="5" name="Contraseña" placeholder="5 carácteres o más" >
        <p>Data Naixement</p> <input type="date" name="Naixement" placeholder="<?= $information[0]['BirthDate']; ?>">
        <input type="reset" value="NETEJAR">
        <input type="submit" value="MODIFICAR"><br />
    </form>
</div>