<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Estoque
 *
 * @ORM\Table(name="Estoque", indexes={@ORM\Index(name="FK_Estoque_Local", columns={"localId"}), @ORM\Index(name="FK_Estoque_Produto", columns={"produtoId"})})
 * @ORM\Entity
 */
class Estoque
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
     * @ORM\Column(name="quantidade", type="decimal", precision=10, scale=3, nullable=true)
     */
    private $quantidade;

    /**
     * @var \Local
     *
     * @ORM\ManyToOne(targetEntity="Local")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="localId", referencedColumnName="id")
     * })
     */
    private $localid;

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
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return Estoque
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
     * Set localid
     *
     * @param \OTNCore\Entity\Local $localid
     *
     * @return Estoque
     */
    public function setLocalid(\OTNCore\Entity\Local $localid = null)
    {
        $this->localid = $localid;

        return $this;
    }

    /**
     * Get localid
     *
     * @return \OTNCore\Entity\Local
     */
    public function getLocalid()
    {
        return $this->localid;
    }

    /**
     * Set produtoid
     *
     * @param \OTNCore\Entity\Produto $produtoid
     *
     * @return Estoque
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
