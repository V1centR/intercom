<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Produtoavaliacao
 *
 * @ORM\Table(name="ProdutoAvaliacao", indexes={@ORM\Index(name="FK_ProdutoAvaliacao_Pessoa", columns={"pessoaId"})})
 * @ORM\Entity
 */
class Produtoavaliacao
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
     * @ORM\Column(name="produtoId", type="integer", nullable=true)
     */
    private $produtoid;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="comentario", type="string", length=250, nullable=true)
     */
    private $comentario;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoaId", referencedColumnName="id")
     * })
     */
    private $pessoaid;



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
     * @param integer $produtoid
     *
     * @return Produtoavaliacao
     */
    public function setProdutoid($produtoid)
    {
        $this->produtoid = $produtoid;

        return $this;
    }

    /**
     * Get produtoid
     *
     * @return integer
     */
    public function getProdutoid()
    {
        return $this->produtoid;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Produtoavaliacao
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set comentario
     *
     * @param string $comentario
     *
     * @return Produtoavaliacao
     */
    public function setComentario($comentario)
    {
        $this->comentario = $comentario;

        return $this;
    }

    /**
     * Get comentario
     *
     * @return string
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set pessoaid
     *
     * @param \OTNCore\Entity\Pessoa $pessoaid
     *
     * @return Produtoavaliacao
     */
    public function setPessoaid(\OTNCore\Entity\Pessoa $pessoaid = null)
    {
        $this->pessoaid = $pessoaid;

        return $this;
    }

    /**
     * Get pessoaid
     *
     * @return \OTNCore\Entity\Pessoa
     */
    public function getPessoaid()
    {
        return $this->pessoaid;
    }
}
