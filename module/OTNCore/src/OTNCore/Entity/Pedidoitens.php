<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Pedidoitens
 *
 * @ORM\Table(name="PedidoItens", indexes={@ORM\Index(name="FK_PedidoItens_Pedidos", columns={"pedidoId"}), @ORM\Index(name="FK_PedidoItens_Produto", columns={"produtoId"})})
 * @ORM\Entity
 */
class Pedidoitens
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
     * @ORM\Column(name="item", type="integer", nullable=true)
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="precounitario", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $precounitario;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="string", length=255, nullable=true)
     */
    private $observacao;

    /**
     * @var \Pedidos
     *
     * @ORM\ManyToOne(targetEntity="Pedidos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pedidoId", referencedColumnName="id")
     * })
     */
    private $pedidoid;

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
     * Set item
     *
     * @param integer $item
     *
     * @return Pedidoitens
     */
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    /**
     * Get item
     *
     * @return integer
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set quantidade
     *
     * @param string $quantidade
     *
     * @return Pedidoitens
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
     * Set precounitario
     *
     * @param string $precounitario
     *
     * @return Pedidoitens
     */
    public function setPrecounitario($precounitario)
    {
        $this->precounitario = $precounitario;

        return $this;
    }

    /**
     * Get precounitario
     *
     * @return string
     */
    public function getPrecounitario()
    {
        return $this->precounitario;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     *
     * @return Pedidoitens
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set pedidoid
     *
     * @param \OTNCore\Entity\Pedidos $pedidoid
     *
     * @return Pedidoitens
     */
    public function setPedidoid(\OTNCore\Entity\Pedidos $pedidoid = null)
    {
        $this->pedidoid = $pedidoid;

        return $this;
    }

    /**
     * Get pedidoid
     *
     * @return \OTNCore\Entity\Pedidos
     */
    public function getPedidoid()
    {
        return $this->pedidoid;
    }

    /**
     * Set produtoid
     *
     * @param \OTNCore\Entity\Produto $produtoid
     *
     * @return Pedidoitens
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
