<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciente - Jubarte - Prefeitura Municipal de Rio das Ostras - RJ</title>

    <!-- ESTILO LIMITLESS -->
    <link href="/cdn/Assets/fonts/material-icons/material-icons.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Assets/fonts/roboto/roboto.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/core.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/components.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Vendor/limitless/material/css/colors.css" rel="stylesheet" type="text/css">
    <!-- ESTILO LIMITLESS -->

    <!-- JS CORE LIMITLESS -->
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript"
            src="/cdn/Vendor/limitless/material/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

    <!-- /JS CORE LIMITLESS -->

    <script type="text/javascript"
            src="/cdn/Vendor/limitless/material/js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/plugins/notifications/jgrowl.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/limitless/material/js/plugins/ui/ripple.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/bootstrap-select-1.12.4/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/bootstrap-select-1.12.4/defaults-pt_BR.min.js"></script>

    <!-- DEPENDEICIAS JUBARTE -->
    <link href="/cdn/Assets/css/jSwitch.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Assets/css/jubarteStyle.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Assets/css/modernDataTable.css" rel="stylesheet" type="text/css">
    <link href="/cdn/Assets/css/ModernTreeView.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="/cdn/Vendor/moment/2.19.1/moment.js"></script>
    <script type="text/javascript" src="/cdn/Vendor/moment/2.19.1/locale/pt-br.js"></script>

    <!-- DEPENDECIAS DA VIEW MODEL -->
    <script type="text/javascript" src="/cdn/utils/utils.js"></script>
    <script type="text/javascript" src="/cdn/utils/jubarte.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModalAPI.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModernBlockUI.js"></script>
    <script type="text/javascript" src="/cdn/utils/LoaderAPI.js"></script>
    <script type="text/javascript" src="/cdn/utils/RESTClient.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModernDataTable.js"></script>
    <script type="text/javascript" src="/cdn/utils/ModernTreeView.js"></script>

    <!-- VIEW MODEL -->
    <script type="text/javascript" src="ViewModel/Constants.js"></script>
    <script type="text/javascript" src="ViewModel/GerenciaFichaViewModel.js"></script>

