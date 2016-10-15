<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Produtosrelacionados
 *
 * @ORM\Table(name="ProdutosRelacionados", indexes={@ORM\Index(name="FK_ProdutosRelacionados_Produto", columns={"produtoId"}), @ORM\Index(name="FK_ProdutosRelacionados_Produto_02", columns={"produtorelacionadoId"})})
 * @ORM\Entity
 */
class Produtosrelacionados
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
     * @ORM\Column(name="tiporelacionamento", type="string", length=1, nullable=true)
     */
    private $tiporelacionamento;

    /**
     * @var string
     *
     * @ORM\Column(name="descontocomprejunto", type="string", length=1, nullable=true)
     */
    private $descontocomprejunto;

    /**
     * @var string
     *
     * @ORM\Column(name="valorcomprejunto", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valorcomprejunto;

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
     * @var \Produto
     *
     * @ORM\ManyToOne(targetEntity="Produto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produtorelacionadoId", referencedColumnName="id")
     * })
     */
    private $produtorelacionadoid;



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
     * Set tiporelacionamento
     *
     * @param string $tiporelacionamento
     *
     * @return Produtosrelacionados
     */
    public function setTiporelacionamento($tiporelacionamento)
    {
        $this->tiporelacionamento = $tiporelacionamento;

        return $this;
    }

    /**
     * Get tiporelacionamento
     *
     * @return string
     */
    public function getTiporelacionamento()
    {
        return $this->tiporelacionamento;
    }

    /**
     * Set descontocomprejunto
     *
     * @param string $descontocomprejunto
     *
     * @return Produtosrelacionados
     */
    public function setDescontocomprejunto($descontocomprejunto)
    {
        $this->descontocomprejunto = $descontocomprejunto;

        return $this;
    }

    /**
     * Get descontocomprejunto
     *
     * @return string
     */
    public function getDescontocomprejunto()
    {
        return $this->descontocomprejunto;
    }

    /**
     * Set valorcomprejunto
     *
     * @param string $valorcomprejunto
     *
     * @return Produtosrelacionados
     */
    public function setValorcomprejunto($valorcomprejunto)
    {
        $this->valorcomprejunto = $valorcomprejunto;

        return $this;
    }

    /**
     * Get valorcomprejunto
     *
     * @return string
     */
    public function getValorcomprejunto()
    {
        return $this->valorcomprejunto;
    }

    /**
     * Set produtoid
     *
     * @param \OTNCore\Entity\Produto $produtoid
     *
     * @return Produtosrelacionados
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

    /**
     * Set produtorelacionadoid
     *
     * @param \OTNCore\Entity\Produto $produtorelacionadoid
     *
     * @return Produtosrelacionados
     */
    public function setProdutorelacionadoid(\OTNCore\Entity\Produto $produtorelacionadoid = null)
    {
        $this->produtorelacionadoid = $produtorelacionadoid;

        return $this;
    }

    /**
     * Get produtorelacionadoid
     *
     * @return \OTNCore\Entity\Produto
     */
    public function getProdutorelacionadoid()
    {
        return $this->produtorelacionadoid;
    }
}
