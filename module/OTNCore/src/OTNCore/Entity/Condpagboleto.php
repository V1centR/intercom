<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Condpagboleto
 *
 * @ORM\Table(name="CondPagBoleto", indexes={@ORM\Index(name="FK_CondPagBoleto_Imagem", columns={"imagemId"})})
 * @ORM\Entity
 */
class Condpagboleto
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
     * @var integer
     *
     * @ORM\Column(name="formapagamentoId", type="integer", nullable=true)
     */
    private $formapagamentoid;

    /**
     * @var integer
     *
     * @ORM\Column(name="contacorrenteId", type="integer", nullable=true)
     */
    private $contacorrenteid;

    /**
     * @var string
     *
     * @ORM\Column(name="ativo", type="string", length=1, nullable=true)
     */
    private $ativo;

    /**
     * @var string
     *
     * @ORM\Column(name="disponivelLojaVirtual", type="string", length=1, nullable=true)
     */
    private $disponivellojavirtual;

    /**
     * @var string
     *
     * @ORM\Column(name="carteira", type="string", length=3, nullable=true)
     */
    private $carteira;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoconvenio", type="string", length=50, nullable=true)
     */
    private $codigoconvenio;

    /**
     * @var string
     *
     * @ORM\Column(name="percentualdesconto", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $percentualdesconto;

    /**
     * @var string
     *
     * @ORM\Column(name="obstipopagto", type="string", length=255, nullable=true)
     */
    private $obstipopagto;

    /**
     * @var string
     *
     * @ORM\Column(name="obspedido", type="string", length=255, nullable=true)
     */
    private $obspedido;

    /**
     * @var \Imagem
     *
     * @ORM\ManyToOne(targetEntity="Imagem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imagemId", referencedColumnName="id")
     * })
     */
    private $imagemid;



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
     * Set formapagamentoid
     *
     * @param integer $formapagamentoid
     *
     * @return Condpagboleto
     */
    public function setFormapagamentoid($formapagamentoid)
    {
        $this->formapagamentoid = $formapagamentoid;

        return $this;
    }

    /**
     * Get formapagamentoid
     *
     * @return integer
     */
    public function getFormapagamentoid()
    {
        return $this->formapagamentoid;
    }

    /**
     * Set contacorrenteid
     *
     * @param integer $contacorrenteid
     *
     * @return Condpagboleto
     */
    public function setContacorrenteid($contacorrenteid)
    {
        $this->contacorrenteid = $contacorrenteid;

        return $this;
    }

    /**
     * Get contacorrenteid
     *
     * @return integer
     */
    public function getContacorrenteid()
    {
        return $this->contacorrenteid;
    }

    /**
     * Set ativo
     *
     * @param string $ativo
     *
     * @return Condpagboleto
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return string
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set disponivellojavirtual
     *
     * @param string $disponivellojavirtual
     *
     * @return Condpagboleto
     */
    public function setDisponivellojavirtual($disponivellojavirtual)
    {
        $this->disponivellojavirtual = $disponivellojavirtual;

        return $this;
    }

    /**
     * Get disponivellojavirtual
     *
     * @return string
     */
    public function getDisponivellojavirtual()
    {
        return $this->disponivellojavirtual;
    }

    /**
     * Set carteira
     *
     * @param string $carteira
     *
     * @return Condpagboleto
     */
    public function setCarteira($carteira)
    {
        $this->carteira = $carteira;

        return $this;
    }

    /**
     * Get carteira
     *
     * @return string
     */
    public function getCarteira()
    {
        return $this->carteira;
    }

    /**
     * Set codigoconvenio
     *
     * @param string $codigoconvenio
     *
     * @return Condpagboleto
     */
    public function setCodigoconvenio($codigoconvenio)
    {
        $this->codigoconvenio = $codigoconvenio;

        return $this;
    }

    /**
     * Get codigoconvenio
     *
     * @return string
     */
    public function getCodigoconvenio()
    {
        return $this->codigoconvenio;
    }

    /**
     * Set percentualdesconto
     *
     * @param string $percentualdesconto
     *
     * @return Condpagboleto
     */
    public function setPercentualdesconto($percentualdesconto)
    {
        $this->percentualdesconto = $percentualdesconto;

        return $this;
    }

    /**
     * Get percentualdesconto
     *
     * @return string
     */
    public function getPercentualdesconto()
    {
        return $this->percentualdesconto;
    }

    /**
     * Set obstipopagto
     *
     * @param string $obstipopagto
     *
     * @return Condpagboleto
     */
    public function setObstipopagto($obstipopagto)
    {
        $this->obstipopagto = $obstipopagto;

        return $this;
    }

    /**
     * Get obstipopagto
     *
     * @return string
     */
    public function getObstipopagto()
    {
        return $this->obstipopagto;
    }

    /**
     * Set obspedido
     *
     * @param string $obspedido
     *
     * @return Condpagboleto
     */
    public function setObspedido($obspedido)
    {
        $this->obspedido = $obspedido;

        return $this;
    }

    /**
     * Get obspedido
     *
     * @return string
     */
    public function getObspedido()
    {
        return $this->obspedido;
    }

    /**
     * Set imagemid
     *
     * @param \OTNCore\Entity\Imagem $imagemid
     *
     * @return Condpagboleto
     */
    public function setImagemid(\OTNCore\Entity\Imagem $imagemid = null)
    {
        $this->imagemid = $imagemid;

        return $this;
    }

    /**
     * Get imagemid
     *
     * @return \OTNCore\Entity\Imagem
     */
    public function getImagemid()
    {
        return $this->imagemid;
    }
}
