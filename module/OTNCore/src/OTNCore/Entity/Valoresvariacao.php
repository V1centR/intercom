<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Valoresvariacao
 *
 * @ORM\Table(name="ValoresVariacao", indexes={@ORM\Index(name="FK_ValoresVariacao_VariacaoPropriedade", columns={"variacaopropriedadeId"}), @ORM\Index(name="FK_ValorPropriedade_Imagem", columns={"imagemId"}), @ORM\Index(name="FK_ValorPropriedade_Produto", columns={"produtoId"})})
 * @ORM\Entity
 */
class Valoresvariacao
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
     * @ORM\Column(name="valorunitario", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valorunitario;

    /**
     * @var string
     *
     * @ORM\Column(name="valorpromocional", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valorpromocional;

    /**
     * @var string
     *
     * @ORM\Column(name="peso", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $peso;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $quantidade;

    /**
     * @var integer
     *
     * @ORM\Column(name="comprimento", type="integer", nullable=true)
     */
    private $comprimento;

    /**
     * @var integer
     *
     * @ORM\Column(name="largura", type="integer", nullable=true)
     */
    private $largura;

    /**
     * @var integer
     *
     * @ORM\Column(name="altura", type="integer", nullable=true)
     */
    private $altura;

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=50, nullable=true)
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="exibir", type="string", length=1, nullable=true)
     */
    private $exibir;

    /**
     * @var \Variacaopropriedade
     *
     * @ORM\ManyToOne(targetEntity="Variacaopropriedade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="variacaopropriedadeId", referencedColumnName="id")
     * })
     */
    private $variacaopropriedadeid;

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
     * @var \Produto
     *
     * @ORM\ManyToOne(targetEntity="Produto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produtoId", referencedColumnName="id")
     * })
     */
    private $produtoid;



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
     * Set valorunitario
     *
     * @param string $valorunitario
     *
     * @return Valoresvariacao
     */
    public function setValorunitario($valorunitario)
    {
        $this->valorunitario = $valorunitario;

        return $this;
    }

    /**
     * Get valorunitario
     *
     * @return string
     */
    public function getValorunitario()
    {
        return $this->valorunitario;
    }

    /**
     * Set valorpromocional
     *
     * @param string $valorpromocional
     *
     * @return Valoresvariacao
     */
    public function setValorpromocional($valorpromocional)
    {
        $this->valorpromocional = $valorpromocional;

        return $this;
    }

    /**
     * Get valorpromocional
     *
     * @return string
     */
    public function getValorpromocional()
    {
        return $this->valorpromocional;
    }

    /**
     * Set peso
     *
     * @param string $peso
     *
     * @return Valoresvariacao
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return string
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return Valoresvariacao
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return string
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set comprimento
     *
     * @param integer $comprimento
     *
     * @return Valoresvariacao
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get comprimento
     *
     * @return integer
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Set largura
     *
     * @param integer $largura
     *
     * @return Valoresvariacao
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Get largura
     *
     * @return integer
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set altura
     *
     * @param integer $altura
     *
     * @return Valoresvariacao
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return integer
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set sku
     *
     * @param string $sku
     *
     * @return Valoresvariacao
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set exibir
     *
     * @param string $exibir
     *
     * @return Valoresvariacao
     */
    public function setExibir($exibir)
    {
        $this->exibir = $exibir;

        return $this;
    }

    /**
     * Get exibir
     *
     * @return string
     */
    public function getExibir()
    {
        return $this->exibir;
    }

    /**
     * Set variacaopropriedadeid
     *
     * @param \OTNCore\Entity\Variacaopropriedade $variacaopropriedadeid
     *
     * @return Valoresvariacao
     */
    public function setVariacaopropriedadeid(\OTNCore\Entity\Variacaopropriedade $variacaopropriedadeid = null)
    {
        $this->variacaopropriedadeid = $variacaopropriedadeid;

        return $this;
    }

    /**
     * Get variacaopropriedadeid
     *
     * @return \OTNCore\Entity\Variacaopropriedade
     */
    public function getVariacaopropriedadeid()
    {
        return $this->variacaopropriedadeid;
    }

    /**
     * Set imagemid
     *
     * @param \OTNCore\Entity\Imagem $imagemid
     *
     * @return Valoresvariacao
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

    /**
     * Set produtoid
     *
     * @param \OTNCore\Entity\Produto $produtoid
     *
     * @return Valoresvariacao
     */
    public function setProdutoid(\OTNCore\Entity\Produto $produtoid = null)
    {
        $this->produtoid = $produtoid;

        return $this;
    }

    /**
     * Get produtoid
     *
     * @return \OTNCore\Entity\Produto
     */
    public function getProdutoid()
    {
        return $this->produtoid;
    }
}
