<?php

namespace OTNCore\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Acessoproduto
 *
 * @ORM\Table(name="AcessoProduto", indexes={@ORM\Index(name="FK_AcessoProduto_Produto", columns={"produtoId"})})
 * @ORM\Entity
 */
class Acessoproduto
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
     * @var \DateTime
     *
     * @ORM\Column(name="dataacesso", type="date", nullable=false)
     */
    private $dataacesso;

    /**
     * @var integer
     *
     * @ORM\Column(name="acessos", type="integer", nullable=true)
     */
    private $acessos;

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
     * Set dataacesso
     *
     * @param \DateTime $dataacesso
     *
     * @return Acessoproduto
     */
    public function setDataacesso($dataacesso)
    {
        $this->dataacesso = $dataacesso;

        return $this;
    }

    /**
     * Get dataacesso
     *
     * @return \DateTime
     */
    public function getDataacesso()
    {
        return $this->dataacesso;
    }

    /**
     * Set acessos
     *
     * @param integer $acessos
     *
     * @return Acessoproduto
     */
    public function setAcessos($acessos)
    {
        $this->acessos = $acessos;

        return $this;
    }

    /**
     * Get acessos
     *
     * @return integer
     */
    public function getAcessos()
    {
        return $this->acessos;
    }

    /**
     * Set produtoid
     *
     * @param \OTNCore\Entity\Produto $produtoid
     *
     * @return Acessoproduto
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
