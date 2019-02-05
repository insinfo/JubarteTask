<?php
/**
 * Created by PhpStorm.
 * User: isaque
 * Date: 02/01/2019
 * Time: 16:11
 */

namespace MinhaCasa\Model;

use MinhaCasa\Services\TraitFillFromArray;

class Ficha
{
    use TraitFillFromArray;

    const TABLE_NAME = "FichaServidor";
    const KEY_ID = "id";
    const CPF = "cpf";
    const NOME = "nome";
    const DATA_NASCIMENTO = "dataNascimento";
    const ESTADO_CIVIL = "estadoCivil";
    const EMAIL = "email";
    const TIPO_TELEFONE = "tipoTelefone";
    const TELEFONE = "telefone";
    const LOTACAO = "lotacao";
    const CARGO = "cargo";
    const TIPO_ENDERECO = "tipoEndereco";
    const CEP = "cep";
    const PAIS = "pais";
    const ESTADO = "estado";
    const MUNICIPIO = "municipio";
    const TIPO_LOGRADOURO = "tipoLogradouro";
    const LOGRADOURO = "logradouro";
    const NUMERO = "numero";
    const BAIRRO = "bairro";
    const COMPLEMENTO = "complemento";
    const POSSUI_IMOVEL_PROPRIO = "possuiImovelProprio";
    const MORA_OCUPACAO_IRREGULAR = "moraOcupacaoIrregular";
    const RESIDE_AREA_RISCO = "resideAreaRisco";
    const TEMPO_SERVICO_SERVIDOR = "tempoServicoServidor";
    const POSSUI_MAIS_MATRICULAS = "possuiMaisMatriculas";
    const PARTICIPOU_PROGRAMA_HABITACIONAL = "participouProgramaHabitacional";
    const RENDA_FAMILIAR = "rendaFamiliar";
    const POSSUI_DEFICIENCIA = "possuiDeficiencia";
    const NOME_DEFICIENCIA = "nomeDeficiencia";
    const CODIGO_DEFICIENCIA = "codigoDeficiencia";
    const MEMBRO_FAMILIA_POSSUI_DEFICIENCIA = "membroFamiliaPossuiDeficiencia";
    const MEMBRO_FAMILIA_NOME_DEFICIENCIA = "membroFamiliaNomeDeficiencia";
    const MEMBRO_FAMILIA_CODIGO_DEFICIENCIA = "membroFamiliaCodigoDeficiencia";
    const POSSUI_DOENCA_FAMILIA = "possuiDoencaFamilia";
    const NOME_DOENCA_FAMILIA = "nomeDoencaFamilia";
    const MATRICULAS = "matriculas";

    const TABLE_FIELDS = [
        self::CPF,
        self::NOME,
        self::DATA_NASCIMENTO,
        self::ESTADO_CIVIL,
        self::EMAIL,
        self::TIPO_TELEFONE,
        self::TELEFONE,
        self::LOTACAO,
        self::CARGO,
        self::TIPO_ENDERECO,
        self::CEP,
        self::PAIS,
        self::ESTADO,
        self::MUNICIPIO,
        self::TIPO_LOGRADOURO,
        self::LOGRADOURO,
        self::NUMERO,
        self::BAIRRO,
        self::COMPLEMENTO,
        self::POSSUI_IMOVEL_PROPRIO,
        self::MORA_OCUPACAO_IRREGULAR,
        self::RESIDE_AREA_RISCO,
        self::TEMPO_SERVICO_SERVIDOR,
        self::POSSUI_MAIS_MATRICULAS,
        self::PARTICIPOU_PROGRAMA_HABITACIONAL,
        self::RENDA_FAMILIAR,
        self::POSSUI_DEFICIENCIA,
        self::NOME_DEFICIENCIA,
        self::CODIGO_DEFICIENCIA,
        self::MEMBRO_FAMILIA_POSSUI_DEFICIENCIA,
        self::MEMBRO_FAMILIA_NOME_DEFICIENCIA,
        self::MEMBRO_FAMILIA_CODIGO_DEFICIENCIA,
        self::POSSUI_DOENCA_FAMILIA,
        self::MATRICULAS
    ];

