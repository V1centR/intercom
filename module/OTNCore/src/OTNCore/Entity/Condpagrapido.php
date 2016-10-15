<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Condpagrapido
 *
 * @ORM\Table(name="CondPagRapido", indexes={@ORM\Index(name="FK_CondPagRapido_FormaPagamento", columns={"formapagamentoId"}), @ORM\Index(name="FK_CondPagRapido_Imagem", columns={"imagemId"})})
 * @ORM\Entity
 */
class Condpagrapido
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
     * @ORM\Column(name="aceitaamerican", type="string", length=1, nullable=true)
     */
    private $aceitaamerican;

    /**
     * @var string
     *
     * @ORM\Column(name="aceitaelo", type="string", length=1, nullable=true)
     */
    private $aceitaelo;

    /**
     * @var string
     *
     * @ORM\Column(name="chaveintegracao", type="string", length=50, nullable=true)
     */
    private $chaveintegracao;

    /**
     * @var string
     *
     * @ORM\Column(name="filiacao", type="string", length=50, nullable=true)
     */
    private $filiacao;

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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * Set aceitaamerican
     *
     * @param string $aceitaamerican
     *
     * @return Condpagrapido
     */
    public function setAceitaamerican($aceitaamerican)
    {
        $this->aceitaamerican = $aceitaamerican;

        return $this;
    }

    /**
     * Get aceitaamerican
     *
     * @return string
     */
    public function getAceitaamerican()
    {
        return $this->aceitaamerican;
    }

    /**
     * Set aceitaelo
     *
     * @param string $aceitaelo
     *
     * @return Condpagrapido
     */
    public function setAceitaelo($aceitaelo)
    {
        $this->aceitaelo = $aceitaelo;

        return $this;
    }

    /**
     * Get aceitaelo
     *
     * @return string
     */
    public function getAceitaelo()
    {
        return $this->aceitaelo;
    }

    /**
     * Set chaveintegracao
     *
     * @param string $chaveintegracao
     *
     * @return Condpagrapido
     */
    public function setChaveintegracao($chaveintegracao)
    {
        $this->chaveintegracao = $chaveintegracao;

        return $this;
    }

    /**
     * Get chaveintegracao
     *
     * @return string
     */
    public function getChaveintegracao()
    {
        return $this->chaveintegracao;
    }

    /**
     * Set filiacao
     *
     * @param string $filiacao
     *
     * @return Condpagrapido
     */
    public function setFiliacao($filiacao)
    {
        $this->filiacao = $filiacao;

        return $this;
    }

    /**
     * Get filiacao
     *
     * @return string
     */
    public function getFiliacao()
    {
        return $this->filiacao;
    }

    /**
     * Set formatotid
     *
     * @param string $formatotid
     *
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
     * @return Condpagrapido
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
