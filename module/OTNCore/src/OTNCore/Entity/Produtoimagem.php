<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Produtoimagem
 *
 * @ORM\Table(name="ProdutoImagem", indexes={@ORM\Index(name="FK_ProdutoImagem_Imagem", columns={"imagemId"}), @ORM\Index(name="FK_ProdutoImagem_Produto", columns={"produtoId"})})
 * @ORM\Entity
 */
class Produtoimagem
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
     * @var integer
     *
     * @ORM\Column(name="ordem", type="integer", nullable=false)
     */
    private $ordem;

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
     * Set ordem
     *
     * @param integer $ordem
     *
     * @return Produtoimagem
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Get ordem
     *
     * @return integer
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Set imagemid
     *
     * @param \OTNCore\Entity\Imagem $imagemid
     *
     * @return Produtoimagem
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
     * @return Produtoimagem
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
