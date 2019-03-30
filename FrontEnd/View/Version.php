<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jubarte - Prefeitura Municipal de Rio das Ostras - RJ</title>

    <!-- ESTILO LIMITLESS -->
    <link href="https://jubarte.riodasostras.rj.gov.br/cdn/Assets/fonts/material-icons/material-icons.css" rel="stylesheet">
    <link href="https://jubarte.riodasostras.rj.gov.br/cdn/Assets/fonts/roboto/roboto.css" rel="stylesheet" type="text/css">
    <link href="https://jubarte.riodasostras.rj.gov.br/cdn/Vendor/limitless/material/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="https://jubarte.riodasostras.rj.gov.br/cdn/Vendor/limitless/material/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="https://jubarte.riodasostras.rj.gov.br/cdn/Vendor/limitless/material/css/core.css" rel="stylesheet" type="text/css">
    <link href="https://jubarte.riodasostras.rj.gov.br/cdn/Vendor/limitless/material/css/components.css" rel="stylesheet" type="text/css">
    <link href="https://jubarte.riodasostras.rj.gov.br/cdn/Vendor/limitless/material/css/colors.css" rel="stylesheet" type="text/css">
    <!-- /ESTILO LIMITLESS -->

    <!-- JS CORE LIMITLESS -->
    <script type="text/javascript" src="https://jubarte.riodasostras.rj.gov.br/cdn/Vendor/limitless/material/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="https://jubarte.riodasostras.rj.gov.br/cdn/Vendor/limitless/material/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://jubarte.riodasostras.rj.gov.br/cdn/Vendor/limitless/material/js/plugins/notifications/jgrowl.min.js"></script>
    <!-- /JS CORE LIMITLESS -->

    <!-- DEPENDEICIAS JUBARTE -->
    <link href="https://jubarte.riodasostras.rj.gov.br/cdn/Assets/css/jubarteStyle.css" rel="stylesheet" type="text/css">

    <!-- DEPENDECIAS DA VIEW MODEL -->
    <script type="text/javascript" src="https://jubarte.riodasostras.rj.gov.br/cdn/utils/utils.js"></script>
    <script type="text/javascript" src="https://jubarte.riodasostras.rj.gov.br/cdn/utils/ModernBlockUI.js"></script>
    <script type="text/javascript" src="https://jubarte.riodasostras.rj.gov.br/cdn/utils/jubarte.js"></script>
    <script type="text/javascript" src="https://jubarte.riodasostras.rj.gov.br/cdn/utils/ModalAPI.js"></script>
    <script type="text/javascript" src="https://jubarte.riodasostras.rj.gov.br/cdn/utils/LoaderAPI.js"></script>
    <script type="text/javascript" src="https://jubarte.riodasostras.rj.gov.br/cdn/utils/RESTClient.js"></script>

    <!-- VIEW MODEL -->
    <script>

$(document).ready(function () {
    allTasks()
})

// ROW PARA EXIBIR NA TIMELINE
const htmlTask = (itemTask) => {
    let Html = `

<div class="timeline-row">
    <div class="timeline-icon">
        <div class="bg-blue">
            <i class="icon-hammer"></i>
        </div>
    </div>

    <div class="panel panel-flat timeline-content">
        <div class="panel-heading">
            <h6 class="panel-title">${itemTask.title}</h6>
            <div class="heading-elements">
                <span class="heading-text"><i class="icon-history position-left text-success"></i> Atualização: ${itemTask.updated_at}</span>
            </div>
        </div>

        <div class="panel-body">
            <p>${itemTask.text}</p>
        </div>
    </div>
</div>
`

    return Html
}

// CONSUMINDO O WEBSERVICE PARA LISTAR AS TASKS
const allTasks = () => {

    const api = "api/tasks"

    $.getJSON(api, function (data) {
        for (let i = 0; i < data.length; i++) {
            //REPRODUZ O HTML COM AS TASKS
            const timelineHtml = htmlTask(data[i])
            $("#timeLine").append(timelineHtml)

        }
    })


}



    </script>
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
                    <div class="page-header">
                        <div class="page-header-content">
                            <div class="page-title">
                                <h4>
                                    <i class="icon-versions position-left"></i>
                                    <span class="text-semibold">Versões do Sistema Jubarte</span>
                                </h4>

                                <ul class="breadcrumb position-right">
                                </ul>
                            </div>

                            <div class="heading-elements">

                                <a href="#" class="btn bg-indigo btn-labeled heading-btn legitRipple"
                                   data-toggle="modal" data-target="#modalFormFaq">
                                    <b><i class="icon-plus22"></i></b>
                                    Adicionar Versão
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /page header -->


                    <!-- Content area -->
                    <div class="content">

                        <div class="row">

                            <div class="col-md-12 col-lg-12">
                                <div class="panel panel-flat">
                                    <div class="panel-body">
                                        <h6 class="panel-title">Abaixo o cronograma de novidades relacionado as respectivas versões.</h6>
                                    </div>
                                </div>
                                <!-- Timeline -->
                                <div class="timeline timeline-left content-group">
                                    <div class="timeline-container">

                                    <div id="timeLine"></div>

                                    </div>
                                </div>
                                <!-- /Timeline -->

                            </div>

                        </div>
                        <!-- /questions area -->

                    </div>
                    <!-- /content area -->

                </div>
                <!-- /main content -->

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

</body>

<div class="modal primary" tabindex="-1" role="dialog" id="modalFormFaq">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title">
                    Adicionar novo item
                </h5>
                <button type="button" class="close customModalCloseBtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <label>Versão</label>
                            <input type="text" class="form-control" required="" name="versao">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</html>
