<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Condpagcheque
 *
 * @ORM\Table(name="CondPagCheque", indexes={@ORM\Index(name="FK_CondPagCheque_FormaPagamento", columns={"formapagamentoId"}), @ORM\Index(name="FK_CondPagCheque_Imagem", columns={"imagemId"})})
 * @ORM\Entity
 */
class Condpagcheque
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
     * @ORM\Column(name="ativo", type="string", length=10, nullable=true)
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
     * @var integer
     *
     * @ORM\Column(name="parcelas", type="integer", nullable=true)
     */
    private $parcelas;

    /**
     * @var integer
     *
     * @ORM\Column(name="parcelasjuros", type="integer", nullable=true)
     */
    private $parcelasjuros;

    /**
     * @var string
     *
     * @ORM\Column(name="pecentualjuros", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $pecentualjuros;

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
     * @return Condpagcheque
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
     * @return Condpagcheque
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
     * @return Condpagcheque
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
     * Set parcelas
     *
     * @param integer $parcelas
     *
     * @return Condpagcheque
     */
    public function setParcelas($parcelas)
    {
        $this->parcelas = $parcelas;

        return $this;
    }

    /**
     * Get parcelas
     *
     * @return integer
     */
    public function getParcelas()
    {
        return $this->parcelas;
    }

    /**
     * Set parcelasjuros
     *
     * @param integer $parcelasjuros
     *
     * @return Condpagcheque
     */
    public function setParcelasjuros($parcelasjuros)
    {
        $this->parcelasjuros = $parcelasjuros;

        return $this;
    }

    /**
     * Get parcelasjuros
     *
     * @return integer
     */
    public function getParcelasjuros()
    {
        return $this->parcelasjuros;
    }

    /**
     * Set pecentualjuros
     *
     * @param string $pecentualjuros
     *
     * @return Condpagcheque
     */
    public function setPecentualjuros($pecentualjuros)
    {
        $this->pecentualjuros = $pecentualjuros;

        return $this;
    }

    /**
     * Get pecentualjuros
     *
     * @return string
     */
    public function getPecentualjuros()
    {
        return $this->pecentualjuros;
    }

    /**
     * Set valorminimo
     *
     * @param string $valorminimo
     *
     * @return Condpagcheque
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
     * @return Condpagcheque
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
     * Set adicionarsubtrair
     *
     * @param string $adicionarsubtrair
     *
     * @return Condpagcheque
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
     * @return Condpagcheque
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
     * Set obstipopagto
     *
     * @param string $obstipopagto
     *
     * @return Condpagcheque
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
     * @return Condpagcheque
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
     * @return Condpagcheque
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
     * @return Condpagcheque
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
