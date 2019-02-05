$(document).ready(function () {
    var mainView = new FichaViewModel();
    mainView.init();
});
function FichaViewModel() {

    this.restClient = new RESTClient();
    this.loaderApi = new LoaderAPI();
    this.modalApi = new ModalAPI();

    this.webserviceBaseURL = WEBSERVICE_MINHACASA_BASE_URL;
    this.webservicePmroBaseURL = WEBSERVICE_PMRO_BASE_URL;
    this.webserviceJubarteBaseURL = WEBSERVICE_JUBARTE_BASE_URL;

    this.formValidateApi = new FormValidationAPI('formCadastro');
    this.formCadastro = $("#formCadastro");
    this.btnFillEndereco = $("#btnFillEndereco");
    this.btnBuscaEndereco = $("#btnBuscaEndereco");
    this.btnSave = $("#btnSave");

    this.possuiMaisMatriculas = $('[name="possuiMaisMatriculas"]');
    this.matriculas = $('[name="matriculas"]');
    this.possuiDeficiencia = $('[name="possuiDeficiencia"]');
    this.nomeDeficiencia = $('[name="nomeDeficiencia"]');
    this.codigoDeficiencia = $('[name="codigoDeficiencia"]');
    this.membroFamiliaPossuiDeficiencia = $('[name="membroFamiliaPossuiDeficiencia"]');
    this.membroFamiliaNomeDeficiencia = $('[name="membroFamiliaNomeDeficiencia"]');
    this.membroFamiliaCodigoDeficiencia = $('[name="membroFamiliaCodigoDeficiencia"]');
    this.possuiDoencaFamilia = $('[name="membroFamiliaPossuiDeficiencia"]');
    this.nomeDoencaFamilia = $('[name="nomeDoencaFamilia"]');

    //form busca CEP
    this.selectUfBuscaCEP = $('#selectUfBuscaCEP');
    this.selectMunicipioBuscaCEP = $('#selectMunicipioBuscaCEP');
    this.inputBairroBuscaCEP = $('#inputBairroBuscaCEP');
    this.inputLogradouroBuscaCEP = $('#inputLogradouroBuscaCEP');
    this.btnBuscarCEPEnd = $('#btnBuscarCEPEnd');
    this.correntEndereco = $('.enderecoItem');
    this.selectUf = $('#estado');
    this.selectMunicipio= $('#municipio');

    // lista CEPS
    this.tableListCEPCorreios = $('#tableListCEPCorreios');
    this.dataTableCEPCorreios = new ModernDataTable('tableListCEPCorreios');
    this.modalBuscaCEP = $('#modalBuscaCEP');
}
FichaViewModel.prototype.init = function () {
    var self = this;
    self.events();
    self.getUFs();
    self.getMunicipios();
    self.listCEPbyEndereco();
    /*$(".styled").uniform({
        radioClass: 'choice'
    });*/

    // Default initialization
    $('.select').select2({
        // minimumResultsForSearch: Infinity
    });

    $("#tipoTelefone").change(function () {
        var inputTelefone = $("#telefone");
        var input = document.createElement('input');
        input.type = "text";
        input.name = inputTelefone[0].name;
        input.id = inputTelefone[0].id;
        input.className = inputTelefone[0].className;
        var newInput = $(input);
        switch (this.value) {
            case "residencial":
                newInput.inputmask({mask: "(99) 9999-9999"});
                break;
            case "comercial":
                newInput.inputmask({mask: "(99) 9999-9999"});
                break;
            default:
                newInput.inputmask({
                    mask: "(99) 9 9999-9999"
                });
                break;
        }
        var parent = inputTelefone.parent();
        parent[0].removeChild(inputTelefone[0]);
        parent[0].appendChild(input);
    });


};
FichaViewModel.prototype.updateFields = function () {
    var self = this;
    var selects = $('.select');
    //selects.selectpicker('refresh');
    //selects.select2('refresh');
    self.maskForm();
};
FichaViewModel.prototype.getUFs = function (select, idUfToSelect) {
    var self = this;
    self.loaderApi.show();
    var dataToSender = {'idPais': 33};
    self.restClient.setWebServiceURL(self.webservicePmroBaseURL + 'uf');
    self.restClient.setMethodPOST();
    self.restClient.setDataToSender(dataToSender);
    self.restClient.setSuccessCallbackFunction(function (data) {
        self.loaderApi.hide();
        if (!select) {
            populateSelect(self.selectUfBuscaCEP, data, 'id', 'nome', 'rio de janeiro');
            populateSelect(self.selectUf, data, 'id', 'nome', 'rio de janeiro');
        }
        else {
            populateSelect(select, data, 'id', 'nome', 'rio de janeiro');
            if (idUfToSelect) {
                select.val(idUfToSelect);
            }
        }
        self.updateFields();

    });
    self.restClient.setErrorCallbackFunction(function (jqXHR, textStatus, errorThrown) {
        self.loaderApi.hide();
        //alert('Erro em obter lista de estados');
        self.modalApi.showModal(ModalAPI.ERROR, "Erro", jqXHR.responseJSON, "OK");
    });
    self.restClient.exec();
};
FichaViewModel.prototype.getMunicipios = function (select, idUF, idMunicipioToSelect) {
    var self = this;
    self.loaderApi.show();
    if (idUF == null) {
        idUF = 20;
    }
    var dataToSender = {'idUF': idUF};
    self.restClient.setWebServiceURL(self.webservicePmroBaseURL + 'municipio');
    self.restClient.setMethodPOST();
    self.restClient.setDataToSender(dataToSender);
    self.restClient.setSuccessCallbackFunction(function (data) {
        self.loaderApi.hide();
        if (!select) {
            populateSelect(self.selectMunicipioBuscaCEP, data, 'id', 'nome', 'rio das ostras');
            populateSelect(self.selectMunicipio, data, 'id', 'nome', 'rio das ostras');
        }
        else {
            populateSelect(select, data, 'id', 'nome', 'rio das ostras');
            if (idMunicipioToSelect) {
                select.val(idMunicipioToSelect);
            }
        }
        self.updateFields();
    });
    self.restClient.setErrorCallbackFunction(function (jqXHR, textStatus, errorThrown) {
        self.loaderApi.hide();
        // alert('Erro em obter lista de municipios');
        self.modalApi.showModal(ModalAPI.ERROR, "Erro", jqXHR.responseJSON, "OK");
    });
    self.restClient.exec();
};
//INICIALIZA DATATABLE BUSCA CEP POR ENDERECO
FichaViewModel.prototype.listCEPbyEndereco = function () {
    var self = this;

    var columnsConfiguration = [
        {"key": "tipo"},
        {"key": "logradouro"},
        {"key": "complemento"},
        {"key": "bairro"},
        {"key": "municipio"},
        {"key": "uf"},
        {"key": "cep"}
    ];

    var dataToSender = {
        'uf': 'RJ',
        'municipio': 'Rio das Ostras',
        'bairro': 'Centro',
        'logradouro': 'Rodovia Amaral'
    };
    self.dataTableCEPCorreios.hideTableHeader();
    self.dataTableCEPCorreios.setDisplayCols(columnsConfiguration);
    self.dataTableCEPCorreios.hideActionBtnDelete();
    self.dataTableCEPCorreios.hideRowSelectionCheckBox();
    self.dataTableCEPCorreios.setIsColsEditable(false);

    self.dataTableCEPCorreios.setDataToSender(dataToSender);
    self.dataTableCEPCorreios.setSourceURL(self.webserviceJubarteBaseURL + "correios/cep");
    self.dataTableCEPCorreios.setSourceMethodPOST();
    self.dataTableCEPCorreios.setOnClick(function (data) {
        var cep = data['cep'].replace(/\D/g, '').trim();
        self.getEnderecoByCEP(cep, self.correntEndereco);
        self.modalBuscaCEP.modal('hide');
    });
    self.dataTableCEPCorreios.load();
};
FichaViewModel.prototype.getEnderecoByCEP = function (cep, refCorrentDivEndereco) {
    var self = this;
    self.loaderApi.show();

    /*refCorrentDivEndereco.find('[name="bairro"]').prop('disabled', true);
    refCorrentDivEndereco.find('[name="uf"]').prop('disabled', true);
    refCorrentDivEndereco.find('[name="municipio"]').prop('disabled', true);
    refCorrentDivEndereco.find('[name="logradouro"]').prop('disabled', true);
    refCorrentDivEndereco.find('[name="tipoLogradouro"]').prop('disabled', true);*/

    self.restClient.setWebServiceURL(self.webserviceJubarteBaseURL + 'correios/endereco/' + cep);
    self.restClient.setMethodGET();
    self.restClient.setDataToSender(null);
    self.restClient.setSuccessCallbackFunction(function (data) {
        //set o input validacao para true
        var estadoCorreios = data['uf'];
        var municipioCorreios = data['municipio'];
        var tipoLogradouroCorreios = data['tipo'];

        refCorrentDivEndereco.find('[name="validacao"]').val('true');
        refCorrentDivEndereco.find('[name="cep"]').val(data['cep']);

        //seleciona o PAIS
        var selectPais = refCorrentDivEndereco.find('[name="pais"]');
        setSelectIsContain(selectPais, 'brasil');
        self.updateFields();

        //seleciona o ESTADO
        var selectUf = refCorrentDivEndereco.find('[name="estado"]');

        setSelectIsContain(selectUf, converterEstados(estadoCorreios));
        self.updateFields();

        //dispara o evento change preenchendo o select municipio com as municipios
        //do estado do CEP e seta o municipio do CEP
        var timerFunc = setInterval(function () {
            if (self.loaderApi.isLoading() === false) {
                clearInterval(timerFunc);
                var selectMunicipio = refCorrentDivEndereco.find('[name="municipio"]');
                setSelectIsContain(selectMunicipio, municipioCorreios);
                self.updateFields();
            }
        }, 500);

        refCorrentDivEndereco.find('[name="bairro"]').val(data['bairro']);
        refCorrentDivEndereco.find('[name="logradouro"]').val(data['logradouro']);

        var selectTipoLogradouro = refCorrentDivEndereco.find('[name="tipoLogradouro"]');
        if (!setSelectIsContain(selectTipoLogradouro, tipoLogradouroCorreios)) {
            selectTipoLogradouro.append($('<option>', {
                value: tipoLogradouroCorreios, text: tipoLogradouroCorreios
            }).attr("selected", true));
        }
        self.updateFields();
        self.loaderApi.hide();
    });
    self.restClient.setErrorCallbackFunction(function (jqXHR, textStatus, errorThrown) {
        self.loaderApi.hide();
        refCorrentDivEndereco.find('[name="bairro"]').prop('disabled', false);
        refCorrentDivEndereco.find('[name="uf"]').prop('disabled', false);
        refCorrentDivEndereco.find('[name="municipio"]').prop('disabled', false);
        refCorrentDivEndereco.find('[name="logradouro"]').prop('disabled', false);
        refCorrentDivEndereco.find('[name="tipoLogradouro"]').prop('disabled', false);
        var response = jqXHR.responseJSON;
        if (response) {
            if (response['exception'] !== undefined && response['exception'] === "Não existe") {
                self.modalApi.showModal(ModalAPI.PRIMARY, "Consulta CEP", "CEP invalido ou inexistente na base de dados!", "OK");
            } else {
                self.modalApi.showModal(ModalAPI.ERROR, "Erro", response, "OK");
            }

        } else {
            self.modalApi.showModal(ModalAPI.ERROR, "Erro", "Erro desconhecido... Verifique se você esta conectado a internet.", "OK");
        }
        //alert('Não foi possível obter endereço pelo CEP informado.');
        self.modalApi.showModal(ModalAPI.ERROR, "Erro", jqXHR.responseJSON, "OK");
    });
    self.restClient.exec();
};
FichaViewModel.prototype.maskForm = function () {

    /* $(".on-select-sim-change-input").each(function () {
         var textInputs = $(this).find('input[type=text]');
         textInputs.hide();
         $(this).find('input[type=radio]').click(function () {
             if (this.value === "sim") {
                 textInputs.fadeIn();
             } else {
                 textInputs.fadeOut();
             }
         });
     });

     $("input[data-mask]").each(function () {
         var mask = this.dataset.mask;

         $(this).formatter({
             pattern: mask
         });
     })*/
};
FichaViewModel.prototype.events = function () {
    var self = this;

    self.btnSave.on('click', function (e) {
        self.save();
    });

    $('#cpf').on('blur', function (e) {
        self.isConcursado($(this).val().replace(/\D/g, '').trim());
    });


    self.selectUfBuscaCEP.on('change', function (e) {
        self.getMunicipios(self.selectMunicipioBuscaCEP,self.selectUfBuscaCEP.val());
    });

    self.selectUf.on('change', function (e) {
        self.getMunicipios(self.selectMunicipio,self.selectUf.val());
    });

    //BUSCA CEP POR ENDERECO
    self.btnBuscarCEPEnd.click(function () {
        var dataToSender = {
            'uf': converterEstados(self.selectUfBuscaCEP.find('option:selected').text()),
            'municipio': self.selectMunicipioBuscaCEP.find('option:selected').text(),
            'bairro': self.inputBairroBuscaCEP.val(),
            'logradouro': self.inputLogradouroBuscaCEP.val()
        };
        self.dataTableCEPCorreios.setDataToSender(dataToSender);
        self.dataTableCEPCorreios.reload();
    });

    //buscar endeço nos correios pelo cep informado e preencher os campos de endereço
    self.btnFillEndereco.on('click', function () {
        var divEndereco = $(this).closest('.enderecoItem');
        var correntCep = divEndereco.find('input[name=cep]').val().replace(/\D/g, '').trim();
        if (!correntCep) {
            //alert('CEP não pode ser vazio');
            self.modalApi.showModal(ModalAPI.ERROR, "Erro", 'CEP não pode ser vazio', "OK");
        }
        else {
            self.getEnderecoByCEP(correntCep, divEndereco);
        }
    });

    $('input[name=possuiMaisMatriculas][value=true]').on('click', function () {
        $('input[name=matriculas]').prop('disabled',false);
    });

    $('input[name=possuiMaisMatriculas][value=false]').on('click', function () {
        $('input[name=matriculas]').prop('disabled',true);
        $('input[name=matriculas]').val('');
    });

    $('input[name=possuiDeficiencia][value=true]').on('click', function () {
        $('input[name=nomeDeficiencia]').prop('disabled',false);
        $('input[name=codigoDeficiencia]').prop('disabled',false);
    });

    $('input[name=possuiDeficiencia][value=false]').on('click', function () {
        $('input[name=nomeDeficiencia]').prop('disabled',true);
        $('input[name=codigoDeficiencia]').prop('disabled',true);
        $('input[name=nomeDeficiencia]').val('');
        $('input[name=codigoDeficiencia]').val('');
    });

    $('input[name=membroFamiliaPossuiDeficiencia][value=true]').on('click', function () {
        $('input[name=membroFamiliaNomeDeficiencia]').prop('disabled',false);
        $('input[name=membroFamiliaCodigoDeficiencia]').prop('disabled',false);
    });

    $('input[name=membroFamiliaPossuiDeficiencia][value=false]').on('click', function () {
        $('input[name=membroFamiliaNomeDeficiencia]').prop('disabled',true);
        $('input[name=membroFamiliaCodigoDeficiencia]').prop('disabled',true);
        $('input[name=membroFamiliaNomeDeficiencia]').val('');
        $('input[name=membroFamiliaCodigoDeficiencia]').val('');
    });

    $('input[name=possuiDoencaFamilia][value=true]').on('click', function () {
        $('input[name=nomeDoencaFamilia]').prop('disabled',false);
    });

    $('input[name=possuiDoencaFamilia][value=false]').on('click', function () {
        $('input[name=nomeDoencaFamilia]').prop('disabled',true);
        $('input[name=nomeDoencaFamilia]').val('');
    });
};
FichaViewModel.prototype.validaForm = function () {
    var self = this;

    if (!self.formValidateApi.validate(true, true)) {
        self.modalApi.modalError('Os campos ' + self.formValidateApi.getInvalidFields() + ' são obrigatorios!');
        return false;
    }

    if ($('#telefone').val() == null || $('#telefone').val() === '' || $('#telefone').val() === undefined) {
        self.modalApi.modalError('O telefone é obrigatorio.');
        return false;
    }

    if($('input[name=possuiMaisMatriculas][value=true]').is(':checked')) {
        if($('input[name=matriculas]').val() <= 0){
            self.matriculas.focus();
            self.modalApi.modalError('Você deve digitar as matriculas separadas por virgula!');
            return false;
        }
    }

    if($('input[name=possuiDeficiencia][value=true]').is(':checked')) {
        if($('input[name=nomeDeficiencia]').val() <= 0){
            $('input[name=nomeDeficiencia]').focus();
            self.modalApi.modalError('Digite o nome da deficiencia!');
            return false;
        }
        if($('input[name=codigoDeficiencia]').val() <= 0){
            $('input[name=codigoDeficiencia]').focus();
            self.modalApi.modalError('Digite o codigo da deficiencia!');
            return false;
        }
    }

    if($('input[name=membroFamiliaPossuiDeficiencia][value=true]').is(':checked')) {
        if($('input[name=membroFamiliaNomeDeficiencia]').val() <= 0){
            $('input[name=membroFamiliaNomeDeficiencia]').focus();
            self.modalApi.modalError('Digite o nome da deficiencia do familiar!');
            return false;
        }
        if($('input[name=membroFamiliaCodigoDeficiencia]').val() <= 0){
            $('input[name=membroFamiliaCodigoDeficiencia]').focus();
            self.modalApi.modalError('Digite o codigo da deficiencia do familiar!');
            return false;
        }
    }

    if($('input[name=possuiDoencaFamilia][value=true]').is(':checked')) {
        if($('input[name=nomeDoencaFamilia]').val() <= 0){
            self.matriculas.focus();
            self.modalApi.modalError('Digite qual doença do familiar!');
            return false;
        }
    }

    return true;
};
FichaViewModel.prototype.save = function () {
    var self = this;

    if (!self.validaForm()) {
        return;
    }

    var dataToSender = self.formCadastro.serializeJSON();
    dataToSender['cpf'] = dataToSender['cpf'].replace(/\D/g, '').trim();
    dataToSender['cep'] = dataToSender['cep'].replace(/\D/g, '').trim();
    dataToSender['telefone'] = dataToSender['telefone'].replace(/\D/g, '').trim();

    self.loaderApi.show();
    self.restClient.setMethodPUT();
    self.restClient.setDataToSender(dataToSender);
    self.restClient.setWebServiceURL(self.webserviceBaseURL + 'fichas/');
    self.restClient.setSuccessCallbackFunction(function (data) {
        self.loaderApi.hide();
        self.modalApi.showModal(ModalAPI.SUCCESS, "Sucesso", data['message'], "OK").onClick(function () {
            window.location = WEBSERVICE_MINHACASA_BASE_URL_WEB + 'comprovante?nome=' + data['nome'] + '&numero=' + data['numero'];
        });
    });
    self.restClient.setErrorCallbackFunction(function (xhr) {
        self.loaderApi.hide();
        self.modalApi.showModal(ModalAPI.ERROR, "Erro", xhr['responseJSON'], "OK");
    });
    self.restClient.exec();
};

FichaViewModel.prototype.isConcursado = function (cpf) {
    var self = this;

    if(!validaCPF(cpf)){
        self.modalApi.showModal(ModalAPI.WARNING, "Atenção!", "CPF Inválido!", "OK");
        return;
    }

   // self.loaderApi.show();
    self.restClient.setMethodGET();
    self.restClient.setDataToSender(null);
    self.restClient.setWebServiceURL(self.webserviceBaseURL + 'servidor/concursado/check/'+cpf);
    self.restClient.setSuccessCallbackFunction(function (data) {
       // self.loaderApi.hide();
        var isConcursado = data['isConcursado'];
        if(!isConcursado){
            self.modalApi.showModal(ModalAPI.DANGER, "Atenção!", "Este pré-cadastro esta disponível somente para servidores estatutários.", "OK")
                .onClick(function () {
                    window.location = 'http://www.riodasostras.rj.gov.br';
                });
        }
    });
    self.restClient.setErrorCallbackFunction(function (xhr) {
       // self.loaderApi.hide();
        self.modalApi.showModal(ModalAPI.ERROR, "Erro", xhr['responseJSON'], "OK");
    });
    self.restClient.exec();
};