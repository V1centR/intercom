<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Categorias
 *
 * @ORM\Table(name="Categorias", indexes={@ORM\Index(name="FK_Categorias_Imagem", columns={"imagemId"})})
 * @ORM\Entity
 */
class Categorias
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
     * @ORM\Column(name="nome", type="string", length=100, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="categoriaId", type="integer", nullable=true)
     */
    private $categoriaid;

    /**
     * @var string
     *
     * @ORM\Column(name="seo", type="text", length=65535, nullable=true)
     */
    private $seo;

    /**
     * @var string
     *
     * @ORM\Column(name="descSeo", type="text", length=65535, nullable=true)
     */
    private $descseo;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=100, nullable=true)
     */
    private $url;

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
     * @return Categorias
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
     * Set status
     *
     * @param string $status
     *
     * @return Categorias
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
     * Set categoriaid
     *
     * @param integer $categoriaid
     *
     * @return Categorias
     */
    public function setCategoriaid($categoriaid)
    {
        $this->categoriaid = $categoriaid;

        return $this;
    }

    /**
     * Get categoriaid
     *
     * @return integer
     */
    public function getCategoriaid()
    {
        return $this->categoriaid;
    }

    /**
     * Set seo
     *
     * @param string $seo
     *
     * @return Categorias
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
     * @return Categorias
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
     * Set url
     *
     * @param string $url
     *
     * @return Categorias
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
     * Set imagemid
     *
     * @param \OTNCore\Entity\Imagem $imagemid
     *
     * @return Categorias
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
}
