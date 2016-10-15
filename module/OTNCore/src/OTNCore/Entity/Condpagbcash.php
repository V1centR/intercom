<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Condpagbcash
 *
 * @ORM\Table(name="CondPagBCash", indexes={@ORM\Index(name="FK_CondPagBCash_FormaPagamento", columns={"formapagamentoId"}), @ORM\Index(name="FK_CondPagBCash_Imagem", columns={"imagemid"})})
 * @ORM\Entity
 */
class Condpagbcash
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
     * @ORM\Column(name="aceitaaura", type="string", length=1, nullable=true)
     */
    private $aceitaaura;

    /**
     * @var string
     *
     * @ORM\Column(name="aceitahipercard", type="string", length=1, nullable=true)
     */
    private $aceitahipercard;

    /**
     * @var string
     *
     * @ORM\Column(name="aceitaTEF", type="string", length=1, nullable=true)
     */
    private $aceitatef;

    /**
     * @var string
     *
     * @ORM\Column(name="aceitaboleto", type="string", length=10, nullable=true)
     */
    private $aceitaboleto;

    /**
     * @var string
     *
     * @ORM\Column(name="chavedeacesso", type="string", length=50, nullable=true)
     */
    private $chavedeacesso;

    /**
     * @var string
     *
     * @ORM\Column(name="emailcadastrobcash", type="string", length=60, nullable=true)
     */
    private $emailcadastrobcash;

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
     * @ORM\Column(name="valorminimopedido", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valorminimopedido;

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
     *   @ORM\JoinColumn(name="imagemid", referencedColumnName="id")
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
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * Set aceitaamerican
     *
     * @param string $aceitaamerican
     *
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * Set aceitaaura
     *
     * @param string $aceitaaura
     *
     * @return Condpagbcash
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
     * Set aceitahipercard
     *
     * @param string $aceitahipercard
     *
     * @return Condpagbcash
     */
    public function setAceitahipercard($aceitahipercard)
    {
        $this->aceitahipercard = $aceitahipercard;

        return $this;
    }

    /**
     * Get aceitahipercard
     *
     * @return string
     */
    public function getAceitahipercard()
    {
        return $this->aceitahipercard;
    }

    /**
     * Set aceitatef
     *
     * @param string $aceitatef
     *
     * @return Condpagbcash
     */
    public function setAceitatef($aceitatef)
    {
        $this->aceitatef = $aceitatef;

        return $this;
    }

    /**
     * Get aceitatef
     *
     * @return string
     */
    public function getAceitatef()
    {
        return $this->aceitatef;
    }

    /**
     * Set aceitaboleto
     *
     * @param string $aceitaboleto
     *
     * @return Condpagbcash
     */
    public function setAceitaboleto($aceitaboleto)
    {
        $this->aceitaboleto = $aceitaboleto;

        return $this;
    }

    /**
     * Get aceitaboleto
     *
     * @return string
     */
    public function getAceitaboleto()
    {
        return $this->aceitaboleto;
    }

    /**
     * Set chavedeacesso
     *
     * @param string $chavedeacesso
     *
     * @return Condpagbcash
     */
    public function setChavedeacesso($chavedeacesso)
    {
        $this->chavedeacesso = $chavedeacesso;

        return $this;
    }

    /**
     * Get chavedeacesso
     *
     * @return string
     */
    public function getChavedeacesso()
    {
        return $this->chavedeacesso;
    }

    /**
     * Set emailcadastrobcash
     *
     * @param string $emailcadastrobcash
     *
     * @return Condpagbcash
     */
    public function setEmailcadastrobcash($emailcadastrobcash)
    {
        $this->emailcadastrobcash = $emailcadastrobcash;

        return $this;
    }

    /**
     * Get emailcadastrobcash
     *
     * @return string
     */
    public function getEmailcadastrobcash()
    {
        return $this->emailcadastrobcash;
    }

    /**
     * Set parcelaate
     *
     * @param integer $parcelaate
     *
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * Set valorminimopedido
     *
     * @param string $valorminimopedido
     *
     * @return Condpagbcash
     */
    public function setValorminimopedido($valorminimopedido)
    {
        $this->valorminimopedido = $valorminimopedido;

        return $this;
    }

    /**
     * Get valorminimopedido
     *
     * @return string
     */
    public function getValorminimopedido()
    {
        return $this->valorminimopedido;
    }

    /**
     * Set obstipopagto
     *
     * @param string $obstipopagto
     *
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * @return Condpagbcash
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
     * @return Condpagbcash
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
