<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Movfinanceira
 *
 * @ORM\Table(name="MovFinanceira", indexes={@ORM\Index(name="IXFK_MovFinanceira_Empresa", columns={"empresaId"})})
 * @ORM\Entity
 */
class Movfinanceira
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
     * @var \DateTime
     *
     * @ORM\Column(name="datahora", type="datetime", nullable=true)
     */
    private $datahora;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=120, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="debcre", type="string", length=1, nullable=true)
     */
    private $debcre;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresaId", referencedColumnName="id")
     * })
     */
    private $empresaid;



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
     * Set datahora
     *
     * @param \DateTime $datahora
     *
     * @return Movfinanceira
     */
    public function setDatahora($datahora)
    {
        $this->datahora = $datahora;

        return $this;
    }

    /**
     * Get datahora
     *
     * @return \DateTime
     */
    public function getDatahora()
    {
        return $this->datahora;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Movfinanceira
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set debcre
     *
     * @param string $debcre
     *
     * @return Movfinanceira
     */
    public function setDebcre($debcre)
    {
        $this->debcre = $debcre;

        return $this;
    }

    /**
     * Get debcre
     *
     * @return string
     */
    public function getDebcre()
    {
        return $this->debcre;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return Movfinanceira
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set empresaid
     *
     * @param \OTNCore\Entity\Empresa $empresaid
     *
     * @return Movfinanceira
     */
    public function setEmpresaid(\OTNCore\Entity\Empresa $empresaid = null)
    {
        $this->empresaid = $empresaid;

        return $this;
    }

    /**
     * Get empresaid
     *
     * @return \OTNCore\Entity\Empresa
     */
    public function getEmpresaid()
    {
        return $this->empresaid;
    }
}
