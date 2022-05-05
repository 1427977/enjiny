<section id="logo">
    <a href="./index.php?accio=cover"> <img src="./images/enjiny2.png"> </a>
</section>

<nav id="menu">
    <ul>
        <?php  if(isset($_SESSION['User'])){ ?>
            <li>
                <a href="./index.php?accio=cover">Perfil</a>
            </li>
            <li class="desplegable"><a href="?logout">Log out</a>
                <?php
                    if (isset($_GET['logout'])) {
                        session_unset();
                        header('Refresh: 1; URL=index.php');
                    } }?>
            </li>
    </ul>
    <ul>
        <?php  if(!isset($_SESSION['User'])){ ?>
            <li>
                <a href="./index.php?accio=register">Registre</a>
            </li>
            <li>
                <a href="./index.php?accio=login">Iniciar Sessió</a>
            </li>
        <?php } ?>
    </ul>
</nav>
