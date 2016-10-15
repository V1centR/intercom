<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Condpagcartao
 *
 * @ORM\Table(name="CondPagCartao", indexes={@ORM\Index(name="FK_CondPagCartao_FormaPagamento", columns={"formapagamentoId"}), @ORM\Index(name="FK_CondPagCartao_Imagem", columns={"imagemid"})})
 * @ORM\Entity
 */
class Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * Set obstipopagto
     *
     * @param string $obstipopagto
     *
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
     * @return Condpagcartao
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
