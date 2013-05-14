<?php $url = basename($_SERVER["SCRIPT_NAME"]); ?>
<?php if($url == "index.php"){ ?>
<header role="banner">
<?php }else { ?>
<header class="header-internas" role="banner">
<?php } ?>
        <?php if($url == "index.php"){ ?>
        <h1><a href="/" title="Delta Prag - Desentupidora e Dedetizadora" class="hidetxt">Delta Prag - Desentupidora e Dedetizadora</a></h1>
        <?php }else{ ?>
        <p class="logo"><a href="/" title="Delta Prag - Desentupidora e Dedetizadora"><img src="img/delta-prag1.jpg" alt+"Delta Prag - Desentupidora e Dedetizadora" width="200" height="71" /></a></p>
        <?php } ?>

        <p class="telefone">(11) 5666-9353</p>
        
        <nav role="navigation">
            <ul>
                <li><a href="/" title="Home" class="bt-home <?php if($url == "index.php"){echo 'ativo1';} ?>">Home</a></li>
                <li><a href="empresa.php" title="Empresa" class="bt-empr <?php if($url == "empresa.php"){echo 'ativo2';} ?>">Empresa</a></li>
                <li><a href="servicos.php" title="Serviços" class="bt-serv <?php if($url == "servicos.php"){echo 'ativo3';} ?>">Serviços</a></li>
                <li><a href="frota.php" title="Frota" class="bt-frot <?php if($url == "frota.php"){echo 'ativo4';} ?>">Frota</a></li>
                <li><a href="informativo.php" title="Informativo" class="bt-info <?php if($url == "informativo.php"){echo 'ativo5';} ?>">Informativo</a></li>
                <li><a href="contato.php" title="Contato" class="bt-cont <?php if($url == "contato.php"){echo 'ativo6';} ?>">Contato</a></li>
            </ul>
        </nav>
    </header><!-- FINAL HEADER -->