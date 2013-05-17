<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<title>Erro 404 - Página não Encontrada | Delta Prag - Desentupidora e Dedetizadora</title>
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
        <section id="content">
            <div class="erro">
                <h1 class="acessibilidade">Erro 404</h1>

                <p>Desculpe-nos, mas não conseguimos encontrar a página que está procurando.</p>

                <p><strong>Para continuar, você pode:</strong></p>

                <nav role="navigation">
                    <ul class="menu-erro">
                        <li><a href="/" title="Ir para a Home" class="link">Ir para a <span>Home &raquo;</span></a></li>

                        <li><a href="javascript:history.back(-1);" title="Voltar para Página Anterior" class="link">Voltar para <span>Página Anterior &raquo;</span></a></li>

                        <li><a href="servicos.php" title="Ir para a página de Serviços" class="link">Ir para a <span>Página de Serviços &raquo;</span></a></li>

                        <li><a href="contato.php" title="Ir para a Página de Contato" class="link">Ir para a <span>Página de Contato &raquo;</span></a></li>
                    </ul>
                </nav>
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
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/mapa.js"></script>
<script type="text/javascript" src="js/validacao.js"></script>
<script type="text/javascript" src="js/submenu.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>