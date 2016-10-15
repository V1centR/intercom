<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Carrinho
 *
 * @ORM\Table(name="Carrinho", indexes={@ORM\Index(name="FK_Carrinho_Visitante", columns={"visitanteId"})})
 * @ORM\Entity
 */
class Carrinho
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
     * @var integer
     *
     * @ORM\Column(name="freteId", type="integer", nullable=true)
     */
    private $freteid;

    /**
     * @var string
     *
     * @ORM\Column(name="etapa", type="string", length=1, nullable=true)
     */
    private $etapa;

    /**
     * @var integer
     *
     * @ORM\Column(name="enderecoId", type="integer", nullable=true)
     */
    private $enderecoid;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=9, nullable=true)
     */
    private $cep;

    /**
     * @var \Visitante
     *
     * @ORM\ManyToOne(targetEntity="Visitante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visitanteId", referencedColumnName="id")
     * })
     */
    private $visitanteid;



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
     * @return Carrinho
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
     * Set freteid
     *
     * @param integer $freteid
     *
     * @return Carrinho
     */
    public function setFreteid($freteid)
    {
        $this->freteid = $freteid;

        return $this;
    }

    /**
     * Get freteid
     *
     * @return integer
     */
    public function getFreteid()
    {
        return $this->freteid;
    }

    /**
     * Set etapa
     *
     * @param string $etapa
     *
     * @return Carrinho
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;

        return $this;
    }

    /**
     * Get etapa
     *
     * @return string
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * Set enderecoid
     *
     * @param integer $enderecoid
     *
     * @return Carrinho
     */
    public function setEnderecoid($enderecoid)
    {
        $this->enderecoid = $enderecoid;

        return $this;
    }

    /**
     * Get enderecoid
     *
     * @return integer
     */
    public function getEnderecoid()
    {
        return $this->enderecoid;
    }

    /**
     * Set cep
     *
     * @param string $cep
     *
     * @return Carrinho
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set visitanteid
     *
     * @param \OTNCore\Entity\Visitante $visitanteid
     *
     * @return Carrinho
     */
    public function setVisitanteid(\OTNCore\Entity\Visitante $visitanteid = null)
    {
        $this->visitanteid = $visitanteid;

        return $this;
    }

    /**
     * Get visitanteid
     *
     * @return \OTNCore\Entity\Visitante
     */
    public function getVisitanteid()
    {
        return $this->visitanteid;
    }
}
