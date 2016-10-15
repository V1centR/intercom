<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Produto
 *
 * @ORM\Table(name="Produto", indexes={@ORM\Index(name="FK_Produto_Categorias", columns={"categoriaId"}), @ORM\Index(name="FK_Produto_Marca", columns={"marca"}), @ORM\Index(name="FK_Produto_OrigemProduto", columns={"origemprodutoId"}), @ORM\Index(name="FK_Produto_Unidade", columns={"unidadeId"})})
 * @ORM\Entity
 */
class Produto
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
     * @ORM\Column(name="nome", type="string", length=200, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", length=65535, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="videoURL", type="string", length=255, nullable=true)
     */
    private $videourl;

    /**
     * @var string
     *
     * @ORM\Column(name="seo", type="string", length=255, nullable=true)
     */
    private $seo;

    /**
     * @var string
     *
     * @ORM\Column(name="descSeo", type="string", length=255, nullable=true)
     */
    private $descseo;

    /**
     * @var string
     *
     * @ORM\Column(name="especificacao", type="text", length=65535, nullable=true)
     */
    private $especificacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datacadastro", type="date", nullable=true)
     */
    private $datacadastro;

    /**
     * @var integer
     *
     * @ORM\Column(name="curtir", type="integer", nullable=true)
     */
    private $curtir;

    /**
     * @var string
     *
     * @ORM\Column(name="peso", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $peso;

    /**
     * @var integer
     *
     * @ORM\Column(name="comprimento", type="integer", nullable=true)
     */
    private $comprimento;

    /**
     * @var integer
     *
     * @ORM\Column(name="largura", type="integer", nullable=true)
     */
    private $largura;

    /**
     * @var integer
     *
     * @ORM\Column(name="altura", type="integer", nullable=true)
     */
    private $altura;

    /**
     * @var string
     *
     * @ORM\Column(name="promocao", type="string", length=1, nullable=true)
     */
    private $promocao;

    /**
     * @var string
     *
     * @ORM\Column(name="comvariacao", type="string", length=1, nullable=true)
     */
    private $comvariacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordem", type="integer", nullable=true)
     */
    private $ordem;

    /**
     * @var string
     *
     * @ORM\Column(name="sku", type="string", length=45, nullable=true)
     */
    private $sku;

    /**
     * @var string
     *
     * @ORM\Column(name="controlaestoque", type="string", length=1, nullable=true)
     */
    private $controlaestoque;

    /**
     * @var string
     *
     * @ORM\Column(name="avisoabaixodominimo", type="string", length=1, nullable=true)
     */
    private $avisoabaixodominimo;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidademinima", type="decimal", precision=8, scale=3, nullable=true)
     */
    private $quantidademinima;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=250, nullable=true)
     */
    private $tags;

    /**
     * @var string
     *
     * @ORM\Column(name="metatitle", type="string", length=200, nullable=true)
     */
    private $metatitle;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=100, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="GTIN", type="string", length=50, nullable=true)
     */
    private $gtin;

    /**
     * @var string
     *
     * @ORM\Column(name="codigofrabricante", type="string", length=50, nullable=true)
     */
    private $codigofrabricante;

    /**
     * @var \Categorias
     *
     * @ORM\ManyToOne(targetEntity="Categorias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoriaId", referencedColumnName="id")
     * })
     */
    private $categoriaid;

    /**
     * @var \Marca
     *
     * @ORM\ManyToOne(targetEntity="Marca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="marca", referencedColumnName="id")
     * })
     */
    private $marca;

    /**
     * @var \Origemproduto
     *
     * @ORM\ManyToOne(targetEntity="Origemproduto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="origemprodutoId", referencedColumnName="id")
     * })
     */
    private $origemprodutoid;

    /**
     * @var \Unidade
     *
     * @ORM\ManyToOne(targetEntity="Unidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unidadeId", referencedColumnName="id")
     * })
     */
    private $unidadeid;



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
     * Set nome
     *
     * @param string $nome
     *
     * @return Produto
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Produto
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Produto
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set videourl
     *
     * @param string $videourl
     *
     * @return Produto
     */
    public function setVideourl($videourl)
    {
        $this->videourl = $videourl;

        return $this;
    }

    /**
     * Get videourl
     *
     * @return string
     */
    public function getVideourl()
    {
        return $this->videourl;
    }

    /**
     * Set seo
     *
     * @param string $seo
     *
     * @return Produto
     */
    public function setSeo($seo)
    {
        $this->seo = $seo;

        return $this;
    }

    /**
     * Get seo
     *
     * @return string
     */
    public function getSeo()
    {
        return $this->seo;
    }

    /**
     * Set descseo
     *
     * @param string $descseo
     *
     * @return Produto
     */
    public function setDescseo($descseo)
    {
        $this->descseo = $descseo;

        return $this;
    }

    /**
     * Get descseo
     *
     * @return string
     */
    public function getDescseo()
    {
        return $this->descseo;
    }

    /**
     * Set especificacao
     *
     * @param string $especificacao
     *
     * @return Produto
     */
    public function setEspecificacao($especificacao)
    {
        $this->especificacao = $especificacao;

        return $this;
    }

    /**
     * Get especificacao
     *
     * @return string
     */
    public function getEspecificacao()
    {
        return $this->especificacao;
    }

    /**
     * Set datacadastro
     *
     * @param \DateTime $datacadastro
     *
     * @return Produto
     */
    public function setDatacadastro($datacadastro)
    {
        $this->datacadastro = $datacadastro;

        return $this;
    }

    /**
     * Get datacadastro
     *
     * @return \DateTime
     */
    public function getDatacadastro()
    {
        return $this->datacadastro;
    }

    /**
     * Set curtir
     *
     * @param integer $curtir
     *
     * @return Produto
     */
    public function setCurtir($curtir)
    {
        $this->curtir = $curtir;

        return $this;
    }

    /**
     * Get curtir
     *
     * @return integer
     */
    public function getCurtir()
    {
        return $this->curtir;
    }

    /**
     * Set peso
     *
     * @param string $peso
     *
     * @return Produto
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return string
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set comprimento
     *
     * @param integer $comprimento
     *
     * @return Produto
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get comprimento
     *
     * @return integer
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Set largura
     *
     * @param integer $largura
     *
     * @return Produto
     */
    public function setLargura($largura)
    {
        $this->largura = $largura;

        return $this;
    }

    /**
     * Get largura
     *
     * @return integer
     */
    public function getLargura()
    {
        return $this->largura;
    }

    /**
     * Set altura
     *
     * @param integer $altura
     *
     * @return Produto
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    /**
     * Get altura
     *
     * @return integer
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set promocao
     *
     * @param string $promocao
     *
     * @return Produto
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
     * Set comvariacao
     *
     * @param string $comvariacao
     *
     * @return Produto
     */
    public function setComvariacao($comvariacao)
    {
        $this->comvariacao = $comvariacao;

        return $this;
    }

    /**
     * Get comvariacao
     *
     * @return string
     */
    public function getComvariacao()
    {
        return $this->comvariacao;
    }

    /**
     * Set ordem
     *
     * @param integer $ordem
     *
     * @return Produto
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
     * Set sku
     *
     * @param string $sku
     *
     * @return Produto
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * Get sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set controlaestoque
     *
     * @param string $controlaestoque
     *
     * @return Produto
     */
    public function setControlaestoque($controlaestoque)
    {
        $this->controlaestoque = $controlaestoque;

        return $this;
    }

    /**
     * Get controlaestoque
     *
     * @return string
     */
    public function getControlaestoque()
    {
        return $this->controlaestoque;
    }

    /**
     * Set avisoabaixodominimo
     *
     * @param string $avisoabaixodominimo
     *
     * @return Produto
     */
    public function setAvisoabaixodominimo($avisoabaixodominimo)
    {
        $this->avisoabaixodominimo = $avisoabaixodominimo;

        return $this;
    }

    /**
     * Get avisoabaixodominimo
     *
     * @return string
     */
    public function getAvisoabaixodominimo()
    {
        return $this->avisoabaixodominimo;
    }

    /**
     * Set quantidademinima
     *
     * @param string $quantidademinima
     *
     * @return Produto
     */
    public function setQuantidademinima($quantidademinima)
    {
        $this->quantidademinima = $quantidademinima;

        return $this;
    }

    /**
     * Get quantidademinima
     *
     * @return string
     */
    public function getQuantidademinima()
    {
        return $this->quantidademinima;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return Produto
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set metatitle
     *
     * @param string $metatitle
     *
     * @return Produto
     */
    public function setMetatitle($metatitle)
    {
        $this->metatitle = $metatitle;

        return $this;
    }

    /**
     * Get metatitle
     *
     * @return string
     */
    public function getMetatitle()
    {
        return $this->metatitle;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Produto
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set gtin
     *
     * @param string $gtin
     *
     * @return Produto
     */
    public function setGtin($gtin)
    {
        $this->gtin = $gtin;

        return $this;
    }

    /**
     * Get gtin
     *
     * @return string
     */
    public function getGtin()
    {
        return $this->gtin;
    }

    /**
     * Set codigofrabricante
     *
     * @param string $codigofrabricante
     *
     * @return Produto
     */
    public function setCodigofrabricante($codigofrabricante)
    {
        $this->codigofrabricante = $codigofrabricante;

        return $this;
    }

    /**
     * Get codigofrabricante
     *
     * @return string
     */
    public function getCodigofrabricante()
    {
        return $this->codigofrabricante;
    }

    /**
     * Set categoriaid
     *
     * @param \OTNCore\Entity\Categorias $categoriaid
     *
     * @return Produto
     */
    public function setCategoriaid(\OTNCore\Entity\Categorias $categoriaid = null)
    {
        $this->categoriaid = $categoriaid;

        return $this;
    }

    /**
     * Get categoriaid
     *
     * @return \OTNCore\Entity\Categorias
     */
    public function getCategoriaid()
    {
        return $this->categoriaid;
    }

    /**
     * Set marca
     *
     * @param \OTNCore\Entity\Marca $marca
     *
     * @return Produto
     */
    public function setMarca(\OTNCore\Entity\Marca $marca = null)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return \OTNCore\Entity\Marca
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set origemprodutoid
     *
     * @param \OTNCore\Entity\Origemproduto $origemprodutoid
     *
     * @return Produto
     */
    public function setOrigemprodutoid(\OTNCore\Entity\Origemproduto $origemprodutoid = null)
    {
        $this->origemprodutoid = $origemprodutoid;

        return $this;
    }

    /**
     * Get origemprodutoid
     *
     * @return \OTNCore\Entity\Origemproduto
     */
    public function getOrigemprodutoid()
    {
        return $this->origemprodutoid;
    }

    /**
     * Set unidadeid
     *
     * @param \OTNCore\Entity\Unidade $unidadeid
     *
     * @return Produto
     */
    public function setUnidadeid(\OTNCore\Entity\Unidade $unidadeid = null)
    {
        $this->unidadeid = $unidadeid;

        return $this;
    }

    /**
     * Get unidadeid
     *
     * @return \OTNCore\Entity\Unidade
     */
    public function getUnidadeid()
    {
        return $this->unidadeid;
    }
}
