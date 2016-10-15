<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Pedidos
 *
 * @ORM\Table(name="Pedidos", indexes={@ORM\Index(name="FK_Pedidos_Endereco", columns={"enderecoId"}), @ORM\Index(name="FK_Pedidos_FormaPagamento", columns={"formapagamentoId"}), @ORM\Index(name="FK_Pedidos_Local", columns={"localId"}), @ORM\Index(name="FK_Pedidos_Pessoa", columns={"pessoaId"})})
 * @ORM\Entity
 */
class Pedidos
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
     * @ORM\Column(name="numeropedido", type="integer", nullable=true)
     */
    private $numeropedido;

    /**
     * @var integer
     *
     * @ORM\Column(name="carrinhoId", type="integer", nullable=true)
     */
    private $carrinhoid;

    /**
     * @var integer
     *
     * @ORM\Column(name="statusId", type="integer", nullable=true)
     */
    private $statusid;

    /**
     * @var integer
     *
     * @ORM\Column(name="freteId", type="integer", nullable=true)
     */
    private $freteid;

    /**
     * @var string
     *
     * @ORM\Column(name="valordesconto", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valordesconto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datapedido", type="datetime", nullable=true)
     */
    private $datapedido;

    /**
     * @var string
     *
     * @ORM\Column(name="observacoes", type="string", length=255, nullable=true)
     */
    private $observacoes;

    /**
     * @var string
     *
     * @ORM\Column(name="valorfrete", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valorfrete;

    /**
     * @var string
     *
     * @ORM\Column(name="valortotal", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valortotal;

    /**
     * @var string
     *
     * @ORM\Column(name="localizador", type="string", length=50, nullable=true)
     */
    private $localizador;

    /**
     * @var \Endereco
     *
     * @ORM\ManyToOne(targetEntity="Endereco")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enderecoId", referencedColumnName="id")
     * })
     */
    private $enderecoid;

    /**
     * @var \Formapagamento
     *
     * @ORM\ManyToOne(targetEntity="Formapagamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formapagamentoId", referencedColumnName="id")
     * })
     */
    private $formapagamentoid;

    /**
     * @var \Local
     *
     * @ORM\ManyToOne(targetEntity="Local")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localId", referencedColumnName="id")
     * })
     */
    private $localid;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoaId", referencedColumnName="id")
     * })
     */
    private $pessoaid;



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
     * Set numeropedido
     *
     * @param integer $numeropedido
     *
     * @return Pedidos
     */
    public function setNumeropedido($numeropedido)
    {
        $this->numeropedido = $numeropedido;

        return $this;
    }

    /**
     * Get numeropedido
     *
     * @return integer
     */
    public function getNumeropedido()
    {
        return $this->numeropedido;
    }

    /**
     * Set carrinhoid
     *
     * @param integer $carrinhoid
     *
     * @return Pedidos
     */
    public function setCarrinhoid($carrinhoid)
    {
        $this->carrinhoid = $carrinhoid;

        return $this;
    }

    /**
     * Get carrinhoid
     *
     * @return integer
     */
    public function getCarrinhoid()
    {
        return $this->carrinhoid;
    }

    /**
     * Set statusid
     *
     * @param integer $statusid
     *
     * @return Pedidos
     */
    public function setStatusid($statusid)
    {
        $this->statusid = $statusid;

        return $this;
    }

    /**
     * Get statusid
     *
     * @return integer
     */
    public function getStatusid()
    {
        return $this->statusid;
    }

    /**
     * Set freteid
     *
     * @param integer $freteid
     *
     * @return Pedidos
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
     * Set valordesconto
     *
     * @param string $valordesconto
     *
     * @return Pedidos
     */
    public function setValordesconto($valordesconto)
    {
        $this->valordesconto = $valordesconto;

        return $this;
    }

    /**
     * Get valordesconto
     *
     * @return string
     */
    public function getValordesconto()
    {
        return $this->valordesconto;
    }

    /**
     * Set datapedido
     *
     * @param \DateTime $datapedido
     *
     * @return Pedidos
     */
    public function setDatapedido($datapedido)
    {
        $this->datapedido = $datapedido;

        return $this;
    }

    /**
     * Get datapedido
     *
     * @return \DateTime
     */
    public function getDatapedido()
    {
        return $this->datapedido;
    }

    /**
     * Set observacoes
     *
     * @param string $observacoes
     *
     * @return Pedidos
     */
    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;

        return $this;
    }

    /**
     * Get observacoes
     *
     * @return string
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }

    /**
     * Set valorfrete
     *
     * @param string $valorfrete
     *
     * @return Pedidos
     */
    public function setValorfrete($valorfrete)
    {
        $this->valorfrete = $valorfrete;

        return $this;
    }

    /**
     * Get valorfrete
     *
     * @return string
     */
    public function getValorfrete()
    {
        return $this->valorfrete;
    }

    /**
     * Set valortotal
     *
     * @param string $valortotal
     *
     * @return Pedidos
     */
    public function setValortotal($valortotal)
    {
        $this->valortotal = $valortotal;

        return $this;
    }

    /**
     * Get valortotal
     *
     * @return string
     */
    public function getValortotal()
    {
        return $this->valortotal;
    }

    /**
     * Set localizador
     *
     * @param string $localizador
     *
     * @return Pedidos
     */
    public function setLocalizador($localizador)
    {
        $this->localizador = $localizador;

        return $this;
    }

    /**
     * Get localizador
     *
     * @return string
     */
    public function getLocalizador()
    {
        return $this->localizador;
    }

    /**
     * Set enderecoid
     *
     * @param \OTNCore\Entity\Endereco $enderecoid
     *
     * @return Pedidos
     */
    public function setEnderecoid(\OTNCore\Entity\Endereco $enderecoid = null)
    {
        $this->enderecoid = $enderecoid;

        return $this;
    }

    /**
     * Get enderecoid
     *
     * @return \OTNCore\Entity\Endereco
     */
    public function getEnderecoid()
    {
        return $this->enderecoid;
    }

    /**
     * Set formapagamentoid
     *
     * @param \OTNCore\Entity\Formapagamento $formapagamentoid
     *
     * @return Pedidos
     */
    public function setFormapagamentoid(\OTNCore\Entity\Formapagamento $formapagamentoid = null)
    {
        $this->formapagamentoid = $formapagamentoid;

        return $this;
    }

    /**
     * Get formapagamentoid
     *
     * @return \OTNCore\Entity\Formapagamento
     */
    public function getFormapagamentoid()
    {
        return $this->formapagamentoid;
    }

    /**
     * Set localid
     *
     * @param \OTNCore\Entity\Local $localid
     *
     * @return Pedidos
     */
    public function setLocalid(\OTNCore\Entity\Local $localid = null)
    {
        $this->localid = $localid;

        return $this;
    }

    /**
     * Get localid
     *
     * @return \OTNCore\Entity\Local
     */
    public function getLocalid()
    {
        return $this->localid;
    }

    /**
     * Set pessoaid
     *
     * @param \OTNCore\Entity\Pessoa $pessoaid
     *
     * @return Pedidos
     */
    public function setPessoaid(\OTNCore\Entity\Pessoa $pessoaid = null)
    {
        $this->pessoaid = $pessoaid;

        return $this;
    }

    /**
     * Get pessoaid
     *
     * @return \OTNCore\Entity\Pessoa
     */
    public function getPessoaid()
    {
        return $this->pessoaid;
    }
}
