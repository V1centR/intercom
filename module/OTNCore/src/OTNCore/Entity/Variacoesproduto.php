<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Variacoesproduto
 *
 * @ORM\Table(name="VariacoesProduto", indexes={@ORM\Index(name="FK_VariacoesProduto_Produto", columns={"produtoId"}), @ORM\Index(name="FK_VariacoesProduto_Variacao", columns={"variacaoId"})})
 * @ORM\Entity
 */
class Variacoesproduto
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
     * @var \Produto
     *
     * @ORM\ManyToOne(targetEntity="Produto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produtoId", referencedColumnName="id")
     * })
     */
    private $produtoid;

    /**
     * @var \Variacao
     *
     * @ORM\ManyToOne(targetEntity="Variacao")
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
     * Set produtoid
     *
     * @param \OTNCore\Entity\Produto $produtoid
     *
     * @return Variacoesproduto
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
     * @param \OTNCore\Entity\Variacao $variacaoid
     *
     * @return Variacoesproduto
     */
    public function setVariacaoid(\OTNCore\Entity\Variacao $variacaoid = null)
    {
        $this->variacaoid = $variacaoid;

        return $this;
    }

    /**
     * Get variacaoid
     *
     * @return \OTNCore\Entity\Variacao
     */
    public function getVariacaoid()
    {
        return $this->variacaoid;
    }
}
