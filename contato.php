<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<title>Fale Conosco | Delta Prag - Desentupidora e Dedetizadora</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/validationEngine.jquery.css">
<!--[if ie]>
	<script type="text/javascript" src="js/html5-ie.js"></script>
<![endif]-->
<?php include "analytics.php"; ?>
</head>
<body itemscope itemtype="http://schema.org/WebPage">

<div class="bg-int">
    <?php include "inc/header.php"; ?>
    
    <div role="main">
        <section id="content" class="bg-cont">
            <h1>Fale Conosco</h1>

            <p>Caso reste alguma dúvida ou tenha um pedido de solicitação quanto às soluções que a Delta Prag coloca à sua disposição entre em contato agora mesmo! Basta preencher o formulário de contato e aguardar o breve retorno da equipe de atendimento Delta Prag.</p>

            <form action="resposta-contato.php" method="post" id="formID">
                <ul class="formulario">
                    <li>
                        <label for="nome">Nome*:</label>
                        <input type="text" name="nome" id="nome" class="validate[required]" />
                    </li>

                    <li>
                        <label for="mail">E-mail*:</label>
                        <input type="text" name="mail" id="mail" class="validate[required,custom[email]]" />
                    </li>

                    <li>
                        <label for="tel">Telefone*:</label>
                        <input type="text" name="tel" id="tel" class="validate[required,custom[phone]]" />
                    </li>

                    <li>
                        <label for="msg">Mensagem:</label>
                        <textarea rows="5" cols="50" name="msg" id="msg"></textarea>
                    </li>

                    <li>
                        <span>* Dados Obrigatórios</span>
                        <input type="image" src="img/btenviar.jpg" name="Enviar" alt="Enviar" class="bt-enviar" />
                    </li>
                </ul>
            </form>

            <div class="final-cont">
                <address>
                    <div itemscope itemtype="http://schema.org/Organization">
                        <span itemprop="name" class="titulo-address">Delta Prag - Desentupimento e Dedetização</span><br />
                        Endereço: <span itemprop="streetAddress">Rua Doutor Nelson Pizzotti Mendes, 32</span><br />
                        <span itemprop="addressLocality">São Paulo</span>/
                        <span itemprop="addressRegion">SP</span> - CEP: 
                        <span itemprop="postalCode">04784-040</span>
                    </div>
                </address>

                <p class="mapa"><a href="#" title="Saiba como Chegar" class="modal">Saiba como Chegar &raquo;</a></p>
            

                <div class="contatos">
                    <p class="icon-tel">(11) 5666-9353</p>

                    <p class="icon-email"><a href="mailto:contato@deltaprag.com.br" title="E-mail" class="link">contato@deltaprag.com.br</a></p>
                </div>
            </div>
        </section><!-- FINAL CONTENT -->
    </div>  
</div>

<?php include "inc/footer.php"; ?>

<div id="mapaTeste">
    <div class="mapaContent">
        <div id="mapa" class="window"></div>
        <a class="close hidetxt">Fechar</a>
    </div>
    <div id="mask"></div>
</div>

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-pt.js"></script>
<script type="text/javascript" src="js/jquery.mask.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/mapa.js"></script>
<script type="text/javascript" src="js/validacao.js"></script>
<script type="text/javascript" src="js/submenu.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>