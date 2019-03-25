<?php
/**
 * Created by PhpStorm.
 * User: isaque
 * Date: 02/01/2019
 * Time: 16:11
 */

namespace Modelo\Model;

use Modelo\Services\TraitFillFromArray;

class ServidorConcursado
{
    use TraitFillFromArray;

    const TABLE_NAME = "ServidoresConcursados";
    const KEY_ID = "id";
    const CPF = "cpf";
    const NOME = "nome";
    const MATRICULA = "matricula";

    const TABLE_FIELDS = [
        self::CPF,
        self::NOME,
        self::MATRICULA
    ];

    protected $id;
    private $cpf;
    private $nome;
    private $matricula;

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
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * @param mixed $matricula
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }


}