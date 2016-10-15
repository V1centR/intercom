<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Produtotag
 *
 * @ORM\Table(name="ProdutoTag", indexes={@ORM\Index(name="FK_ProdutoTag_Produto", columns={"produtoId"}), @ORM\Index(name="FK_ProdutoTag_TagPesquisa", columns={"tagId"})})
 * @ORM\Entity
 */
class Produtotag
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
     * @var \Tagpesquisa
     *
     * @ORM\ManyToOne(targetEntity="Tagpesquisa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tagId", referencedColumnName="id")
     * })
     */
    private $tagid;



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
     * @return Produtotag
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
     * Set tagid
     *
     * @param \OTNCore\Entity\Tagpesquisa $tagid
     *
     * @return Produtotag
     */
    public function setTagid(\OTNCore\Entity\Tagpesquisa $tagid = null)
    {
        $this->tagid = $tagid;

        return $this;
    }

    /**
     * Get tagid
     *
     * @return \OTNCore\Entity\Tagpesquisa
     */
    public function getTagid()
    {
        return $this->tagid;
    }
}
