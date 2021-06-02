<?php
    include '../Crud/Read.php';
    include 'puglins/calendar.php';
    $calendar = new Calendar();

    session_start();

    if(!isset($_SESSION['logado'])):
        header("Location: ../index.php");
    endif;

    $id = $_SESSION['id_user'];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/calendar.css">
    <script src="js/app.js"></script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link href="img/cefet-mg-logo.ico" rel="icon" type="image/x-icon" />
    <title>SIGAA - Sistema integrado de Gestoes</title>
</head>
<body>
    <main class="container">

        <!-- INICIO CONTAINER MENU -->
        <div class="container-menu">
            <!-- Inicio icone hamburguer -->
            <header class="header">
                <img src="img/logo.png" alt="">
                <input type="checkbox" id="menu-hamb">
                <label for="menu-hamb" class="menu-hamb">
                    <span class="hamb">
                    </span>
                </label>
            </header>
            <!-- Fim icone -->
            <!-- INICIO MENU -->
            <div class="menu">

                <!-- INICIO NAVIGATION -->
                <nav class="navigation-menu">
                    <!-- INICIO PROFILE -->
                    <div class="profile">
                        <span class="profile-img">
                            
                            <div class="options" ><img src="img/thay-user.png" class="img"></div>
                        </span>
                        <span>
                            <p class="name"><span><?php echo $_SESSION['login_user'];?></span></p>
                            <p class="status">Conectado</p>
                        </span>
                    </div>
                    <!-- FIM PROFILE -->

                    <!-- INICIO ITENS MENU -->
                    <ul>

                        <li><a class="link-nav link-nav-arrow" id="ensino" onclick="ensino()"><i class="fas fa-book"></i>Ensino</a>
                            <ul class="submenu submenu-ensino">
                                <li><a href="" class="link-nav">Emitir Declaração de Vinculo</a></li>
                                <li><a href="" class="link-nav">Alunos Aptos a Colar Grau</a></li>
                                <li><a href="" class="link-nav">Consultar Estrutura Curricular</a></li>
                                <li><a href="" class="link-nav">Atividades de Campo</a></li>
                                <li><a href="" class="link-nav">Calendario Academico</a></li>
                                <li><a class="link-nav link-nav-arrow" id="cons" onclick="cons()">Consultas Gerais</a>
                                    <ul class="submenu-2 con-geral">
                                        <li><a href="" class="link-nav">Consultar Curso</a></li>
                                        <li><a href="" class="link-nav">Consultar Componente Curricular</a></li>
                                        <li><a href="" class="link-nav">Consultar Turma</a></li>
                                        <li><a href="" class="link-nav">Consultar Unidades Academicas</a></li>
                                    </ul>
                                </li>
                                <li><a href="" class="link-nav">Comunicados Importantes</a></li>
                            </ul>
                        </li>
                        

                        <li><a class="link-nav link-nav-arrow" id="pesquisa" onclick="pesquisa()"><i class="fas fa-flask"></i>Pesquisas</a>
                            <ul class="submenu submenu-pesquisa">
                                <li><a class="link-nav link-nav-arrow" id="proj_pesq" onclick="proj_pesq()">Projeto de Pesquisa</a>
                                    <ul class="submenu-2 proj_pesq">
                                        <li><a href="" class="link-nav">Consultar Projetos</a></li>
                                        <li><a href="" class="link-nav">Projetos que Participo</a></li>
                                    </ul>
                                </li>
                                <li><a onclick="plan_trab()" id="plan_trab" class="link-nav link-nav-arrow">Plano de Trabalho</a>
                                    <ul class="submenu-2 plan_trab">
                                        <li><a href="" class="link-nav">Meus Planos de Trabalho</a></li>
                                    </ul>
                                </li>
                                <li><a onclick="relat_ini()" id="relat_ini" class="link-nav link-nav-arrow">Relatorio de Iniciação Cientifica</a>
                                    <ul class="submenu-2 relat_ini">
                                        <li><a onclick="relat_parc()" id="relat_parc" class="link-nav link-nav-arrow">Relatorio Parciais</a>
                                            <ul class="submenu-3 relat_parc">
                                                <li> <a href="" class="link-nav">Enviar</a></li>
                                                <li><a href="" class="link-nav">Consultar</a></li>
                                            </ul>
                                        </li>
                                        <li><a onclick="relat_fin()" id="relat_fin" class="link-nav link-nav-arrow">Relatorio Finail</a>
                                            <ul class="submenu-3 relat_fin">
                                                <li><a href="" class="link-nav">Enviar</a></li>
                                                <li><a href="" class="link-nav">Consultar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a onclick="cert_decl()" id="cert_decl" class="link-nav link-nav-arrow">Certificados e Declarações</a>
                                    <ul class="submenu cert_decl">
                                        <li><a href="" class="link-nav">Iniciação Cientifica</a></li>
                                    </ul>
                                </li>
                                <li><a onclick="cong_ini()" id="cong_ini" class="link-nav link-nav-arrow">Congresso de Iniciação Cientifica</a>
                                    <ul class="submenu cong_ini"> 
                                        <li><a href="" class="link-nav">Submeter Trabalho Completo</a></li>
                                        <li><a href="" class="link-nav">Meus Trabalhos</a></li>
                                        <li><a href="" class="link-nav">Certificados</a></li>
                                        <li><a href="" class="link-nav">Baixar Modelo do Trabalho</a></li>
                                        <li><a href="" class="link-nav">Justificar Ausencia - Autor</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a onclick="extensao()" id="extensao" class="link-nav link-nav-arrow"><i class="fas fa-home"></i>Extensão</a>
                            <ul class="submenu submenu-extensao">
                                <li><a href="" class="link-nav">Consultar Ações</a></li>
                                <li><a href="" class="link-nav">Meus Planos de Trabalho</a></li>
                                <li><a href="" class="link-nav">Minhas Ações como M. de Equipe</a></li>
                                <li><a href="" class="link-nav">Meus Relatorios</a></li>
                                <li><a href="" class="link-nav">Certificados e Declarações</a></li>
                                <li><a href="" class="link-nav">Inscrições On-li de Extensão</a></li>
                                <li><a href="" class="link-nav">Visualizar Resultado da Inscrição</a></li>
                            </ul>
                        </li>

                        <li><a onclick="acoes()" id="acoes" class="link-nav link-nav-arrow"><i class="fas fa-puzzle-piece"></i>Ações Associadas</a>
                            <ul class="submenu submenu-acoes">
                                <li><a href="" class="link-nav">Consultar Ações Associadas</a></li>
                                <li><a href="" class="link-nav">Meus Planos de Trabalho</a></li>
                                <li><a href="" class="link-nav">Certificados e declarações</a></li>
                            </ul>
                        </li>

                        <li><a href="" class="link-nav"><i class="far fa-bookmark"></i>Bib.Virtual</a></li>

                        <li><a onclick="bolsas()" id="bolsas" class="link-nav link-nav-arrow"><i class="far fa-user"></i>Bolsas</a>
                            <ul class="submenu submenu-bolsa">
                                <li><a href="" class="link-nav">Aderir ao Cadastro Único</a></li>
                                <li><a onclick="decl_bolsista()" id="decl_bolsista" class="link-nav link-nav-arrow">Declaração Bolsista</a>
                                    <ul class="submenu-2 decl_bolsista">
                                        <li><a href="" class="link-nav">Assinar Declaração</a></li>
                                        <li><a href="" class="link-nav">Visualizar Assinaturas</a></li>
                                    </ul>
                                </li>
                                <li><a href="" class="link-nav">Oportunidades de Bolsas</a></li>
                                <li><a href="" class="link-nav">Acompanhar Meus Registros de Interesses</a></li>
                                <li><a href="" class="link-nav">Minha Bolsa na Instituição</a></li>
                                <li><a onclick="solic_bolsa()" id="solic_bolsa" class="link-nav link-nav-arrow">Solicitação de Bolsa</a>
                                    <ul class="submenu-2 solic_bolsa">
                                        <li><a href="" class="link-nav">Solicitação de Bolsa auxilio</a></li>
                                        <li><a href="" class="link-nav">Desbloqueio do Acesso ao RU</a></li>
                                        <li><a href="" class="link-nav">Acompanhar S. da Bolsa Auxilio</a></li>
                                        <li><a href="" class="link-nav">Acompanhar S. Desbloqueio do RU</a></li>
                                        <li><a href="" class="link-nav">Renovar Bolsa Auxilio</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li><a onclick="estagio()" id="estagio" class="link-nav link-nav-arrow"><i class="far fa-address-book"></i>Estágio</a>
                            <ul class="submenu submenu-estagio">
                                <li><a href="" class="link-nav">Mural de Vagas</a></li>
                                <li><a href="" class="link-nav">Gerenciar Estágio</a></li>
                            </ul>
                        </li>
                        
                        <li><a onclick="outros()" id="outros" class="link-nav link-nav-arrow"> <i class="fas fa-plus"></i>Outros</a>
                            <ul class="submenu submenu-outros">
                                <li><a onclick="amb_virt()" id="amb_virt"  class="link-nav link-nav-arrow">Ambientes Virtuais</a>
                                    <ul class="submenu-2 amb_virt">
                                        <li><a class="link-nav link-nav-arrow" id="com_vir" onclick="com_vir() ">Comunidades Virtuais</a>
                                            <ul class="submenu-3 com_vir">
                                                <li href=""  class="link-nav">Buscar Comunidades Virtuais</li>
                                                <li href=""  class="link-nav">Minhas Comunidades</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a onclick="cord_curs()" id="cord_curs" class="link-nav link-nav-arrow">Coordenação do Curso</a>
                                    <ul class="submenu-2 cord_curs">
                                        <li><a href=""  class="link-nav">Forum do Curso</a></li>
                                        <li><a href="" class="link-nav">Pagina do Curso</a></li>
                                    </ul>
                                </li>
                                <li><a onclick="ouvidoria()" id="ouvidoria" class="link-nav link-nav-arrow">Ouvidoria</a>
                                    <ul class="submenu-2 ouvidoria">
                                        <li><a href="" class="link-nav">Entrar em Contato</a></li>
                                        <li><a href="" class="link-nav">Acompanhar Manifestações</a></li>
                                    </ul >
                                </li>
                                <li><a onclick="prod_int()" id="prod_int" class="link-nav link-nav-arrow">Produções Intelectuais</a>
                                    <ul class="submenu-2 prod_int">
                                        <li><a href="" class="link-nav">Acervo dos Docentes</a></li>
                                        <li><a href="" class="link-nav">Consultar Defesa de pós Graduação</a></li>
                                    </ul>
                                </li>
                                <li><a onclick="escrit_ideias()" id="escrit_ideias" class="link-nav link-nav-arrow">Escritorio de Ideias</a>
                                    <ul class="submenu-2 escrit_ideias">
                                        <li><a href="" class="link-nav">Cadastrar Ideia</a></li>
                                        <li><a href="" class="link-nav">Listar/Alterar Ideia</a></li>
                                    </ul>
                                </li>
                                <li><a href="" class="link-nav">Relatorio de Carga Horaria Docente</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- FIM ITENS MENU -->

                </nav>
                <!-- FIM NAVIGATION -->
            </div>
            <!-- FIM MENU -->
        </div>
        <!-- FIM CONTAINER MENU -->
        <div class="menu-ho">
                
            <ul>       
                <li><i class="far fa-bell"></i></li>
            </ul>
            <div class="profile-2">
                <span class="profile-img-2">
                    
                    <div class="options-2" ><img src="img/thay-user.png" class="img"></div>
                </span>
                <span>
                    <p class="name"><?php echo $_SESSION['login_user'];?></p>
                </span>
            </div>
            <ul>       
                <li><i class="fas fa-cogs"></i></li>
            </ul>
        </div>
        <!-- CONTEUDO -->
        <div class="container-conteudo">
            <div class="conteudo-main">
                <div class="title-p">
                    <p>Painel do aluno </p>
                </div>
                <div class="options-main">
                    <div class="modulo">
                        <div class="icon-op"><a href=""><i class="fas fa-cubes"></i></a></div>
                        <div class="option-content">
                            <a href="">Modulo</a>
                            
                        </div>
                    </div>
                    

                    <div class="chamado">
        
                        <div class="icon-op"><a href=""><i class="fas fa-exclamation-triangle"></i></a></div>
                        <div class="option-content">
                            <a href="">Abrir Chamado</a>
                        </div>
                    </div>

                    <div class="menu-dis">
                        <div class="icon-op"><a href=""><i class="fas fa-compass"></i></a></div>
                        <div class="option-content">
                            <a href="">Menu Discente</a>
                        </div>
                    </div>

                    <div class="mensage">
                        <div class="icon-op"><a href=""><i class="fas fa-envelope"></i></a></div>
                        <div class="option-content">
                            <a href="">Mensagens</a>
                        </div>
                    </div>

                </div>
                <div class="semestre">
                    <div class="minimizar">
                        <i class="fa fa-minus" id="minimizar"></i>
                        <i class="fa fa-times" id="fechar"></i>
                    </div>
                    <div class="calendario">
                        <?=$calendar?>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM CONTEUDO -->
    </main>
</body>
</html>