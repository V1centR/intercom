<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Condpagpaypal
 *
 * @ORM\Table(name="CondPagPaypal", indexes={@ORM\Index(name="FK_CondPagPaypal_FormaPagamento", columns={"formapagamentoId"}), @ORM\Index(name="FK_CondPagPaypal_Imagem", columns={"imagemId"})})
 * @ORM\Entity
 */
class Condpagpaypal
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
     * @ORM\Column(name="ativo", type="string", length=1, nullable=true)
     */
    private $ativo;

    /**
     * @var string
     *
     * @ORM\Column(name="textolojavirtual", type="string", length=50, nullable=true)
     */
    private $textolojavirtual;

    /**
     * @var string
     *
     * @ORM\Column(name="disponivellojavirtual", type="string", length=1, nullable=true)
     */
    private $disponivellojavirtual;

    /**
     * @var string
     *
     * @ORM\Column(name="adicionarsubtrair", type="string", length=1, nullable=true)
     */
    private $adicionarsubtrair;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="nomeusuariointerface", type="string", length=50, nullable=true)
     */
    private $nomeusuariointerface;

    /**
     * @var string
     *
     * @ORM\Column(name="senhainterface", type="string", length=50, nullable=true)
     */
    private $senhainterface;

    /**
     * @var string
     *
     * @ORM\Column(name="assinatura", type="string", length=50, nullable=true)
     */
    private $assinatura;

    /**
     * @var string
     *
     * @ORM\Column(name="moeda", type="string", length=2, nullable=true)
     */
    private $moeda;

    /**
     * @var string
     *
     * @ORM\Column(name="valormoeda", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valormoeda;

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
     * @var \Formapagamento
     *
     * @ORM\ManyToOne(targetEntity="Formapagamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formapagamentoId", referencedColumnName="id")
     * })
     */
    private $formapagamentoid;

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
     * Set ativo
     *
     * @param string $ativo
     *
     * @return Condpagpaypal
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
     * Set textolojavirtual
     *
     * @param string $textolojavirtual
     *
     * @return Condpagpaypal
     */
    public function setTextolojavirtual($textolojavirtual)
    {
        $this->textolojavirtual = $textolojavirtual;

        return $this;
    }

    /**
     * Get textolojavirtual
     *
     * @return string
     */
    public function getTextolojavirtual()
    {
        return $this->textolojavirtual;
    }

    /**
     * Set disponivellojavirtual
     *
     * @param string $disponivellojavirtual
     *
     * @return Condpagpaypal
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
     * Set adicionarsubtrair
     *
     * @param string $adicionarsubtrair
     *
     * @return Condpagpaypal
     */
    public function setAdicionarsubtrair($adicionarsubtrair)
    {
        $this->adicionarsubtrair = $adicionarsubtrair;

        return $this;
    }

    /**
     * Get adicionarsubtrair
     *
     * @return string
     */
    public function getAdicionarsubtrair()
    {
        return $this->adicionarsubtrair;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return Condpagpaypal
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
     * Set nomeusuariointerface
     *
     * @param string $nomeusuariointerface
     *
     * @return Condpagpaypal
     */
    public function setNomeusuariointerface($nomeusuariointerface)
    {
        $this->nomeusuariointerface = $nomeusuariointerface;

        return $this;
    }

    /**
     * Get nomeusuariointerface
     *
     * @return string
     */
    public function getNomeusuariointerface()
    {
        return $this->nomeusuariointerface;
    }

    /**
     * Set senhainterface
     *
     * @param string $senhainterface
     *
     * @return Condpagpaypal
     */
    public function setSenhainterface($senhainterface)
    {
        $this->senhainterface = $senhainterface;

        return $this;
    }

    /**
     * Get senhainterface
     *
     * @return string
     */
    public function getSenhainterface()
    {
        return $this->senhainterface;
    }

    /**
     * Set assinatura
     *
     * @param string $assinatura
     *
     * @return Condpagpaypal
     */
    public function setAssinatura($assinatura)
    {
        $this->assinatura = $assinatura;

        return $this;
    }

    /**
     * Get assinatura
     *
     * @return string
     */
    public function getAssinatura()
    {
        return $this->assinatura;
    }

    /**
     * Set moeda
     *
     * @param string $moeda
     *
     * @return Condpagpaypal
     */
    public function setMoeda($moeda)
    {
        $this->moeda = $moeda;

        return $this;
    }

    /**
     * Get moeda
     *
     * @return string
     */
    public function getMoeda()
    {
        return $this->moeda;
    }

    /**
     * Set valormoeda
     *
     * @param string $valormoeda
     *
     * @return Condpagpaypal
     */
    public function setValormoeda($valormoeda)
    {
        $this->valormoeda = $valormoeda;

        return $this;
    }

    /**
     * Get valormoeda
     *
     * @return string
     */
    public function getValormoeda()
    {
        return $this->valormoeda;
    }

    /**
     * Set obstipopagto
     *
     * @param string $obstipopagto
     *
     * @return Condpagpaypal
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
     * @return Condpagpaypal
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
     * Set formapagamentoid
     *
     * @param \OTNCore\Entity\Formapagamento $formapagamentoid
     *
     * @return Condpagpaypal
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
     * Set imagemid
     *
     * @param \OTNCore\Entity\Imagem $imagemid
     *
     * @return Condpagpaypal
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
