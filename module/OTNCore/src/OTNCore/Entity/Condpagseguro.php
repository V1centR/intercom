<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Condpagseguro
 *
 * @ORM\Table(name="CondPagSeguro", indexes={@ORM\Index(name="FK_CondPagSeguro_FormaPagamento", columns={"formapagamentoId"}), @ORM\Index(name="FK_CondPagSeguro_Imagem", columns={"imagemId"})})
 * @ORM\Entity
 */
class Condpagseguro
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
     * @ORM\Column(name="emailpagseguro", type="string", length=60, nullable=true)
     */
    private $emailpagseguro;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=50, nullable=true)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="aceitacartao", type="string", length=1, nullable=true)
     */
    private $aceitacartao;

    /**
     * @var integer
     *
     * @ORM\Column(name="parcelaate", type="integer", nullable=true)
     */
    private $parcelaate;

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
     * @return Condpagseguro
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
     * @return Condpagseguro
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
     * @return Condpagseguro
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
     * @return Condpagseguro
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
     * @return Condpagseguro
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
     * Set emailpagseguro
     *
     * @param string $emailpagseguro
     *
     * @return Condpagseguro
     */
    public function setEmailpagseguro($emailpagseguro)
    {
        $this->emailpagseguro = $emailpagseguro;

        return $this;
    }

    /**
     * Get emailpagseguro
     *
     * @return string
     */
    public function getEmailpagseguro()
    {
        return $this->emailpagseguro;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Condpagseguro
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set aceitacartao
     *
     * @param string $aceitacartao
     *
     * @return Condpagseguro
     */
    public function setAceitacartao($aceitacartao)
    {
        $this->aceitacartao = $aceitacartao;

        return $this;
    }

    /**
     * Get aceitacartao
     *
     * @return string
     */
    public function getAceitacartao()
    {
        return $this->aceitacartao;
    }

    /**
     * Set parcelaate
     *
     * @param integer $parcelaate
     *
     * @return Condpagseguro
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
     * Set valorminimo
     *
     * @param string $valorminimo
     *
     * @return Condpagseguro
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
     * @return Condpagseguro
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
     * @return Condpagseguro
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
     * @return Condpagseguro
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
     * @return Condpagseguro
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
     * @return Condpagseguro
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
