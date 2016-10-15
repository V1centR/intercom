<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Condpagredecard
 *
 * @ORM\Table(name="CondPagRedecard", indexes={@ORM\Index(name="FK_CondPagRedecard_FormaPagamento", columns={"formapagamentoId"}), @ORM\Index(name="FK_CondPagRedecard_Imagem", columns={"imagemId"})})
 * @ORM\Entity
 */
class Condpagredecard
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
     * @ORM\Column(name="aceitavisa", type="string", length=1, nullable=true)
     */
    private $aceitavisa;

    /**
     * @var string
     *
     * @ORM\Column(name="aceitamastercard", type="string", length=1, nullable=true)
     */
    private $aceitamastercard;

    /**
     * @var string
     *
     * @ORM\Column(name="aceitadinners", type="string", length=1, nullable=true)
     */
    private $aceitadinners;

    /**
     * @var string
     *
     * @ORM\Column(name="aceitaaura", type="string", length=1, nullable=true)
     */
    private $aceitaaura;

    /**
     * @var string
     *
     * @ORM\Column(name="chavefiliacao", type="string", length=50, nullable=true)
     */
    private $chavefiliacao;

    /**
     * @var string
     *
     * @ORM\Column(name="AVS", type="string", length=10, nullable=true)
     */
    private $avs;

    /**
     * @var string
     *
     * @ORM\Column(name="formatoTID", type="string", length=1, nullable=true)
     */
    private $formatotid;

    /**
     * @var integer
     *
     * @ORM\Column(name="parcelaate", type="integer", nullable=true)
     */
    private $parcelaate;

    /**
     * @var string
     *
     * @ORM\Column(name="cobrajuros", type="string", length=1, nullable=true)
     */
    private $cobrajuros;

    /**
     * @var string
     *
     * @ORM\Column(name="percjuros", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $percjuros;

    /**
     * @var string
     *
     * @ORM\Column(name="valorminimo", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valorminimo;

    /**
     * @var string
     *
     * @ORM\Column(name="valorpedidominimo", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valorpedidominimo;

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
     * @return Condpagredecard
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
     * @return Condpagredecard
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
     * @return Condpagredecard
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
     * @return Condpagredecard
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
     * @return Condpagredecard
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
     * Set aceitavisa
     *
     * @param string $aceitavisa
     *
     * @return Condpagredecard
     */
    public function setAceitavisa($aceitavisa)
    {
        $this->aceitavisa = $aceitavisa;

        return $this;
    }

    /**
     * Get aceitavisa
     *
     * @return string
     */
    public function getAceitavisa()
    {
        return $this->aceitavisa;
    }

    /**
     * Set aceitamastercard
     *
     * @param string $aceitamastercard
     *
     * @return Condpagredecard
     */
    public function setAceitamastercard($aceitamastercard)
    {
        $this->aceitamastercard = $aceitamastercard;

        return $this;
    }

    /**
     * Get aceitamastercard
     *
     * @return string
     */
    public function getAceitamastercard()
    {
        return $this->aceitamastercard;
    }

    /**
     * Set aceitadinners
     *
     * @param string $aceitadinners
     *
     * @return Condpagredecard
     */
    public function setAceitadinners($aceitadinners)
    {
        $this->aceitadinners = $aceitadinners;

        return $this;
    }

    /**
     * Get aceitadinners
     *
     * @return string
     */
    public function getAceitadinners()
    {
        return $this->aceitadinners;
    }

    /**
     * Set aceitaaura
     *
     * @param string $aceitaaura
     *
     * @return Condpagredecard
     */
    public function setAceitaaura($aceitaaura)
    {
        $this->aceitaaura = $aceitaaura;

        return $this;
    }

    /**
     * Get aceitaaura
     *
     * @return string
     */
    public function getAceitaaura()
    {
        return $this->aceitaaura;
    }

    /**
     * Set chavefiliacao
     *
     * @param string $chavefiliacao
     *
     * @return Condpagredecard
     */
    public function setChavefiliacao($chavefiliacao)
    {
        $this->chavefiliacao = $chavefiliacao;

        return $this;
    }

    /**
     * Get chavefiliacao
     *
     * @return string
     */
    public function getChavefiliacao()
    {
        return $this->chavefiliacao;
    }

    /**
     * Set avs
     *
     * @param string $avs
     *
     * @return Condpagredecard
     */
    public function setAvs($avs)
    {
        $this->avs = $avs;

        return $this;
    }

    /**
     * Get avs
     *
     * @return string
     */
    public function getAvs()
    {
        return $this->avs;
    }

    /**
     * Set formatotid
     *
     * @param string $formatotid
     *
     * @return Condpagredecard
     */
    public function setFormatotid($formatotid)
    {
        $this->formatotid = $formatotid;

        return $this;
    }

    /**
     * Get formatotid
     *
     * @return string
     */
    public function getFormatotid()
    {
        return $this->formatotid;
    }

    /**
     * Set parcelaate
     *
     * @param integer $parcelaate
     *
     * @return Condpagredecard
     */
    public function setParcelaate($parcelaate)
    {
        $this->parcelaate = $parcelaate;

        return $this;
    }

    /**
     * Get parcelaate
     *
     * @return integer
     */
    public function getParcelaate()
    {
        return $this->parcelaate;
    }

    /**
     * Set cobrajuros
     *
     * @param string $cobrajuros
     *
     * @return Condpagredecard
     */
    public function setCobrajuros($cobrajuros)
    {
        $this->cobrajuros = $cobrajuros;

        return $this;
    }

    /**
     * Get cobrajuros
     *
     * @return string
     */
    public function getCobrajuros()
    {
        return $this->cobrajuros;
    }

    /**
     * Set percjuros
     *
     * @param string $percjuros
     *
     * @return Condpagredecard
     */
    public function setPercjuros($percjuros)
    {
        $this->percjuros = $percjuros;

        return $this;
    }

    /**
     * Get percjuros
     *
     * @return string
     */
    public function getPercjuros()
    {
        return $this->percjuros;
    }

    /**
     * Set valorminimo
     *
     * @param string $valorminimo
     *
     * @return Condpagredecard
     */
    public function setValorminimo($valorminimo)
    {
        $this->valorminimo = $valorminimo;

        return $this;
    }

    /**
     * Get valorminimo
     *
     * @return string
     */
    public function getValorminimo()
    {
        return $this->valorminimo;
    }

    /**
     * Set valorpedidominimo
     *
     * @param string $valorpedidominimo
     *
     * @return Condpagredecard
     */
    public function setValorpedidominimo($valorpedidominimo)
    {
        $this->valorpedidominimo = $valorpedidominimo;

        return $this;
    }

    /**
     * Get valorpedidominimo
     *
     * @return string
     */
    public function getValorpedidominimo()
    {
        return $this->valorpedidominimo;
    }

    /**
     * Set obstipopagto
     *
     * @param string $obstipopagto
     *
     * @return Condpagredecard
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
     * @return Condpagredecard
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
     * @return Condpagredecard
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
     * @return Condpagredecard
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
