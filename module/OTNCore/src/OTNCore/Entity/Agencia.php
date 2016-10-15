<?php

namespace OTNCore\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Agencia
 *
 * @ORM\Table(name="Agencia", indexes={@ORM\Index(name="IXFK_Agencia_Banco", columns={"bancoId"})})
 * @ORM\Entity
 */
class Agencia
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
     * @ORM\Column(name="numero", type="string", length=10, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="digito", type="string", length=1, nullable=true)
     */
    private $digito;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=false)
     */
    private $nome;

    /**
     * @var \Banco
     *
     * @ORM\ManyToOne(targetEntity="Banco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bancoId", referencedColumnName="id")
     * })
     */
    private $bancoid;



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
     * Set numero
     *
     * @param string $numero
     *
     * @return Agencia
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set digito
     *
     * @param string $digito
     *
     * @return Agencia
     */
    public function setDigito($digito)
    {
        $this->digito = $digito;

        return $this;
    }

    /**
     * Get digito
     *
     * @return string
     */
    public function getDigito()
    {
        return $this->digito;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Agencia
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set bancoid
     *
     * @param \OTNCore\Entity\Banco $bancoid
     *
     * @return Agencia
     */
    public function setBancoid(\OTNCore\Entity\Banco $bancoid = null)
    {
        $this->bancoid = $bancoid;

        return $this;
    }

    /**
     * Get bancoid
     *
     * @return \OTNCore\Entity\Banco
     */
    public function getBancoid()
    {
        return $this->bancoid;
    }
}
