<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Contacorrente
 *
 * @ORM\Table(name="ContaCorrente", indexes={@ORM\Index(name="FK_ContaCorrente_Agencia", columns={"agenciaId"})})
 * @ORM\Entity
 */
class Contacorrente
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
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var \Agencia
     *
     * @ORM\ManyToOne(targetEntity="Agencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agenciaId", referencedColumnName="id")
     * })
     */
    private $agenciaid;



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
     * @return Contacorrente
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
     * Set nome
     *
     * @param string $nome
     *
     * @return Contacorrente
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
     * Set agenciaid
     *
     * @param \OTNCore\Entity\Agencia $agenciaid
     *
     * @return Contacorrente
     */
    public function setAgenciaid(\OTNCore\Entity\Agencia $agenciaid = null)
    {
        $this->agenciaid = $agenciaid;

        return $this;
    }

    /**
     * Get agenciaid
     *
     * @return \OTNCore\Entity\Agencia
     */
    public function getAgenciaid()
    {
        return $this->agenciaid;
    }
}
