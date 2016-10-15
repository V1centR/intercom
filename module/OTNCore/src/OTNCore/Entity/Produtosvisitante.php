<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Produtosvisitante
 *
 * @ORM\Table(name="ProdutosVisitante", indexes={@ORM\Index(name="FK_ProdutosVisitante_Produto", columns={"produtoId"})})
 * @ORM\Entity
 */
class Produtosvisitante
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
     * @ORM\Column(name="visitante", type="string", length=250, nullable=true)
     */
    private $visitante;

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
     * Set visitante
     *
     * @param string $visitante
     *
     * @return Produtosvisitante
     */
    public function setVisitante($visitante)
    {
        $this->visitante = $visitante;

        return $this;
    }

    /**
     * Get visitante
     *
     * @return string
     */
    public function getVisitante()
    {
        return $this->visitante;
    }

    /**
     * Set produtoid
     *
     * @param \OTNCore\Entity\Produto $produtoid
     *
     * @return Produtosvisitante
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
