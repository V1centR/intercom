<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Produtocaracteristicas
 *
 * @ORM\Table(name="ProdutoCaracteristicas", indexes={@ORM\Index(name="FK_ProdutoCaracteristicas_Caracteristicas", columns={"caracteristicasId"}), @ORM\Index(name="FK_ProdutoCaracteristicas_Produto", columns={"produtoId"})})
 * @ORM\Entity
 */
class Produtocaracteristicas
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
     * @ORM\Column(name="valor", type="string", length=255, nullable=true)
     */
    private $valor;

    /**
     * @var \Caracteristicas
     *
     * @ORM\ManyToOne(targetEntity="Caracteristicas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="caracteristicasId", referencedColumnName="id")
     * })
     */
    private $caracteristicasid;

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
     * Set valor
     *
     * @param string $valor
     *
     * @return Produtocaracteristicas
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set caracteristicasid
     *
     * @param \OTNCore\Entity\Caracteristicas $caracteristicasid
     *
     * @return Produtocaracteristicas
     */
    public function setCaracteristicasid(\OTNCore\Entity\Caracteristicas $caracteristicasid = null)
    {
        $this->caracteristicasid = $caracteristicasid;

        return $this;
    }

    /**
     * Get caracteristicasid
     *
     * @return \OTNCore\Entity\Caracteristicas
     */
    public function getCaracteristicasid()
    {
        return $this->caracteristicasid;
    }

    /**
     * Set produtoid
     *
     * @param \OTNCore\Entity\Produto $produtoid
     *
     * @return Produtocaracteristicas
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
