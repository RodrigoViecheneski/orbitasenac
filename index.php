<?php
$pageTitle = "OrbitaSenac";
include 'inc/header.inc.php';
?>
<section class="busca">
    <h2>Buscar Startup</h2>
    <form>
        <input type="search" name="Busca" placeholder="Digite o nome da startup">
        <button>Buscar</button>
    </form>
</section>
<section class="menu_start">
    <h2>Repositórios</h2>
    <nav>
        <ul>
            <li><a href="#">Concluídos</a></li>
            <li><a href="#">Iniciados</a></li>
            <li><a href="#">Confirmados</a></li>
            <li><a href="#">Cancelados</a></li>
            <li><a href="#">Evidência</a></li>
        </ul>
    </nav>
</section>
<section class="destaque">
    <img src="img/startup.png" alt="Destaque OrbitaSenac">
</section>
<div class="flex-container">
    <div class="portifolio esq">
        <img src="img/1 copy.png" alt="Logo da startup gamelancer">
        <p>A GameLancer é uma startup voltada para busca de profissionais da área de tecnologia para desenvolver projetos de jogos em home office...para saber mais.<a href="gamelancer.php">CLICK AQUI</a></p>
    </div>
    <div class="portifolio meio">
        Conteúdo 2
    </div>
    <div class="portifolio dir">
        Conteúdo 3
    </div>
</div>
<div onclick="subirTela()" class="scrollbutton"></div>
<script type="text/javascript" src="js/script.js"></script>
<?php
include 'inc/footer.inc.php';
?>