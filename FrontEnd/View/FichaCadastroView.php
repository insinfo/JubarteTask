<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Jubarte - Prefeitura Municipal de Rio das Ostras - RJ
    </title>

    <!-- ESTILO LIMITLESS -->
    <link href="/cdn/Assets/fonts/material-icons/material-icons.css" rel="stylesheet">
    <link href="/cdn/Assets/fonts/roboto/roboto.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/core.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/components.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /ESTILO LIMITLESS -->

    <!-- JS CORE LIMITLESS -->
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript"
            src="/cdn/Vendor/limitless/material/js/core/libraries/jasny_bootstrap.min.js"></script>

    <script type="text/javascript"
            src="/cdn/Vendor/limitless/material/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript"
            src="/cdn/Vendor/limitless/material/js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/plugins/forms/styling/switch.min.js"></script>
    <script type="text/javascript"
            src="/cdn/Vendor/limitless/material/js/plugins/forms/selects/select2.min.js"></script>

    <!-- PERFECT-SCROLLBAR -->
    <link href="/cdn/Vendor/perfect-scrollbar-1.3.0/perfect-scrollbar.css" rel="stylesheet" type="text/css">

    <!-- DEPENDEICIAS JUBARTE -->
    <link href="/cdn/Assets/css/jubarteStyle.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Assets/css/modernDataTable.css" rel="stylesheet" type="text/css"/>

    <script type="text/javascript" src="/cdn/utils/utils.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModernBlockUI.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModalAPI.js"></script>
    <script type="text/javascript" src="/cdn/utils/LoaderAPI.js"></script>
    <script type="text/javascript" src="/cdn/utils/RESTClient.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModernDataTable.js"></script>
    <script type="text/javascript" src="/cdn/utils/MenuAPI.js"></script>
    <script type="text/javascript" src="/cdn/utils/JubarteAPI.js"></script>
    <script type="text/javascript" src="/cdn/utils/FormValidationAPI.js"></script>

    <!-- VIEW MODEL -->
    <script type="text/javascript" src="ViewModel/Constants.js"></script>
    <script type="text/javascript" src="ViewModel/FichaViewModel.js"></script>

</head>
<body class="sidebar-detached-hidden">

