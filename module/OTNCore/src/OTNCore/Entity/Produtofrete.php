<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Produtofrete
 *
 * @ORM\Table(name="ProdutoFrete", indexes={@ORM\Index(name="FK_ProdutoFrete_Frete", columns={"freteId"}), @ORM\Index(name="FK_ProdutoFrete_Produto", columns={"produtoId"})})
 * @ORM\Entity
 */
class Produtofrete
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
     * @var \Frete
     *
     * @ORM\ManyToOne(targetEntity="Frete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="freteId", referencedColumnName="id")
     * })
     */
    private $freteid;

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
     * Set freteid
     *
     * @param \OTNCore\Entity\Frete $freteid
     *
     * @return Produtofrete
     */
    public function setFreteid(\OTNCore\Entity\Frete $freteid = null)
    {
        $this->freteid = $freteid;

        return $this;
    }

    /**
     * Get freteid
     *
     * @return \OTNCore\Entity\Frete
     */
    public function getFreteid()
    {
        return $this->freteid;
    }

    /**
     * Set produtoid
     *
     * @param \OTNCore\Entity\Produto $produtoid
     *
     * @return Produtofrete
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
