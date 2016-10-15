<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Precos
 *
 * @ORM\Table(name="Precos", indexes={@ORM\Index(name="FK_Precos_Produto", columns={"produtoId"}), @ORM\Index(name="FK_Precos_TabelaPrecos", columns={"tabelaprecoId"})})
 * @ORM\Entity
 */
class Precos
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
     * @ORM\Column(name="precounitario", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $precounitario;

    /**
     * @var string
     *
     * @ORM\Column(name="promocao", type="string", length=1, nullable=true)
     */
    private $promocao;

    /**
     * @var string
     *
     * @ORM\Column(name="precopromocional", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $precopromocional;

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
     * @var \Tabelaprecos
     *
     * @ORM\ManyToOne(targetEntity="Tabelaprecos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tabelaprecoId", referencedColumnName="id")
     * })
     */
    private $tabelaprecoid;



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
     * Set precounitario
     *
     * @param string $precounitario
     *
     * @return Precos
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
     * Set promocao
     *
     * @param string $promocao
     *
     * @return Precos
     */
    public function setPromocao($promocao)
    {
        $this->promocao = $promocao;

        return $this;
    }

    /**
     * Get promocao
     *
     * @return string
     */
    public function getPromocao()
    {
        return $this->promocao;
    }

    /**
     * Set precopromocional
     *
     * @param string $precopromocional
     *
     * @return Precos
     */
    public function setPrecopromocional($precopromocional)
    {
        $this->precopromocional = $precopromocional;

        return $this;
    }

    /**
     * Get precopromocional
     *
     * @return string
     */
    public function getPrecopromocional()
    {
        return $this->precopromocional;
    }

    /**
     * Set produtoid
     *
     * @param \OTNCore\Entity\Produto $produtoid
     *
     * @return Precos
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
     * Set tabelaprecoid
     *
     * @param \OTNCore\Entity\Tabelaprecos $tabelaprecoid
     *
     * @return Precos
     */
    public function setTabelaprecoid(\OTNCore\Entity\Tabelaprecos $tabelaprecoid = null)
    {
        $this->tabelaprecoid = $tabelaprecoid;

        return $this;
    }

    /**
     * Get tabelaprecoid
     *
     * @return \OTNCore\Entity\Tabelaprecos
     */
    public function getTabelaprecoid()
    {
        return $this->tabelaprecoid;
    }
}
