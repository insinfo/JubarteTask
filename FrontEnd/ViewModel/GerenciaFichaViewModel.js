$(document).ready(function () {
    var viewModel = new GerenciaFichaViewModel();
    viewModel.init();
});

function GerenciaFichaViewModel() {

    this.restClient = new RESTClient();
    this.loaderApi = new LoaderAPI();
    this.modalApi = new ModalAPI();
    this.webserviceBaseURL = WEBSERVICE_MINHACASA_BASE_URL;
    this.webservicePmroBaseURL = WEBSERVICE_PMRO_BASE_URL;
    this.webserviceJubarteBaseURL = WEBSERVICE_JUBARTE_BASE_URL;

    // lista
    this.tableListFichas = $('#tableListFichas');
    this.dataTableListFichas = new ModernDataTable('tableListFichas');

    this.selectFiltroRenda = $('#selectFiltroRenda');
    this.inputFiltroSearch = $('#inputFiltroSearch');
    this.selectFiltroTempoServico = $('#selectFiltroTempoServico');
    this.filtroMoraOcupacaoIrregular = $('#filtroMoraOcupacaoIrregular');
    this.filtroPossuiImovelProprio = $('#filtroPossuiImovelProprio');
    this.filtroResideAreaRisco = $('#filtroResideAreaRisco');
    this.filtroDoenca = $('#filtroDoenca');
    this.filtroDeficiencia = $('#filtroDeficiencia');
    this.filtroMatricula = $('#filtroMatricula');
    this.btnLimparFiltro = $('#btnLimparFiltro');

    this.btnReload = $('#btnReload');
    this.btnBuscar = $('#btnBuscar');
    this.btnImprimir = $('#btnImprimir');
    this.btnDownload = $('#btnDownload');

    this.filtroRendaArray = [];
    this.filtroTempoServicoArray = [];

    //modal
    this.modalDetalhe = $('#modalDetalhe');

}

