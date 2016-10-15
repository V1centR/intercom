<?php

namespace OTNCore\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Bancodados
 *
 * @ORM\Table(name="BancoDados")
 * @ORM\Entity
 */
class Bancodados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descrição", type="string", length=50, nullable=true)
     */
    private $descrição;

    /**
     * @var integer
     *
     * @ORM\Column(name="versao", type="integer", nullable=true)
     */
    private $versao;

    /**
     * @var string
     *
     * @ORM\Column(name="comando", type="text", length=65535, nullable=true)
     */
    private $comando;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descrição
     *
     * @param string $descrição
     *
     * @return Bancodados
     */
    public function setDescrição($descrição)
    {
        $this->descrição = $descrição;

        return $this;
    }

    /**
     * Get descrição
     *
     * @return string
     */
    public function getDescrição()
    {
        return $this->descrição;
    }

    /**
     * Set versao
     *
     * @param integer $versao
     *
     * @return Bancodados
     */
    public function setVersao($versao)
    {
        $this->versao = $versao;

        return $this;
    }

    /**
     * Get versao
     *
     * @return integer
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     * Set comando
     *
     * @param string $comando
     *
     * @return Bancodados
     */
    public function setComando($comando)
    {
        $this->comando = $comando;

        return $this;
    }

    /**
     * Get comando
     *
     * @return string
     */
    public function getComando()
    {
        return $this->comando;
    }
}