    protected $id;
    private $cpf;
    private $nome;
    private $dataNascimento;
    private $estadoCivil;
    private $email;
    private $tipoTelefone;
    private $telefone;
    private $lotacao;
    private $cargo;
    private $tipoEndereco;
    private $cep;
    private $pais;
    private $estado;
    private $municipio;
    private $tipoLogradouro;
    private $logradouro;
    private $numero;
    private $bairro;
    private $complemento;
    private $possuiImovelProprio;
    private $moraOcupacaoIrregular;
    private $resideAreaRisco;
    private $tempoServicoServidor;
    private $possuiMaisMatriculas;
    private $participouProgramaHabitacional;
    private $rendaFamiliar;
    private $possuiDeficiencia;
    private $nomeDeficiencia;
    private $codigoDeficiencia;
    private $membroFamiliaPossuiDeficiencia;
    private $membroFamiliaNomeDeficiencia;
    private $membroFamiliaCodigoDeficiencia;
    private $possuiDoencaFamilia;
    private $nomeDoencaFamilia;
    private $matriculas;

    /**
     * @return mixed
     */
    public function getMatriculas()
    {
        return $this->matriculas;
    }

    /**
     * @param mixed $matriculas
     */
    public function setMatriculas($matriculas)
    {
        $this->matriculas = $matriculas;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * @param mixed $dataNascimento
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

    /**
     * @return mixed
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * @param mixed $estadoCivil
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTipoTelefone()
    {
        return $this->tipoTelefone;
    }

    /**
     * @param mixed $tipoTelefone
     */
    public function setTipoTelefone($tipoTelefone)
    {
        $this->tipoTelefone = $tipoTelefone;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getLotacao()
    {
        return $this->lotacao;
    }

    /**
     * @param mixed $lotacao
     */
    public function setLotacao($lotacao)
    {
        $this->lotacao = $lotacao;
    }

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @param mixed $cargo
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    /**
     * @return mixed
     */
    public function getTipoEndereco()
    {
        return $this->tipoEndereco;
    }

    /**
     * @param mixed $tipoEndereco
     */
    public function setTipoEndereco($tipoEndereco)
    {
        $this->tipoEndereco = $tipoEndereco;
    }

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param mixed $pais
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param mixed $municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }

    /**
     * @return mixed
     */
    public function getTipoLogradouro()
    {
        return $this->tipoLogradouro;
    }

    /**
     * @param mixed $tipoLogradouro
     */
    public function setTipoLogradouro($tipoLogradouro)
    {
        $this->tipoLogradouro = $tipoLogradouro;
    }

    /**
     * @return mixed
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * @param mixed $logradouro
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * @param mixed $complemento
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    /**
     * @return mixed
     */
    public function getPossuiImovelProprio()
    {
        return $this->possuiImovelProprio;
    }

    /**
     * @param mixed $possuiImovelProprio
     */
    public function setPossuiImovelProprio($possuiImovelProprio)
    {
        $this->possuiImovelProprio = $possuiImovelProprio;
    }

    /**
     * @return mixed
     */
    public function getMoraOcupacaoIrregular()
    {
        return $this->moraOcupacaoIrregular;
    }

    /**
     * @param mixed $moraOcupacaoIrregular
     */
    public function setMoraOcupacaoIrregular($moraOcupacaoIrregular)
    {
        $this->moraOcupacaoIrregular = $moraOcupacaoIrregular;
    }

    /**
     * @return mixed
     */
    public function getResideAreaRisco()
    {
        return $this->resideAreaRisco;
    }

    /**
     * @param mixed $resideAreaRisco
     */
    public function setResideAreaRisco($resideAreaRisco)
    {
        $this->resideAreaRisco = $resideAreaRisco;
    }

    /**
     * @return mixed
     */
    public function getTempoServicoServidor()
    {
        return $this->tempoServicoServidor;
    }

    /**
     * @param mixed $tempoServicoServidor
     */
    public function setTempoServicoServidor($tempoServicoServidor)
    {
        $this->tempoServicoServidor = $tempoServicoServidor;
    }

    /**
     * @return mixed
     */
    public function getPossuiMaisMatriculas()
    {
        return $this->possuiMaisMatriculas;
    }

    /**
     * @param mixed $possuiMaisMatriculas
     */
    public function setPossuiMaisMatriculas($possuiMaisMatriculas)
    {
        $this->possuiMaisMatriculas = $possuiMaisMatriculas;
    }

    /**
     * @return mixed
     */
    public function getParticipouProgramaHabitacional()
    {
        return $this->participouProgramaHabitacional;
    }

    /**
     * @param mixed $participouProgramaHabitacional
     */
    public function setParticipouProgramaHabitacional($participouProgramaHabitacional)
    {
        $this->participouProgramaHabitacional = $participouProgramaHabitacional;
    }

    /**
     * @return mixed
     */
    public function getRendaFamiliar()
    {
        return $this->rendaFamiliar;
    }

    /**
     * @param mixed $rendaFamiliar
     */
    public function setRendaFamiliar($rendaFamiliar)
    {
        $this->rendaFamiliar = $rendaFamiliar;
    }

    /**
     * @return mixed
     */
    public function getPossuiDeficiencia()
    {
        return $this->possuiDeficiencia;
    }

    /**
     * @param mixed $possuiDeficiencia
     */
    public function setPossuiDeficiencia($possuiDeficiencia)
    {
        $this->possuiDeficiencia = $possuiDeficiencia;
    }

    /**
     * @return mixed
     */
    public function getNomeDeficiencia()
    {
        return $this->nomeDeficiencia;
    }

    /**
     * @param mixed $nomeDeficiencia
     */
    public function setNomeDeficiencia($nomeDeficiencia)
    {
        $this->nomeDeficiencia = $nomeDeficiencia;
    }

    /**
     * @return mixed
     */
    public function getCodigoDeficiencia()
    {
        return $this->codigoDeficiencia;
    }

    /**
     * @param mixed $codigoDeficiencia
     */
    public function setCodigoDeficiencia($codigoDeficiencia)
    {
        $this->codigoDeficiencia = $codigoDeficiencia;
    }

    /**
     * @return mixed
     */
    public function getMembroFamiliaPossuiDeficiencia()
    {
        return $this->membroFamiliaPossuiDeficiencia;
    }

    /**
     * @param mixed $membroFamiliaPossuiDeficiencia
     */
    public function setMembroFamiliaPossuiDeficiencia($membroFamiliaPossuiDeficiencia)
    {
        $this->membroFamiliaPossuiDeficiencia = $membroFamiliaPossuiDeficiencia;
    }

    /**
     * @return mixed
     */
    public function getMembroFamiliaNomeDeficiencia()
    {
        return $this->membroFamiliaNomeDeficiencia;
    }

    /**
     * @param mixed $membroFamiliaNomeDeficiencia
     */
    public function setMembroFamiliaNomeDeficiencia($membroFamiliaNomeDeficiencia)
    {
        $this->membroFamiliaNomeDeficiencia = $membroFamiliaNomeDeficiencia;
    }

    /**
     * @return mixed
     */
    public function getMembroFamiliaCodigoDeficiencia()
    {
        return $this->membroFamiliaCodigoDeficiencia;
    }

    /**
     * @param mixed $membroFamiliaCodigoDeficiencia
     */
    public function setMembroFamiliaCodigoDeficiencia($membroFamiliaCodigoDeficiencia)
    {
        $this->membroFamiliaCodigoDeficiencia = $membroFamiliaCodigoDeficiencia;
    }

    /**
     * @return mixed
     */
    public function getPossuiDoencaFamilia()
    {
        return $this->possuiDoencaFamilia;
    }

    /**
     * @param mixed $possuiDoencaFamilia
     */
    public function setPossuiDoencaFamilia($possuiDoencaFamilia)
    {
        $this->possuiDoencaFamilia = $possuiDoencaFamilia;
    }

    /**
     * @return mixed
     */
    public function getNomeDoencaFamilia()
    {
        return $this->nomeDoencaFamilia;
    }

    /**
     * @param mixed $nomeDoencaFamilia
     */
    public function setNomeDoencaFamilia($nomeDoencaFamilia)
    {
        $this->nomeDoencaFamilia = $nomeDoencaFamilia;
    }



}