GerenciaFichaViewModel.prototype.init = function () {
    var self = this;
    self.events();
    self.getAllFichas();
    // Default initialization
    $('.multiselect-select-all-filtering').multiselect({
        includeSelectAllOption: false,
        enableCaseInsensitiveFiltering: true,
        enableFiltering: true,
        selectAllText: 'Tudo',
        allSelectedText: "Selecionado tudo",
        nonSelectedText: "Selecione",
        templates: {
            filter: '<li class="multiselect-item multiselect-filter"><i class="icon-search4"></i> <input class="form-control" type="text"></li>'
        },
        onSelectAll: function () {
            $.uniform.update();
        },
        onChange: function (option, checked, select) {
            // var selected = this.$select.val();
            var selec = option.closest('select');
            var options = selec.find('option:selected');

            if (selec.attr('id') === self.selectFiltroRenda.attr('id')) {
                emptyArray(self.filtroRendaArray);
                options.each(function (index, item) {
                    self.filtroRendaArray.push($(this).val());
                });
            }

            if (selec.attr('id') === self.selectFiltroTempoServico.attr('id')) {
                emptyArray(self.filtroTempoServicoArray);
                options.each(function (index, item) {
                    self.filtroTempoServicoArray.push($(this).val());
                });
            }
        }
    });
    $(".multiselect-container input").uniform({radioClass: 'choice'});

};
GerenciaFichaViewModel.prototype.updateFields = function () {
    var self = this;
    var selects = $('.select');
    //selects.selectpicker('refresh');
    //selects.select2('refresh');
    self.maskForm();
};
GerenciaFichaViewModel.prototype.getAllFichas = function () {
    var self = this;

    var columnsConfiguration = [
        {"key": "cpf", "type": "cpf", "width": "250px"},
        {"key": "nome", "width": "450px"},
        {"key": "dataNascimento", "type": "date", "width": "250px"},
        {"key": "estadoCivil", "width": "250px"},
        {"key": "telefone", "width": "250px"},
        {"key": "lotacao", "width": "250px"},
        {"key": "cargo", "width": "250px"},
        {"key": "bairro", "width": "250px"},

        {"key": "possuiImovelProprio", "type": "boolLabel"},
        {"key": "moraOcupacaoIrregular", "type": "boolLabel"},
        {"key": "resideAreaRisco", "type": "boolLabel"},
        {"key": "tempoServicoServidor"},
        {"key": "rendaFamiliar"},
        {"key": "possuiDeficiencia", "type": "boolLabel"},
        {"key": "possuiDoencaFamilia", "type": "boolLabel"},
        {"key": "possuiMaisMatriculas", "type": "boolLabel"}
    ];

    var dataToSender = {
        'search': ''
    };

    self.dataTableListFichas.hideTableHeader();
    self.dataTableListFichas.setDisplayCols(columnsConfiguration);
    self.dataTableListFichas.hideActionBtnDelete();
    self.dataTableListFichas.hideRowSelectionCheckBox();
    self.dataTableListFichas.setIsColsEditable(false);
    self.dataTableListFichas.setDataToSender(dataToSender);
    self.dataTableListFichas.setSourceURL(self.webserviceBaseURL + "fichas");
    self.dataTableListFichas.setSourceMethodPOST();
    self.dataTableListFichas.load();
};
GerenciaFichaViewModel.prototype.reloadDatatable = function () {
    var self = this;

    var dataToSender = {
        'search': self.inputFiltroSearch.val(),
        'rendaFamiliar': self.filtroRendaArray,
        'tempoServicoServidor': self.filtroTempoServicoArray,

        'moraOcupacaoIrregular': self.filtroMoraOcupacaoIrregular.val(),
        'possuiImovelProprio': self.filtroPossuiImovelProprio.val(),
        'resideAreaRisco': self.filtroResideAreaRisco.val(),
        'possuiDoencaFamilia': self.filtroDoenca.val(),
        'possuiDeficiencia': self.filtroDeficiencia.val(),
        'possuiMaisMatriculas': self.filtroMatricula.val()

    };
    console.log(JSON.stringify(dataToSender));
    self.dataTableListFichas.setDataToSender(dataToSender);
    self.dataTableListFichas.load();
};
GerenciaFichaViewModel.prototype.events = function () {
    var self = this;

    self.btnReload.click(function () {
        self.reloadDatatable();
    });
    self.btnBuscar.click(function () {
        self.reloadDatatable();
    });
    self.inputFiltroSearch.on('keypress', function (e) {
        if (e.which === 13) {
            self.reloadDatatable();
        }
    });
    self.dataTableListFichas.setOnClick(function (data) {
        self.fillDetalheModal(data);
        self.modalDetalhe.modal('show');
    });
    self.filtroMoraOcupacaoIrregular.click(function () {
        self.checkboxBehavior(this);
    });
    self.filtroPossuiImovelProprio.click(function () {
        self.checkboxBehavior(this);
    });
    self.filtroResideAreaRisco.click(function () {
        self.checkboxBehavior(this);
    });

    self.filtroDoenca.click(function () {
        self.checkboxBehavior(this);
    });
    self.filtroDeficiencia.click(function () {
        self.checkboxBehavior(this);
    });
    self.filtroMatricula.click(function () {
        self.checkboxBehavior(this);
    });
    self.btnImprimir.click(function () {
        self.dataTableListFichas.printTable();
    });
    self.btnDownload.click(function () {
        self.dataTableListFichas.exportToXLS();
    });

    self.btnLimparFiltro.click(function () {
        self.resetFiltros();
        self.reloadDatatable();
    });
};
GerenciaFichaViewModel.prototype.resetFiltros = function () {
    var self = this;
    self.filtroResideAreaRisco.prop('checked', false);
    self.filtroResideAreaRisco.val('null');
    self.filtroPossuiImovelProprio.val('null');
    self.filtroPossuiImovelProprio.prop('checked', false);
    self.filtroMoraOcupacaoIrregular.val('null');
    self.filtroMoraOcupacaoIrregular.prop('checked', false);
    self.filtroDoenca.val('null');
    self.filtroDoenca.prop('checked', false);
    self.filtroDeficiencia.val('null');
    self.filtroDeficiencia.prop('checked', false);
    self.filtroMatricula.val('null');
    self.filtroMatricula.prop('checked', false);

    $('option', self.selectFiltroRenda).each(function (element) {
        $(this).removeAttr('selected').prop('selected', false);
    });
    $('option', self.selectFiltroTempoServico).each(function (element) {
        $(this).removeAttr('selected').prop('selected', false);
    });

    emptyArray(self.filtroRendaArray);
    emptyArray(self.filtroTempoServicoArray);

    $('.multiselect-select-all-filtering').multiselect('refresh');
    $(".multiselect-container input").uniform({radioClass: 'choice'});

};
//abilita e configura o comportamento do checkbox par 3 estados
GerenciaFichaViewModel.prototype.checkboxBehavior = function (checkbox) {
    var self = this;
    checkbox = $(checkbox);
    if (checkbox.val() === 'null') {
        checkbox.val('true');
    } else if (checkbox.val() === 'true') {
        checkbox.val('false');
    } else if (checkbox.val() === 'false') {
        checkbox.val('true');
    }

    self.reloadDatatable();
};
GerenciaFichaViewModel.prototype.fillDetalheModal = function (data) {
    var self = this;
    //$('#cpf').text(data['cpf']);
    // $('#nome').text(data['nome']);
    self.modalDetalhe.find('span').each(function (idx, ele) {
        // console.log(ele);
        var span = $(ele);
        var id = span.attr('id');//
        var value = data[id];
        value = value === true ? 'Sim' : value;
        value = value === false ? 'Não' : value;
        value = id === 'dataNascimento' ? sqlDateToBrasilDate(value) : value;
        span.text(value);
    });
};
