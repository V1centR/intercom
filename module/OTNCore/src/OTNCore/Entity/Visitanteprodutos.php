<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Visitanteprodutos
 *
 * @ORM\Table(name="VisitanteProdutos", indexes={@ORM\Index(name="FK_VisitanteProdutos_Produto", columns={"produtoId"}), @ORM\Index(name="FK_VisitanteProdutos_Visitante", columns={"visitanteId"})})
 * @ORM\Entity
 */
class Visitanteprodutos
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
     * @var \Visitante
     *
     * @ORM\ManyToOne(targetEntity="Visitante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visitanteId", referencedColumnName="id")
     * })
     */
    private $visitanteid;



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
     * @return Visitanteprodutos
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
     * Set visitanteid
     *
     * @param \OTNCore\Entity\Visitante $visitanteid
     *
     * @return Visitanteprodutos
     */
    public function setVisitanteid(\OTNCore\Entity\Visitante $visitanteid = null)
    {
        $this->visitanteid = $visitanteid;

        return $this;
    }

    /**
     * Get visitanteid
     *
     * @return \OTNCore\Entity\Visitante
     */
    public function getVisitanteid()
    {
        return $this->visitanteid;
    }
}