<div class="sidebar-xs has-detached-right">
    <!-- Main content -->
    <div class="containerInsideIframe">
        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- CONTEUDO -->

                <!-- Main content -->
                <div class="content-wrapper">

                    <div id="formCadastro">

                        <!-- Page header -->
                        <div class="page-header">
                            <div class="page-header-content">
                                <div class="page-title text-center">
                                    <h2 class="text-semibold">Pré-cadastro casa para o Servidor</h2>
                                </div>
                            </div>
                        </div>
                        <!-- /page header -->

                        <!-- Content area -->
                        <div class="content">

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Informações Pessoais</h4>
                                        </div>
                                        <!-- form Pessoa -->
                                        <div id="formPessoa" class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-3 inputBlock">
                                                                <label>CPF</label>
                                                                <input id="cpf" name="cpf" type="text"
                                                                       class="form-control" required
                                                                       data-mask="999.999.999-99"
                                                                       data-type="cpf">
                                                            </div>
                                                            <div class="col-md-6 inputBlock">
                                                                <label>Nome Completo</label>
                                                                <input id="nome" name="nome" type="text"
                                                                       class="form-control" required
                                                                       data-type="string">
                                                            </div>
                                                            <div class="col-md-3 inputBlock">
                                                                <label>Data de Nascimento</label>
                                                                <input id="dataNascimento" name="dataNascimento"
                                                                       type="text"
                                                                       class="form-control" required data-type="date"
                                                                       data-mask="99/99/9999"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-3 inputBlock">
                                                                <label>Estado Civil</label>
                                                                <select id="estadoCivil" name="estadoCivil"
                                                                        class="select" required
                                                                        data-type="string">
                                                                    <option value="null">Selecione</option>
                                                                    <option value="Solteiro(a)">Solteiro(a)</option>
                                                                    <option value="União Estável">União Estável</option>
                                                                    <option value="Casado(a)">Casado(a)</option>
                                                                    <option value="Divorciado(a)">Divorciado(a)</option>
                                                                    <option value="Viúvo(a)">Viúvo(a)</option>
                                                                    <option value="Outros">Outros</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-5 inputBlock">
                                                                <label>E-mail</label>
                                                                <input id="email" name="email" type="text"
                                                                       class="form-control" required
                                                                       data-type="email" maxlength="100">
                                                            </div>
                                                            <div class="col-md-2 inputBlock">
                                                                <label>Tipo</label>
                                                                <select name="tipoTelefone" id="tipoTelefone"
                                                                        class="select" required
                                                                        data-type="string">
                                                                    <option selected="" disabled="">Selecione</option>
                                                                    <option value="residencial">Residencial</option>
                                                                    <option value="comercial">Comercial</option>
                                                                    <option value="movel">Móvel</option>
                                                                    <option value="whatsapp">WhatsApp</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-2 inputBlock">
                                                                <label>Telefone</label>
                                                                <input name="telefone" id="telefone" type="text"
                                                                       class="form-control"
                                                                       required
                                                                       data-type="string"
                                                                >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-6 inputBlock">
                                                                <label>Lotação Atual</label>
                                                                <input name="lotacao" id="lotacao" type="text"
                                                                       class="form-control"
                                                                       required
                                                                       data-type="string">
                                                            </div>
                                                            <div class="col-md-6 inputBlock">
                                                                <label>Cargo Efetivo</label>
                                                                <select name="cargo" id="cargo" class="select"
                                                                        required
                                                                        data-type="string"
                                                                        data-live-search="true">
                                                                    <option value="null" selected="" disabled="">
                                                                        Selecione
                                                                    </option>

                                                                    <!-- options cargo -->
                                                                    <option>Administrador</option>
                                                                    <option>Administrador Hospitalar</option>
                                                                    <option>Administrador Regional AR</option>
                                                                    <option>Agente Administrativo</option>
                                                                    <option>Agente Administrativo - CAS</option>
                                                                    <option>Agente Comunitário de Saúde</option>
                                                                    <option>Agente de Portaria</option>
                                                                    <option>Agente de Saneamento</option>
                                                                    <option>Agente Especializado - CAS</option>
                                                                    <option>Agente Fiscalização - CAS</option>
                                                                    <option>Agente Operacional - CAS</option>
                                                                    <option>Agente Programa Esporte e Lazer C</option>
                                                                    <option>Agente Servicos Gerais - CAS</option>
                                                                    <option>Agente Tributário</option>
                                                                    <option>Ajudante de Cozinheiro</option>
                                                                    <option>Almoxarife</option>
                                                                    <option>Analista de Segurança</option>
                                                                    <option>Analista de Sistemas</option>
                                                                    <option>Arquiteto</option>
                                                                    <option>Assessor Administrativo</option>
                                                                    <option>Assessor de Administração Financeira
                                                                    </option>
                                                                    <option>Assessor de Administração Tributária
                                                                    </option>
                                                                    <option>Assessor de Folha de Paga</option>
                                                                    <option>Assessor de Planejamento e Controle</option>
                                                                    <option>Assessor Executivo</option>
                                                                    <option>Assessor Jurídico</option>
                                                                    <option>Assessor Jurídico de Mediação e
                                                                        Conciliação
                                                                    </option>
                                                                    <option>Assessor Jurídico I</option>
                                                                    <option>Assessor Jurídico II</option>
                                                                    <option>Assessor Jurídico III</option>
                                                                    <option>Assessor Pedagógico</option>
                                                                    <option>Assistente Adm de Log.I-A (Cedido)</option>
                                                                    <option>Assistente Análise Economicidade</option>
                                                                    <option>Assistente Análise Processual</option>
                                                                    <option>Assistente Controle Orçamentário</option>
                                                                    <option>Assistente de Mediação e Conciliação
                                                                    </option>
                                                                    <option>Assistente Executivo</option>
                                                                    <option>Assistente I</option>
                                                                    <option>Assistente II</option>
                                                                    <option>Assistente III</option>
                                                                    <option>Assistente IV</option>
                                                                    <option>Assistente Jurídico I</option>
                                                                    <option>Assistente Projetos Especiais</option>
                                                                    <option>Assistente Social</option>
                                                                    <option>Assistente Social II</option>
                                                                    <option>Assistente Social III</option>
                                                                    <option>Assistente Social IV</option>
                                                                    <option>Atendente de Consultório Dentário</option>
                                                                    <option>Auxiliar Administrativo</option>
                                                                    <option>Auxiliar Administrativo - CAS</option>
                                                                    <option>Auxiliar de Coveiro</option>
                                                                    <option>Auxiliar de Creche</option>
                                                                    <option>Auxiliar de Cuidados Escola</option>
                                                                    <option>Auxiliar de Desenvolvimento Infantil
                                                                    </option>
                                                                    <option>Auxiliar de Enfermagem</option>
                                                                    <option>Auxiliar de Enfermagem - CAS</option>
                                                                    <option>Auxiliar de Enfermagem (Cedido)</option>
                                                                    <option>Auxiliar de Laboratório</option>
                                                                    <option>Auxiliar de Mediação e Conciliação</option>
                                                                    <option>Auxiliar de Secretaria Escolar</option>
                                                                    <option>Auxiliar de Serviço Escolar (Cedido)
                                                                    </option>
                                                                    <option>Auxiliar de Serviços Gerais</option>
                                                                    <option>Auxiliar de Serviços Gerais (Cedido)
                                                                    </option>
                                                                    <option>Auxiliar Educacional</option>
                                                                    <option>Bacharel em Comunicação Social</option>
                                                                    <option>Bacharel em Comunicação Social -
                                                                        Jornalista
                                                                    </option>
                                                                    <option>Bacharel em Comunicação Social (Cedido)
                                                                    </option>
                                                                    <option>Bacharel em Turismo</option>
                                                                    <option>Bibliotecário</option>
                                                                    <option>Biólogo</option>
                                                                    <option>Bioquímico</option>
                                                                    <option>Bombeiro Hidráulico</option>
                                                                    <option>Carpinteiro</option>
                                                                    <option>CC - Administrador Regional AR</option>
                                                                    <option>CC - Assessor Administrativo</option>
                                                                    <option>CC - Assessor de Administração Financeira
                                                                    </option>
                                                                    <option>CC - Assessor de Administração Tributária
                                                                    </option>
                                                                    <option>CC - Assessor de Folha de Paga</option>
                                                                    <option>CC - Assessor de Planejamento e Controle
                                                                    </option>
                                                                    <option>CC - Assessor Executivo</option>
                                                                    <option>CC - Assessor Jurídico</option>
                                                                    <option>CC - Assessor Jurídico de Mediação e
                                                                        Conciliação
                                                                    </option>
                                                                    <option>CC - Assessor Jurídico I</option>
                                                                    <option>CC - Assessor Jurídico II</option>
                                                                    <option>CC - Assessor Jurídico III</option>
                                                                    <option>CC - Assessor Pedagógico</option>
                                                                    <option>CC - Assistente Análise Economicidade
                                                                    </option>
                                                                    <option>CC - Assistente Análise Processual</option>
                                                                    <option>CC - Assistente Controle Orçamentário
                                                                    </option>
                                                                    <option>CC - Assistente de Mediação e Conciliação
                                                                    </option>
                                                                    <option>CC - Assistente Executivo</option>
                                                                    <option>CC - Assistente I</option>
                                                                    <option>CC - Assistente II</option>
                                                                    <option>CC - Assistente III</option>
                                                                    <option>CC - Assistente IV</option>
                                                                    <option>CC - Assistente Jurídico I</option>
                                                                    <option>CC - Assistente Projetos Especiais</option>
                                                                    <option>CC - Aux. de Mediação e Concil</option>
                                                                    <option>CC - Conselheiro Tutelar</option>
                                                                    <option>CC - Coordenador</option>
                                                                    <option>CC - Coordenador Administrativo</option>
                                                                    <option>CC - Coordenador Apoio Adm e Gerenci
                                                                    </option>
                                                                    <option>CC - Coordenador Cam. Indeniz Adm</option>
                                                                    <option>CC - Coordenador Cam. Mediação e
                                                                        Conciliação
                                                                    </option>
                                                                    <option>CC - Coordenador de Comunicação Social
                                                                    </option>
                                                                    <option>CC - Coordenador de Segmento</option>
                                                                    <option>CC - Coordenador Fundo Mun Assistência
                                                                        Social
                                                                    </option>
                                                                    <option>CC - Coordenador Fundo Municipal</option>
                                                                    <option>CC - Coordenador Geral atenç b</option>
                                                                    <option>CC - Coordenador Geral Fiscalização</option>
                                                                    <option>CC - Depositário Municipal</option>
                                                                    <option>CC - Dir do Dpto de Transp Púb</option>
                                                                    <option>CC - Diretor Adjunto de Unidade Escolar
                                                                    </option>
                                                                    <option>CC - Diretor de Departamento</option>
                                                                    <option>CC - Diretor de Unidade</option>
                                                                    <option>CC - Diretor de Unidade Escolar</option>
                                                                    <option>CC - Diretor Depto Administrativo</option>
                                                                    <option>CC - Diretor Depto de Acessibilidade e
                                                                        Mobilidade Urbana
                                                                    </option>
                                                                    <option>CC - Diretor Depto de Conservação
                                                                        Equipamentos Ur
                                                                    </option>
                                                                    <option>CC - Diretor Depto de Transportes Públicos
                                                                    </option>
                                                                    <option>CC - Diretor Depto de Veículos Oficiais
                                                                    </option>
                                                                    <option>CC - Diretor Depto Guardas</option>
                                                                    <option>CC - Diretor Depto Infra e Serv</option>
                                                                    <option>CC - Gerente de Aterro Sanitário</option>
                                                                    <option>CC - Gerente de Centro de Saúde</option>
                                                                    <option>CC - Gerente de Projetos Sociais</option>
                                                                    <option>CC - Gerente Programas Especiais</option>
                                                                    <option>CC - Gerente Projetos Especiais</option>
                                                                    <option>CC - Gerente Unidade Conservação</option>
                                                                    <option>CC - Gerente Unidade Esportiva</option>
                                                                    <option>CC - Presidente Comissão Permanente de
                                                                        Licitação e Contratos
                                                                    </option>
                                                                    <option>CC - Presidente Comissão Permanente de
                                                                        Licitação e Pregão
                                                                    </option>
                                                                    <option>CC - Presidente CPSIA</option>
                                                                    <option>CC - Professor III - Cedido</option>
                                                                    <option>CC - Secretário Executivo</option>
                                                                    <option>CC - Secretário Geral</option>
                                                                    <option>CC - Subsecretário Ambiente Sustentabilidade
                                                                        Agricultura e Pesca
                                                                    </option>
                                                                    <option>CC - Subsecretário Atenção Especializada
                                                                    </option>
                                                                    <option>CC - Subsecretário de Administração</option>
                                                                    <option>CC - Subsecretário de Educação</option>
                                                                    <option>CC - Subsecretário de Obras</option>
                                                                    <option>CC - Subsecretário de Turismo</option>
                                                                    <option>CC - Subsecretário Mun. de Administração de
                                                                        Obras
                                                                    </option>
                                                                    <option>CC - Subsecretário Mun. de Desenvolvimento
                                                                        Econômico
                                                                    </option>
                                                                    <option>CC - Subsecretário Mun. de Esporte e Lazer
                                                                    </option>
                                                                    <option>CC - Subsecretário Mun. de Segurança
                                                                        Pública
                                                                    </option>
                                                                    <option>CC - Subsecretário Pedagógico Edu</option>
                                                                    <option>CC - Supervisor de Limpeza Urbana</option>
                                                                    <option>CC - Supervisor de Serviços Obras Públicas
                                                                    </option>
                                                                    <option>CC - Supervisor Serviços Publi</option>
                                                                    <option>CC - Tesoureiro</option>
                                                                    <option>Chefe de Gabinete</option>
                                                                    <option>Conselheiro Tutelar</option>
                                                                    <option>Contador</option>
                                                                    <option>Coordenador</option>
                                                                    <option>Coordenador Administrativ</option>
                                                                    <option>Coordenador Apoio Adm e Gerenci</option>
                                                                    <option>Coordenador Cam. Mediação e Conciliação
                                                                    </option>
                                                                    <option>Coordenador de Comunicação Social</option>
                                                                    <option>Coordenador Geral atenç b</option>
                                                                    <option>Coordenador Geral Fiscalização</option>
                                                                    <option>Copeira</option>
                                                                    <option>Coveiro</option>
                                                                    <option>Cozinheiro</option>
                                                                    <option>Cuidador Social</option>
                                                                    <option>Depositário Municipal</option>
                                                                    <option>Desenhista Projetista</option>
                                                                    <option>Dir do Dpto de Transp Púb</option>
                                                                    <option>Diretor Adjunto de Unidade Escolar</option>
                                                                    <option>Diretor de Departamento</option>
                                                                    <option>Diretor de Unidade</option>
                                                                    <option>Diretor de Unidade Escolar</option>
                                                                    <option>Diretor Depto Administrativo</option>
                                                                    <option>Diretor Depto de Acessibilidade e Mobilidade
                                                                        Urbana
                                                                    </option>
                                                                    <option>Economista</option>
                                                                    <option>Eletricista</option>
                                                                    <option>Eletricista de Automóveis</option>
                                                                    <option>Encarregado</option>
                                                                    <option>Enfermeiro</option>
                                                                    <option>Enfermeiro (Cedido)</option>
                                                                    <option>Enfermeiro 40 hs</option>
                                                                    <option>Enfermeiro II</option>
                                                                    <option>Enfermeiro III</option>
                                                                    <option>Enfermeiro Sanitarista</option>
                                                                    <option>Engenheiro Agrônomo</option>
                                                                    <option>Engenheiro Agrônomo (Cedido)</option>
                                                                    <option>Engenheiro Civil</option>
                                                                    <option>Engenheiro do Trabalho</option>
                                                                    <option>Engenheiro Sanitarista</option>
                                                                    <option>Estatístico</option>
                                                                    <option>Extensionista Rural (Cedido)</option>
                                                                    <option>Farmacêutico</option>
                                                                    <option>Farmacêutico II</option>
                                                                    <option>FG - Agente Administrativo</option>
                                                                    <option>FG - Assessor Contas e Controle</option>
                                                                    <option>FG - Assessor de Administração Financeira
                                                                    </option>
                                                                    <option>FG - Assessor de Administração Tributária
                                                                    </option>
                                                                    <option>FG - Assessor Técnico de Saúde</option>
                                                                    <option>FG - Assessor Técnico I</option>
                                                                    <option>FG - Assessor Técnico II</option>
                                                                    <option>FG - Assessor Técnico III</option>
                                                                    <option>FG - Assistente Adm. de Atos Oficiais
                                                                    </option>
                                                                    <option>FG - Assistente Executivo</option>
                                                                    <option>FG - Auxiliar Administrativo</option>
                                                                    <option>FG - Auxiliar de Adm. Geral</option>
                                                                    <option>FG - Auxiliar de Mediação e Conciliação
                                                                    </option>
                                                                    <option>FG - Chefe da Equipe de Enfermagem</option>
                                                                    <option>FG - Chefe de Atendimento</option>
                                                                    <option>FG - Chefe de Divisão</option>
                                                                    <option>FG - Chefe de Divisão Adm. de Sistema
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Arquivo</option>
                                                                    <option>FG - Chefe de Divisão Ben e Aux Assis
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Bol Fam e Cad U
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Cad e Estatíst
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Convênios</option>
                                                                    <option>FG - Chefe de Divisão de Contr</option>
                                                                    <option>FG - Chefe de Divisão de Estág</option>
                                                                    <option>FG - Chefe de Divisão de Ges de Pe</option>
                                                                    <option>FG - Chefe de Divisão de Infraestrutura
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão de Logis</option>
                                                                    <option>FG - Chefe de Divisão de Perícia Médica
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão de Proce</option>
                                                                    <option>FG - Chefe de Divisão de Processa</option>
                                                                    <option>FG - Chefe de Divisão de Proje</option>
                                                                    <option>FG - Chefe de Divisão de Qualificação
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão de Sup. Esc</option>
                                                                    <option>FG - Chefe de Divisão Diag P S Municipal
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Epidemiologia</option>
                                                                    <option>FG - Chefe de Divisão Eventos</option>
                                                                    <option>FG - Chefe de Divisão Farm Hosp e P S
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Faturamento</option>
                                                                    <option>FG - Chefe de Divisão Fiscalização Obras e
                                                                        Posturas
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Fiscalização
                                                                        Sanitária
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Fiscalização Trans e
                                                                        Tr
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Gestão Pessoas e Pat
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Gestão Processo
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Imagem</option>
                                                                    <option>FG - Chefe de Divisão Imunização</option>
                                                                    <option>FG - Chefe de Divisão Laboratório</option>
                                                                    <option>FG - Chefe de Divisão Lanç e Processa
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Licenciamento O
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Manutenção de
                                                                        Equipamentos
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Plan e Est Turi
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Plan Regulament
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Projeto de
                                                                        Engenharia
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Prop Pub Mob Ur
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Reg e Ben Servi
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Regulaçao Medic
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Saud Seg Amb de
                                                                    </option>
                                                                    <option>FG - Chefe de Divisão Suprimentos</option>
                                                                    <option>FG - Chefe de Divisão Vig Amb Saude T
                                                                    </option>
                                                                    <option>FG - Chefe Proc. Especializada</option>
                                                                    <option>FG - Condutor de Transporte Escolar</option>
                                                                    <option>FG - Coordenador</option>
                                                                    <option>FG - Coordenador de Planejamento</option>
                                                                    <option>FG - Coordenador de Programa de Saúde
                                                                    </option>
                                                                    <option>FG - Coordenador de Segmento</option>
                                                                    <option>FG - Coordenador de Trans. e Mobilidade
                                                                        Urbana
                                                                    </option>
                                                                    <option>FG - Coordenador Geral de Enfermagem
                                                                    </option>
                                                                    <option>FG - Diretor Adjunto</option>
                                                                    <option>FG - Diretor Centro Integ Convivência
                                                                    </option>
                                                                    <option>FG - Diretor de Creche</option>
                                                                    <option>FG - Diretor de Departamento</option>
                                                                    <option>FG - Diretor Depto - DESICNE</option>
                                                                    <option>FG - Diretor Depto Cen Com e Contr</option>
                                                                    <option>FG - Diretor Depto Cons Plan Ambie</option>
                                                                    <option>FG - Diretor Depto de Manutenção</option>
                                                                    <option>FG - Diretor Depto de Saúde Bucal</option>
                                                                    <option>FG - Diretor Depto de Trânsito</option>
                                                                    <option>FG - Diretor Depto Des Proj e Convênios
                                                                    </option>
                                                                    <option>FG - Diretor Depto Folha de Pagamento
                                                                    </option>
                                                                    <option>FG - Diretor Depto Licenc. Ambiental
                                                                    </option>
                                                                    <option>FG - Diretor Depto Op. Especiais</option>
                                                                    <option>FG - Diretor Depto Patrimônio e Serviços
                                                                        Gerais
                                                                    </option>
                                                                    <option>FG - Diretor Depto Programas de</option>
                                                                    <option>FG - Diretor Depto Protocolo e Arquivo
                                                                    </option>
                                                                    <option>FG - Diretor Depto Reg e Des de Pe</option>
                                                                    <option>FG - Diretor Depto Sup Tec Infr Dad</option>
                                                                    <option>FG - Diretor Depto Suprimentos e
                                                                        Almoxarifado
                                                                    </option>
                                                                    <option>FG - Diretor Escola - Tipo A</option>
                                                                    <option>FG - Diretor Escola - Tipo B</option>
                                                                    <option>FG - Diretor Escola - Tipo C</option>
                                                                    <option>FG - Diretor Escola - Tipo D</option>
                                                                    <option>FG - Diretor Escola - Tipo E</option>
                                                                    <option>FG - Diretor Escola - Tipo F</option>
                                                                    <option>FG - Diretor Escola - Tipo G</option>
                                                                    <option>FG - Diretor Geral Administrativo</option>
                                                                    <option>FG - Diretor Geral de Administração
                                                                        Tributária
                                                                    </option>
                                                                    <option>FG - Encarregado</option>
                                                                    <option>FG - Gerente de Adminiatração Financeira
                                                                    </option>
                                                                    <option>FG - Gerente de Adminiatração Tributária
                                                                    </option>
                                                                    <option>FG - Gerente de Administração Fazendária
                                                                    </option>
                                                                    <option>FG - Gerente de Atendimento e Protocolo
                                                                    </option>
                                                                    <option>FG - Gerente de Contas e Contr</option>
                                                                    <option>FG - Gerente do Depto de Suprimento</option>
                                                                    <option>FG - Gerente Financeiro do PRO</option>
                                                                    <option>FG - Gerente Unidade Saúde</option>
                                                                    <option>FG - Gerente Unidade Saúde Especial</option>
                                                                    <option>FG - Inspetor de Transporte</option>
                                                                    <option>FG - Inspetor I</option>
                                                                    <option>FG - Inspetor II</option>
                                                                    <option>FG - Membro Comissão Permanente de
                                                                        Licitação
                                                                    </option>
                                                                    <option>FG - Membro da Comissão Permanente de
                                                                        Licitação e Pregão
                                                                    </option>
                                                                    <option>FG - Membro Efetivo Comissão de Avaliação
                                                                    </option>
                                                                    <option>FG - Membro Vogal CPSIA</option>
                                                                    <option>FG - Procurador Substituto</option>
                                                                    <option>FG - Secretário da CPSIA</option>
                                                                    <option>FG - Subprocurador G. Adm. Jud</option>
                                                                    <option>FG - Superintendente Administr</option>
                                                                    <option>FG - Superintendente Depto Folha Pagamento
                                                                    </option>
                                                                    <option>FG - Superintendente Gest Ambi</option>
                                                                    <option>FG - Supervisor Análise e Cont</option>
                                                                    <option>FG - Supervisor do Hospital</option>
                                                                    <option>Fiscal de Meio Ambiente</option>
                                                                    <option>Fiscal de Obras e Posturas</option>
                                                                    <option>Fiscal de Obras e Posturas II</option>
                                                                    <option>Fiscal de Transporte</option>
                                                                    <option>Fiscal de Tributos</option>
                                                                    <option>Fiscal de Tributos II</option>
                                                                    <option>Fiscal Sanitário</option>
                                                                    <option>Fisioterapeuta</option>
                                                                    <option>Fisioterapeuta (Cedido)</option>
                                                                    <option>Fisioterapeuta II</option>
                                                                    <option>Fonoaudiólogo</option>
                                                                    <option>Fonoaudiólogo I</option>
                                                                    <option>Fotógrafo</option>
                                                                    <option>Gerente de Aterro Sanitário</option>
                                                                    <option>Gerente de Centro de Saúde</option>
                                                                    <option>Gerente de Projetos Sociais</option>
                                                                    <option>Gerente Programas Especiais</option>
                                                                    <option>Gerente Projetos Especiais</option>
                                                                    <option>Gerente Unidade Conservação</option>
                                                                    <option>Gerente Unidade Esportiva</option>
                                                                    <option>Guarda Municipal</option>
                                                                    <option>Guarda Sanitário</option>
                                                                    <option>Guarda Vida</option>
                                                                    <option>Inspetor de Polícia (Cedido)</option>
                                                                    <option>Instrutor de Informática</option>
                                                                    <option>Instrutor Língua Brasileira de Sinais I
                                                                    </option>
                                                                    <option>Instrutor Língua Brasileira de Sinais II
                                                                    </option>
                                                                    <option>Maqueiro</option>
                                                                    <option>Mecânico de Automóveis</option>
                                                                    <option>Médico - CAS</option>
                                                                    <option>Médico (Cedido)</option>
                                                                    <option>Médico Alergista</option>
                                                                    <option>Médico Anestesiologista</option>
                                                                    <option>Médico Anestesiologista II</option>
                                                                    <option>Médico Angiologista</option>
                                                                    <option>Médico Cardiologista</option>
                                                                    <option>Médico Cardiologista Ecografista</option>
                                                                    <option>Médico Cardiologista Ergometrista</option>
                                                                    <option>Médico Cirurgião Geral</option>
                                                                    <option>Médico Cirurgião Geral II</option>
                                                                    <option>Médico Cirurgião Pediatra</option>
                                                                    <option>Médico Clínico Geral</option>
                                                                    <option>Médico Clínico Geral II</option>
                                                                    <option>Médico de Esportes</option>
                                                                    <option>Médico de Família</option>
                                                                    <option>Médico Dermatologista</option>
                                                                    <option>Médico do Trabalho</option>
                                                                    <option>Médico Endocrinologista</option>
                                                                    <option>Médico Endocrinologista Pediatra</option>
                                                                    <option>Médico Fisiatra</option>
                                                                    <option>Médico Gastroenterologista</option>
                                                                    <option>Médico Geriatra</option>
                                                                    <option>Médico Ginecologista Obstetra</option>
                                                                    <option>Médico Ginecologista Obstetra II</option>
                                                                    <option>Médico Homeopata</option>
                                                                    <option>Médico Infectologista</option>
                                                                    <option>Médico Intensivista II</option>
                                                                    <option>Médico Neonatologista II</option>
                                                                    <option>Médico Neurologista</option>
                                                                    <option>Médico Neuropediatra</option>
                                                                    <option>Médico Oftalmologista</option>
                                                                    <option>Médico Oftalmologista II</option>
                                                                    <option>Médico Ortopedista</option>
                                                                    <option>Médico Ortopedista II</option>
                                                                    <option>Médico Otorrinolaringologista</option>
                                                                    <option>Médico Otorrinolaringologista II</option>
                                                                    <option>Médico Pediatra</option>
                                                                    <option>Médico Pediatra II</option>
                                                                    <option>Médico Psiquiatra</option>
                                                                    <option>Médico Psiquiatra II</option>
                                                                    <option>Médico Radiologista</option>
                                                                    <option>Médico Radiologista II</option>
                                                                    <option>Médico Reumatologista</option>
                                                                    <option>Médico Socorrista</option>
                                                                    <option>Médico Socorrista II</option>
                                                                    <option>Médico Ultrassonografista</option>
                                                                    <option>Médico Veterinario</option>
                                                                    <option>Merendeira - C.E.</option>
                                                                    <option>Monitor de Abrigo</option>
                                                                    <option>Monitor de Transporte Escolar</option>
                                                                    <option>Monitor Escolar</option>
                                                                    <option>Motorista</option>
                                                                    <option>Motorista (Cedido)</option>
                                                                    <option>Nutricionista</option>
                                                                    <option>Nutricionista II</option>
                                                                    <option>Nutricionista III</option>
                                                                    <option>Odontólogo</option>
                                                                    <option>Odontólogo - 40 Horas</option>
                                                                    <option>Odontólogo Buco Maxilo</option>
                                                                    <option>Odontólogo Endodontista</option>
                                                                    <option>Odontólogo II</option>
                                                                    <option>Odontólogo Odontopediatra</option>
                                                                    <option>Odontólogo Ortodontista</option>
                                                                    <option>Odontólogo Protesista</option>
                                                                    <option>Oficineiro</option>
                                                                    <option>Operador de Máquinas</option>
                                                                    <option>Orientador Social</option>
                                                                    <option>Orientador Social I</option>
                                                                    <option>Orientador Social II</option>
                                                                    <option>Pedagogo - C.E.</option>
                                                                    <option>Pedagogo - Mag. Disc. Pedagógico</option>
                                                                    <option>Pedagogo - Orientador Educacional</option>
                                                                    <option>Pedagogo - Orientador Pedagógico</option>
                                                                    <option>Pedagogo - Supervisor de Ensino</option>
                                                                    <option>Pedreiro</option>
                                                                    <option>Pintor</option>
                                                                    <option>Prefeito</option>
                                                                    <option>Procurador do Município</option>
                                                                    <option>Procurador Geral do Município</option>
                                                                    <option>Prof. Doc II AR (Cedido)</option>
                                                                    <option>Prof. Doc. II (Cedido)</option>
                                                                    <option>Professor - CAS</option>
                                                                    <option>Professor (Cedido)</option>
                                                                    <option>Professor A - 1 (Cedido)</option>
                                                                    <option>Professor A (Cedido)</option>
                                                                    <option>Professor A I - H (Cedido)</option>
                                                                    <option>Professor c/c/II (Cedido)</option>
                                                                    <option>Professor de Ciências - LC - C.E</option>
                                                                    <option>Professor de Ciências - LP</option>
                                                                    <option>Professor de Educação Artística</option>
                                                                    <option>Professor de Educação Artística - LP
                                                                    </option>
                                                                    <option>Professor de Educação Física - LP</option>
                                                                    <option>Professor de Geografia - LP</option>
                                                                    <option>Professor de História - LP</option>
                                                                    <option>Professor de Inglês - LP</option>
                                                                    <option>Professor de Matemática - LC - C</option>
                                                                    <option>Professor de Matemática - LP</option>
                                                                    <option>Professor de Português - LP</option>
                                                                    <option>Professor Docente II</option>
                                                                    <option>Professor I</option>
                                                                    <option>Professor I - 30 Horas</option>
                                                                    <option>Professor I - CAS</option>
                                                                    <option>Professor I - Ref B Nivel VI</option>
                                                                    <option>Professor IB3</option>
                                                                    <option>Professor IB5.1 (Cedido)</option>
                                                                    <option>Professor II - Atd Ed. Especial</option>
                                                                    <option>Professor II - Ed. Especial</option>
                                                                    <option>Professor II - Ed. Especial - Def.
                                                                        Auditivo
                                                                    </option>
                                                                    <option>Professor II - Ed. Especial - Def. Visual
                                                                    </option>
                                                                    <option>Professor II - Ensino Religioso</option>
                                                                    <option>Professor II - Espanhol</option>
                                                                    <option>Professor II - Filosofia</option>
                                                                    <option>Professor II - Física</option>
                                                                    <option>Professor II - LIBRAS</option>
                                                                    <option>Professor II - Química</option>
                                                                    <option>Professor II - Sociologia</option>
                                                                    <option>Professor II (Cedido)</option>
                                                                    <option>Professor III (Cedido)</option>
                                                                    <option>Professor MG-1A (Cedido)</option>
                                                                    <option>Professor Orientador Educacional</option>
                                                                    <option>Professor Orientador Pedagógico</option>
                                                                    <option>Professor Supervisor de Ensino</option>
                                                                    <option>Programador</option>
                                                                    <option>Psicólogo</option>
                                                                    <option>Psicólogo - 30 Horas</option>
                                                                    <option>Psicólogo (Cedido)</option>
                                                                    <option>Psicopedagogo</option>
                                                                    <option>Psicopedagogo (Cedido)</option>
                                                                    <option>Recreador (Cedido)</option>
                                                                    <option>Secretário Escolar</option>
                                                                    <option>Secretário Executivo</option>
                                                                    <option>Secretário Geral</option>
                                                                    <option>Secretário Mun. de Administração</option>
                                                                    <option>Secretário Mun. de Bem Estar Social</option>
                                                                    <option>Secretario Mun. de Controle Interno</option>
                                                                    <option>Secretário Mun. de Fazenda</option>
                                                                    <option>Secretário Mun. de Saúde</option>
                                                                    <option>Secretário Mun. de Segurança Pública
                                                                    </option>
                                                                    <option>Secretário Mun. de Transportes Públicos
                                                                    </option>
                                                                    <option>Secretário Mun. de Turismo</option>
                                                                    <option>Secretário Mun. Gestão Pública</option>
                                                                    <option>Selecione</option
                                                                    </option>
                                                                    <option>Serralheiro</option>
                                                                    <option>Servente</option>
                                                                    <option>Subsecretário Mun. de Administração de
                                                                        Obras
                                                                    </option>
                                                                    <option>Subsecretário Mun. de Desenvolvimento
                                                                        Econômico
                                                                    </option>
                                                                    <option>Subsecretário Mun. de Esporte e Lazer
                                                                    </option>
                                                                    <option>Superintendente Gest Ambi</option>
                                                                    <option>Supervisor de Limpeza Urbana</option>
                                                                    <option>Supervisor de Serviços Obras Públicas
                                                                    </option>
                                                                    <option>Supervisor Serviços Publi</option>
                                                                    <option>Técnico Agrícola</option>
                                                                    <option>Técnico de Aparelho Gessado</option>
                                                                    <option>Técnico de Laboratório</option>
                                                                    <option>Técnico de Laboratório (Cedido)</option>
                                                                    <option>Técnico de Serv. de Assistência</option>
                                                                    <option>Técnico em Agropecuária (Cedido)</option>
                                                                    <option>Técnico em Contabilidade</option>
                                                                    <option>Técnico em Contabilidade - CAS</option>
                                                                    <option>Técnico em Edificações</option>
                                                                    <option>Técnico em Edificações (Cedido)</option>
                                                                    <option>Técnico em Enfermagem</option>
                                                                    <option>Técnico em Enfermagem do Trabalho</option>
                                                                    <option>Técnico em Higiene Dental</option>
                                                                    <option>Técnico em Higiene Dental (Cedido)</option>
                                                                    <option>Técnico em Informática</option>
                                                                    <option>Técnico em Instrumento Cirúrgico</option>
                                                                    <option>Técnico em Orçamento Civil</option>
                                                                    <option>Técnico em Radiologia</option>
                                                                    <option>Técnico em Radiologia Especializada</option>
                                                                    <option>Técnico em Seguranca Trabalho</option>
                                                                    <option>Técnico em Turismo</option>
                                                                    <option>Técnico Químico</option>
                                                                    <option>Técnico Visa</option>
                                                                    <option>Telefonista</option>
                                                                    <option>Terapeuta Ocupacional</option>
                                                                    <option>Tesoureiro</option>
                                                                    <option>Topógrafo</option>
                                                                    <option>Tradutor Interprete de LIBRAS</option>
                                                                    <option>Vice-prefeito</option>
                                                                    <option>Vigilante</option>
                                                                    <option>Vigilante Patrimonial</option>
                                                                    <option>Web Designer</option>

                                                                    <!-- /options cargo -->

                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /form Pessoa -->
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <!-- enderecoContainer -->
                                    <div id="enderecoContainer">

                                        <div class="enderecoItem panel panel-flat">

                                            <div class="panel-heading">
                                                <h4 class="panel-title">Endereço</h4>
                                            </div>

                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3 inputBlock">
                                                            <label>Tipo de Endereço</label>
                                                            <select name="tipoEndereco" id="tipoEndereco" class="select"
                                                                    required data-type="string">
                                                                <option selected="" disabled="">Selecione
                                                                </option>
                                                                <option value="Residencial">Residencial
                                                                </option>
                                                                <option value="Comercial">Comercial</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-3 inputBlock">
                                                            <label>CEP</label>
                                                            <input name="cep" id="cep" type="text"
                                                                   class="form-control" required
                                                                   data-type="string"
                                                                   data-mask="99.999-999">
                                                        </div>
                                                        <div class="col-md-6 mt-20">
                                                            <button name="btnFillEndereco"
                                                                    id="btnFillEndereco"
                                                                    class="btn bg-primary btn-sm btn-labeled btn-labeled-right heading-btn">
                                                                Preencher <b><i
                                                                            class="icon-mailbox"></i></b>
                                                            </button>
                                                            <button name="btnBuscaEndereco"
                                                                    id="btnBuscaEndereco"
                                                                    data-toggle="modal"
                                                                    data-target="#modalBuscaCEP"
                                                                    class="btn bg-primary btn-sm btn-labeled btn-labeled-right heading-btn">
                                                                Buscar CEP <b>
                                                                    <i class="icon-search4"></i></b>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-4 inputBlock">
                                                            <label>País</label>
                                                            <select name="pais" id="pais" class="select"
                                                                    data-live-search="true" required
                                                                    data-type="string">
                                                                <option>Selecione</option>
                                                                <option selected>Brasil</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 inputBlock">
                                                            <label>Estado</label>
                                                            <select name="estado" id="estado" class="select"
                                                                    data-live-search="true" required
                                                                    data-type="string">
                                                                <option>Selecione</option>
                                                                <option selected>Rio de Janeiro</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4 inputBlock">
                                                            <label>Municipio</label>
                                                            <select name="municipio" id="municipio" class="select"
                                                                    data-live-search="true" required
                                                                    data-type="string">
                                                                <option>Selecione</option>
                                                                <option selected>Rio das Ostras</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-3 inputBlock">
                                                            <label>Tipo de Logradouro</label>
                                                            <select name="tipoLogradouro" id="tipoLogradouro"
                                                                    class="select"
                                                                    required data-type="string">
                                                                <option value="" selected="" disabled="">
                                                                    Selecione
                                                                </option>
                                                                <option value="Rua">Rua</option>
                                                                <option value="Avenida">Avenida</option>
                                                                <option value="Beco">Beco</option>
                                                                <option value="Estrada">Estrada</option>
                                                                <option value="Praça">Praça</option>
                                                                <option value="Rodovia">Rodovia</option>
                                                                <option value="Travessa">Travessa</option>
                                                                <option value="Largo">Largo</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 inputBlock">
                                                            <label>Logradouro</label>
                                                            <input name="logradouro"
                                                                   id="logradouro"
                                                                   type="text"
                                                                   class="form-control" required
                                                                   data-type="string">
                                                        </div>
                                                        <div class="col-md-3 inputBlock">
                                                            <label>Número</label>
                                                            <input name="numero"
                                                                   id="numero"
                                                                   type="text"
                                                                   class="form-control" required
                                                                   data-type="string">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-6 inputBlock">
                                                            <label>Bairro</label>
                                                            <input name="bairro" id="bairro" type="text"
                                                                   class="form-control" required
                                                                   data-type="string">
                                                        </div>
                                                        <div class="col-md-6 inputBlock">
                                                            <label>Complemento</label>
                                                            <input name="complemento" id="complemento" type="text"
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="validacao" value="false"/>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /enderecoContainer -->
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="panel panel-flat">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Questionário</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="display-block text-semibold">
                                                        1. O imóvel (casa, apartamento ou
                                                        terreno) onde reside é: </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div class="inputBlock" data-label="Imóvel onde reside é">
                                                        Próprio?
                                                        <label class="jRadio">
                                                            <input type="radio" name="possuiImovelProprio"
                                                                   value="true" data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            Sim
                                                        </label>
                                                        <label class="jRadio">
                                                            <input type="radio" name="possuiImovelProprio"
                                                                   value="false" data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            Não
                                                        </label>
                                                    </div>

                                                    <div class="inputBlock" data-label="Ocupação Irregular">
                                                        Ocupação Irregular?
                                                        <label class="jRadio">
                                                            <input type="radio" name="moraOcupacaoIrregular"
                                                                   value="true" data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            Sim
                                                        </label>
                                                        <label class="jRadio">
                                                            <input type="radio" name="moraOcupacaoIrregular"
                                                                   value="false" data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            Não
                                                        </label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="display-block text-semibold">2. Reside em área de
                                                        risco definida pela Defesa Civil? </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 form-group inputBlock"
                                                     data-label="Reside em área de risco">
                                                    <label class="jRadio">
                                                        <input type="radio" name="resideAreaRisco" value="true"
                                                               data-type="radio" required>
                                                        <span class="checkmark"></span>
                                                        Sim
                                                    </label>
                                                    <label class="jRadio">
                                                        <input type="radio" name="resideAreaRisco" value="false"
                                                               data-type="radio" required>
                                                        <span class="checkmark"></span>
                                                        Não
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="display-block text-semibold">3. É servidor da
                                                        Prefeitura de Rio
                                                        das Ostras há quanto tempo? </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group inputBlock" data-label="Tempo de serviço">
                                                        <label class="jRadio">
                                                            <input type="radio" name="tempoServicoServidor" value="<5"
                                                                   data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            Menos de 5 anos
                                                        </label>
                                                        <label class="jRadio">
                                                            <input type="radio" name="tempoServicoServidor" value="5-10"
                                                                   data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            5 a 10 anos
                                                        </label>
                                                        <label class="jRadio">
                                                            <input type="radio" name="tempoServicoServidor" value=">10"
                                                                   data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            Mais de 10 anos
                                                        </label>
                                                        <label class="jRadio">
                                                            <input type="radio" name="tempoServicoServidor"
                                                                   value="aposentado"
                                                                   data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            Aposentado
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="display-block text-semibold">4. Possui mais de uma
                                                        matrícula ativa/desativada? </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 form-group inputBlock"
                                                     data-label="Matrículas">
                                                    <label class="jRadio">
                                                        <input type="radio" name="possuiMaisMatriculas"
                                                               value="true" data-type="radio" required>
                                                        <span class="checkmark"></span>
                                                        Sim
                                                    </label>
                                                    <label class="jRadio">
                                                        <input type="radio" name="possuiMaisMatriculas"
                                                               value="false" data-type="radio" required>
                                                        <span class="checkmark"></span>
                                                        Não
                                                    </label>
                                                </div>
                                                <div class="col-md-4 form-group inputBlock">
                                                    <label>Matrículas</label>
                                                    <input name="matriculas" type="text" disabled
                                                           class="form-control"
                                                           data-type="string"
                                                           placeholder='Se selecionou "sim", digite suas matrículas separadas por vírgula.'>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="display-block text-semibold">5. Já foi comtemplado
                                                        em algum
                                                        Programa Habitacional? </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group inputBlock"
                                                         data-label="Programa Habitacional">
                                                        <label class="jRadio">
                                                            <input type="radio" name="participouProgramaHabitacional"
                                                                   data-type="radio" required value="true">
                                                            <span class="checkmark"></span>
                                                            Sim
                                                        </label>
                                                        <label class="jRadio">
                                                            <input type="radio" name="participouProgramaHabitacional"
                                                                   data-type="radio" required value="false">
                                                            <span class="checkmark"></span>
                                                            Não
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="display-block text-semibold">
                                                        6. Qual sua renda familiar?
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group inputBlock" data-label="Renda familiar">
                                                        <label class="jRadio">
                                                            <input type="radio" name="rendaFamiliar"
                                                                   data-type="radio" required value="1.5">
                                                            <span class="checkmark"></span>
                                                            de até 1,5 salário mínimo
                                                        </label>
                                                        <label class="jRadio">
                                                            <input type="radio" name="rendaFamiliar"
                                                                   data-type="radio" required value="2">
                                                            <span class="checkmark"></span>
                                                            de até 2 salários mínimos
                                                        </label>
                                                        <label class="jRadio">
                                                            <input type="radio" name="rendaFamiliar"
                                                                   data-type="radio" required value="3">
                                                            <span class="checkmark"></span>
                                                            de até 3 salários mínimos
                                                        </label>
                                                        <label class="jRadio">
                                                            <input type="radio" name="rendaFamiliar"
                                                                   data-type="radio" required value="4">
                                                            <span class="checkmark"></span>
                                                            de até 4 salários mínimos
                                                        </label>
                                                        <label class="jRadio">
                                                            <input type="radio" name="rendaFamiliar"
                                                                   data-type="radio" required value="5">
                                                            <span class="checkmark"></span>
                                                            de até 5 salários mínimos
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5> Núcleo familiar: </h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h6 class="display-block text-semibold">
                                                        8. Possui algum tipo de deficiência?
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1 form-group inputBlock"
                                                     data-label="Possui deficiência">
                                                    <label class="jRadio">
                                                        <input type="radio" name="possuiDeficiencia"
                                                               value="true" data-type="radio" required>
                                                        <span class="checkmark"></span>
                                                        Sim
                                                    </label>
                                                    <label class="jRadio">
                                                        <input type="radio" name="possuiDeficiencia"
                                                               value="false" data-type="radio" required>
                                                        <span class="checkmark"></span>
                                                        Não
                                                    </label>
                                                </div>
                                                <div class="col-md-4 form-group inputBlock">
                                                    <label>Nome deficiência</label>
                                                    <input name="nomeDeficiencia" type="text" disabled
                                                           class="form-control" data-type="string"
                                                           placeholder='Se selecionou "sim", digite qual deficiência você possui.'>

                                                </div>
                                                <div class="col-md-2 form-group inputBlock">
                                                    <label>Codigo deficiência</label>
                                                    <input name="codigoDeficiencia" type="text" disabled
                                                           class="form-control" data-type="string"
                                                           placeholder='Digite o Código CID.'>

                                                </div>
                                                <div class="col-md-1 ">
                                                    <br>
                                                    <a class="btn bg-primary btn-sm "
                                                       href="TabelaCodigosdoCID-10.pdf" target="_blank">Codigos</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="col-md-12">
                                                        <h6 class="display-block text-semibold">
                                                            9. Algum membro do grupo familiar possui
                                                            deficiência? </h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1 form-group inputBlock"
                                                         data-label="Possui deficiência">
                                                        <label class="jRadio">
                                                            <input type="radio" name="membroFamiliaPossuiDeficiencia"
                                                                   value="true" data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            Sim
                                                        </label>

                                                        <label class="jRadio">
                                                            <input type="radio" name="membroFamiliaPossuiDeficiencia"
                                                                   value="false" data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            Não
                                                        </label>
                                                    </div>

                                                    <div class="col-md-3 form-group inputBlock">
                                                        <label>Nome Deficiencia</label>
                                                        <input name="membroFamiliaNomeDeficiencia" type="text"
                                                               class="form-control" disabled
                                                               data-type="string"
                                                               placeholder='Se selecionou "sim", digite qual deficiência.'>

                                                    </div>
                                                    <div class="col-md-3 form-group inputBlock">
                                                        <label>Codigo Deficiencia</label>
                                                        <input name="membroFamiliaCodigoDeficiencia" type="text"
                                                               class="form-control" disabled
                                                               data-type="string"
                                                               placeholder='Digite o Código CID.'>

                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h6 class="display-block text-semibold">10. Possui alguma
                                                            doença crônica na
                                                            família (diabetes, hipertensão, cardíacas, etc)? </h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-1 form-group inputBlock">
                                                        <label class="jRadio">
                                                            <input type="radio" name="possuiDoencaFamilia"
                                                                   value="true" data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            Sim
                                                        </label>
                                                        <label class="jRadio">
                                                            <input type="radio" name="possuiDoencaFamilia"
                                                                   value="false" data-type="radio" required>
                                                            <span class="checkmark"></span>
                                                            Não
                                                        </label>
                                                    </div>

                                                    <div class="col-md-4 form-group inputBlock">
                                                        <label>Digite qual doença</label>
                                                        <input name="nomeDoencaFamilia" type="text"
                                                               disabled
                                                               class="form-control" data-type="string"
                                                               placeholder='Se selecionou "sim", digite qual doença.'>

                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button id="btnSave"
                                                                class="btn bg-primary btn-sm heading-btn legitRipple pull-right">
                                                            Finalizar inscrição
                                                        </button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- /content area -->

                        </div>

                    </div>
                    <!-- /main content -->


                    <!-- /CONTEUDO -->

                </div>
                <!-- /page content -->
                <!-- Footer -->
                <div class="footer text-muted">
                </div>
                <!-- /footer -->
            </div>
            <!-- /page container -->
        </div>
    </div>


    <!-- modalBuscaCEP -->
    <div id="modalBuscaCEP" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-large">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h6 class="modal-title">Busca CEP</h6>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Estado</label>
                                <select id="selectUfBuscaCEP" name="selectUfBuscaCEP" class="form-control">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Municipio</label>
                                <select id="selectMunicipioBuscaCEP" name="selectMunicipioBuscaCEP"
                                        class="form-control">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Bairro</label>
                                <input id="inputBairroBuscaCEP" name="inputBairroBuscaCEP" type="text"
                                       class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label>Logradouro</label>
                                <input id="inputLogradouroBuscaCEP" name="inputLogradouroBuscaCEP" type="text"
                                       class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button id="btnBuscarCEPEnd" type="button"
                                class="btn bg-blue btn-sm btn-labeled btn-labeled-right heading-btn">
                            Procurar<b><i class="icon-search4"></i></b>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="modernDataTable">
                                <table id="tableListCEPCorreios" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Tipo</th>
                                        <th>Logradouro</th>
                                        <th>Complemento</th>
                                        <th>Bairro</th>
                                        <th>Localidade</th>
                                        <th>UF</th>
                                        <th>CEP</th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modalBuscaCEP -->

    <!-- modal aviso -->
    <div id="modalAviso" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-large">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h6 class="modal-title">Busca CEP</h6>
                </div>
                <div class="modal-body">
                   <p>Este cadastro estara disponível do dia 21/01/2019 ate o dia 01/02/2019.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal aviso -->


</body>
</html>