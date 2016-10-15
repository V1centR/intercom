<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Carrinhoitens
 *
 * @ORM\Table(name="CarrinhoItens", indexes={@ORM\Index(name="FK_CarrinhoItens_Carrinho", columns={"carrinhoId"}), @ORM\Index(name="FK_CarrinhoItens_Produto", columns={"produtoId"}), @ORM\Index(name="FK_CarrinhoItens_ValoresVariacao", columns={"variacaoId"})})
 * @ORM\Entity
 */
class Carrinhoitens
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
     * @ORM\Column(name="quantidade", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $quantidade;

    /**
     * @var \Carrinho
     *
     * @ORM\ManyToOne(targetEntity="Carrinho")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="carrinhoId", referencedColumnName="id")
     * })
     */
    private $carrinhoid;

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
     * @var \Valoresvariacao
     *
     * @ORM\ManyToOne(targetEntity="Valoresvariacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="variacaoId", referencedColumnName="id")
     * })
     */
    private $variacaoid;



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
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return Carrinhoitens
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
     * Set carrinhoid
     *
     * @param \OTNCore\Entity\Carrinho $carrinhoid
     *
     * @return Carrinhoitens
     */
    public function setCarrinhoid(\OTNCore\Entity\Carrinho $carrinhoid = null)
    {
        $this->carrinhoid = $carrinhoid;

        return $this;
    }

    /**
     * Get carrinhoid
     *
     * @return \OTNCore\Entity\Carrinho
     */
    public function getCarrinhoid()
    {
        return $this->carrinhoid;
    }

    /**
     * Set produtoid
     *
     * @param \OTNCore\Entity\Produto $produtoid
     *
     * @return Carrinhoitens
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
     * Set variacaoid
     *
     * @param \OTNCore\Entity\Valoresvariacao $variacaoid
     *
     * @return Carrinhoitens
     */
    public function setVariacaoid(\OTNCore\Entity\Valoresvariacao $variacaoid = null)
    {
        $this->variacaoid = $variacaoid;

        return $this;
    }

    /**
     * Get variacaoid
     *
     * @return \OTNCore\Entity\Valoresvariacao
     */
    public function getVariacaoid()
    {
        return $this->variacaoid;
    }
}