</head>
<body class="sidebar-detached-hidden">
<div class="sidebar-xs has-detached-right">
    <!-- Main content -->
    <div class="containerInsideIframe">
        <!-- Page container -->
        <div class="page-container">

            <!-- Page content -->
            <div class="page-content">

                <!-- Main content -->
                <div class="content-wrapper">

                    <!-- Page header -->
                    <div class="customPageHeader">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-21">
                                <div class="row ">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                        <h4>
                                            <i class="icon-grid position-left"></i>
                                            <span class="text-semibold">Gerencia Fichas Minha Casa Minha Vida</span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <ul class="breadcrumb">
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /page header -->

                    <!-- Content area -->
                    <div class="content">

                        <div class="panel panel-body no-padding">
                            <!-- form filtros -->
                            <div class="row p-20">
                                <div class="col-md-3 ">
                                    <label><span class="text-semibold">Pesquisar</span></label>
                                    <div class="has-feedback has-feedback-left">
                                        <input id="inputFiltroSearch" type="text" class="form-control"
                                               placeholder="digite algo a ser pesquisado..." value="">
                                        <div class="form-control-feedback">
                                            <i class="icon-search4 text-size-base text-muted"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 ">
                                    <div class="form-group mb-5">
                                        <label><span class="text-semibold">Renda Familiar</span></label>
                                        <div class="multi-select-full">
                                            <select id="selectFiltroRenda" class="multiselect-select-all-filtering"
                                                    multiple="multiple">
                                                <option value="1.5">1,5 salário</option>
                                                <option value="2">2 salário</option>
                                                <option value="3">3 salário</option>
                                                <option value="4">4 salário</option>
                                                <option value="5">5 salário</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 ">
                                    <div class="form-group mb-5">
                                        <label>
                                            <span class="text-semibold">Anos de Serviço</span>
                                        </label>
                                        <div class="multi-select-full">
                                            <select id="selectFiltroTempoServico"
                                                    class="multiselect-select-all-filtering" multiple="multiple"
                                                    style="display: none;">
                                                <option value="<5">menos de 5</option>
                                                <option value="5-10">5 a 10</option>
                                                <option value=">10">mais de 10</option>
                                                <option value="aposentado">Aposentado</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 ">
                                    <div class="form-group mb-5">
                                        <label>
                                            <span class="text-semibold"></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-3  text-right">
                                    <div class="form-group mb-5">
                                        <button id="btnBuscar" class="btn bg-orange btn-icon legitRipple"
                                                title="Buscar">
                                            <i class="icon-search4"></i>
                                        </button>
                                        <button id="btnLimparFiltro" class="btn bg-default btn-icon legitRipple"
                                                title="Limpar filtros">
                                            <i class="icon-trash"></i>
                                        </button>
                                        <button id="btnReload" class="btn bg-default btn-icon legitRipple"
                                                title="Recarregar">
                                            <i class="icon-reload-alt"></i>
                                        </button>
                                        <button id="btnImprimir" class="btn bg-default btn-icon legitRipple"
                                                title="Imprimir">
                                            <i class="icon-printer"></i>
                                        </button>
                                        <button id="btnDownload" class="btn bg-default btn-icon legitRipple"
                                                title="Baixar como XLSX">
                                            <i class="icon-file-excel"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                            <div class="row p-20">
                                <div class="col-md-1">
                                    Ocupação Irregular
                                </div>
                                <div class="col-md-1">
                                    <div class="jSwitch jSwitchAjustes">
                                        <label>
                                            <input id="filtroMoraOcupacaoIrregular" name="" type="checkbox"
                                                   value="null">
                                            <span class="jThumb"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    Imóvel Próprio
                                </div>
                                <div class="col-md-1">
                                    <div class="jSwitch jSwitchAjustes">
                                        <label>
                                            <input id="filtroPossuiImovelProprio" name="" type="checkbox" value="null">
                                            <span class="jThumb"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    Área de Risco
                                </div>
                                <div class="col-md-1">
                                    <div class="jSwitch jSwitchAjustes">
                                        <label>
                                            <input id="filtroResideAreaRisco" name="" type="checkbox" value="null">
                                            <span class="jThumb"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    Possui deficiência
                                </div>
                                <div class="col-md-1">
                                    <div class="jSwitch jSwitchAjustes">
                                        <label>
                                            <input id="filtroDeficiencia" name="" type="checkbox" value="null">
                                            <span class="jThumb"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    Possui doença na família
                                </div>
                                <div class="col-md-1">
                                    <div class="jSwitch jSwitchAjustes">
                                        <label>
                                            <input id="filtroDoenca" name="" type="checkbox" value="null">
                                            <span class="jThumb"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    Possui mais de uma matrícula
                                </div>
                                <div class="col-md-1">
                                    <div class="jSwitch jSwitchAjustes">
                                        <label>
                                            <input id="filtroMatricula" name="" type="checkbox" value="null">
                                            <span class="jThumb"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- /form filtros -->
                            <!-- tabela lista solicitações -->
                            <div class="modernDataTable">
                                <table id="tableListFichas" class="tableFixPadding"
                                       style="overflow: auto;overflow-y:scroll;display: block;width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>CPF</th>
                                        <th>Nome</th>
                                        <th>Nasc.</th>
                                        <th>Est. Civil</th>
                                        <th>Tel.</th>
                                        <th>Lotação</th>
                                        <th>Cargo</th>
                                        <th>Bairro</th>

                                        <th>Imo. Proprio</th>
                                        <th>Ocupa. Irregular</th>
                                        <th>Ar. Risco</th>
                                        <th>Tempo Ser.</th>
                                        <th>Renda</th>
                                        <th>Deficie.</th>
                                        <th>Doença</th>
                                        <th>Matric.</th>
                                    </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- /content area -->

                </div>
                <!-- /main content -->


            </div>
            <!-- /page content -->

            <!-- Footer -->
            <div class="footer text-muted"></div>
            <!-- /footer -->

        </div>
        <!-- /page container -->
    </div>
</div>


