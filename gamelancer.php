<?php
$pageTitle = "OrbitaSenac - GameLancer";
include 'inc/header.inc.php';
?>
<!--<title>OrbitaSenac - Gamelancer</title>-->
<link rel="stylesheet" type="text/css" href="css/startup.css">
<div class="startup">
    <h1>Sobre a GameLancer</h1>
    <p>Saiba como nossa startup trabalha para oferecer o melhor da tecnologia.</p>

    <form method="POST" action="inscrever.php">
        <fieldset class="modelo">
            <legend>Conheça nossa Startup</legend>
            <input type="radio" name="modelo" value="preto" id="preto" checked>
            <label for="preto"><img src="img/games1.jpg">
                <div class="texto">
                    <h3>Nossa Política</h3>
                    <p>
                        Técnicas: Scrum, Prototype <br>
                        Linguagens Front: HTML, CSS, JS <br>
                        Linguagens Back: PHP, Python, C# <br>
                        Framework Front: React, Bootstrap, Taiwind <br>
                        Framework Back: Laravel, Node <br>
                        Banco de Dados: Mysql, PostgreSQL<br>
                    </p>
                </div>
            </label>
            <input type="radio" name="modelo" value="azul" id="azul">
            <label for="azul"><img src="img/games2.jpg">
                <div class="texto">
                    <h3>Tipos de Jogos Desenvolvidos</h3>
                    <p>
                        Os jogos desenvolvidos podem ser classificados em diferentes tipos, de acordo com seus objetivos e mecânicas. Entre os principais estão os jogos de ação, que exigem reflexos rápidos e habilidade do jogador; os jogos de aventura, focados em exploração e narrativa; os jogos de estratégia, que envolvem planejamento e tomada de decisões; os jogos de simulação, que reproduzem situações do mundo real; os jogos esportivos, baseados em modalidades esportivas; e os jogos educativos, criados para estimular o aprendizado de forma interativa. Cada tipo oferece experiências distintas, atendendo a diferentes perfis de jogadores.
                    </p>
                </div>
            </label>

            <input type="radio" name="modelo" value="amarelo" id="amarelo">
            <label for="amarelo"><img src="img/game3.jpg">
                <div class="texto">
                    <h3>Tipos de Jogos Desenvolvidos</h3>
                    <p>
                        As ferramentas de modelagem de jogos são utilizadas para planejar, criar e organizar elementos visuais e estruturais de um game. Entre as principais estão softwares de modelagem 2D e 3D, como Blender e Maya, usados para criar personagens, cenários e objetos; ferramentas de design gráfico, como Photoshop e GIMP, para texturas e interfaces; além de engines como Unity e Unreal Engine, que integram os modelos ao jogo. Essas ferramentas facilitam o desenvolvimento, tornando o processo mais eficiente e profissional.
                    </p>
                </div>
            </label>
            <div class="inscricao">
                <input type="submit" value="Incrição" name="inscricao">
            </div>
        </fieldset>
    </form>
</div>


<?php include 'inc/footer.inc.php'; ?>