<!-- modal detalhe -->
<div id="modalDetalhe" class="modal fade" tabindex="-1">
    <div class="modal-dialog-full">
        <div class="modal-content-full">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Detalhe</h6>
            </div>
            <div class="modal-body">
                <!-- corpo modal  -->

                <div class="row">
                    <div class="col-md-12">

                        <div class="panel-heading">
                            <h4 class="panel-title">Informações Pessoais</h4>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 inputBlock">
                                            <label>CPF</label>
                                            <span id="cpf" class="form-control"></span>
                                        </div>
                                        <div class="col-md-6 inputBlock">
                                            <label>Nome Completo</label>
                                            <span id="nome" class="form-control"></span>
                                        </div>
                                        <div class="col-md-3 inputBlock">
                                            <label>Data de Nascimento</label>
                                            <span id="dataNascimento" class="form-control"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 inputBlock">
                                            <label>Estado Civil</label>
                                            <span id="estadoCivil" class="form-control">
                                                    </span>
                                        </div>
                                        <div class="col-md-5 inputBlock">
                                            <label>E-mail</label>
                                            <span id="email" class="form-control"></span>
                                        </div>
                                        <div class="col-md-2 inputBlock">
                                            <label>Tipo</label>
                                            <span id="tipoTelefone" class="form-control">

                                                    </span>
                                        </div>
                                        <div class="col-md-2 inputBlock">
                                            <label>Telefone</label>
                                            <span id="telefone" class="form-control"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6 inputBlock">
                                            <label>Lotação Atual</label>
                                            <span id="lotacao" class="form-control"></span>
                                        </div>
                                        <div class="col-md-6 inputBlock">
                                            <label>Cargo Efetivo</label>
                                            <span id="cargo" class="form-control">   </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="panel-heading">
                            <h4 class="panel-title">Endereço</h4>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 inputBlock">
                                    <label>Tipo de Endereço</label>
                                    <span id="tipoEndereco" class="form-control">
                                                </span>
                                </div>
                                <div class="col-md-3 inputBlock">
                                    <label>CEP</label>
                                    <span id="cep" class="form-control"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4 inputBlock">
                                    <label>País</label>
                                    <span id="pais" class="form-control"> </span>
                                </div>
                                <div class="col-md-4 inputBlock">
                                    <label>Estado</label>
                                    <span id="estado" class="form-control"> </span>
                                </div>
                                <div class="col-md-4 inputBlock">
                                    <label>Municipio</label>
                                    <span id="municipio" class="form-control"> </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 inputBlock">
                                    <label>Tipo de Logradouro</label>
                                    <span id="tipoLogradouro" class="form-control">
                                    </span>
                                </div>
                                <div class="col-md-6 inputBlock">
                                    <label>Logradouro</label>
                                    <span id="logradouro" class="form-control"></span>
                                </div>
                                <div class="col-md-3 inputBlock">
                                    <label>Número</label>
                                    <span id="numero" class="form-control"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 inputBlock">
                                    <label>Bairro</label>
                                    <span id="bairro" class="form-control"></span>
                                </div>
                                <div class="col-md-6 inputBlock">
                                    <label>Complemento</label>
                                    <span id="complemento" class="form-control"></span>
                                </div>
                            </div>
                        </div>

                        <div class="panel-heading">
                            <h4 class="panel-title">Questionário</h4>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="display-block text-semibold">
                                    1. O imóvel (casa, apartamento ou
                                    terreno) onde reside é: </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="inputBlock">
                                    Próprio?
                                    <span id="possuiImovelProprio"></span>
                                </div>

                                <div class="inputBlock">
                                    Ocupação Irregular?
                                    <span id="moraOcupacaoIrregular"></span>
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
                            <div class="col-md-12 form-group inputBlock">
                                <span id="resideAreaRisco"></span>
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
                                <div class="form-group inputBlock">
                                    <span id="tempoServicoServidor"></span>
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
                            <div class="col-md-1 form-group inputBlock">

                                <span id="possuiMaisMatriculas"></span>

                            </div>
                            <div class="col-md-4 form-group inputBlock">
                                <label>Matrículas</label>
                                <span id="matriculas" class="form-control"></span>
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
                                <div class="form-group inputBlock">
                                    <span id="participouProgramaHabitacional"></span>
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
                                <div class="form-group inputBlock">
                                    <span id="rendaFamiliar"></span>
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
                            >
                                <span id="possuiDeficiencia"></span>
                            </div>
                            <div class="col-md-4 form-group inputBlock">
                                <label>Nome deficiência</label>
                                <span id="nomeDeficiencia" class="form-control"></span>

                            </div>
                            <div class="col-md-2 form-group inputBlock">
                                <label>Codigo deficiência</label>
                                <span id="codigoDeficiencia" class="form-control"></span>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h6 class="display-block text-semibold">
                                    9. Algum membro do grupo familiar possui
                                    deficiência? </h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1 form-group inputBlock"
                            >
                                <span id="membroFamiliaPossuiDeficiencia" class="form-control"></span>

                            </div>

                            <div class="col-md-3 form-group inputBlock">
                                <label>Nome Deficiencia</label>
                                <span id="membroFamiliaNomeDeficiencia" class="form-control"></span>

                            </div>
                            <div class="col-md-3 form-group inputBlock">
                                <label>Codigo Deficiencia</label>
                                <span id="membroFamiliaCodigoDeficiencia" class="form-control"></span>

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
                                <span id="possuiDoencaFamilia" class="form-control"></span>
                            </div>

                            <div class="col-md-4 form-group inputBlock">
                                <label>Digite qual doença</label>
                                <span id="nomeDoencaFamilia" class="form-control"></span>
                            </div>

                        </div>
                    </div>
                    <!-- /corpo modal  -->
                </div>
            </div>
        </div>
        <!-- /modal detalhe -->
    </div>
</div>

</body>
</html>