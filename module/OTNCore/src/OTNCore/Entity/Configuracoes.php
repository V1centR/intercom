<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Configuracoes
 *
 * @ORM\Table(name="Configuracoes")
 * @ORM\Entity
 */
class Configuracoes
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
     * @ORM\Column(name="twitter", type="string", length=255, nullable=true)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255, nullable=true)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="youtube", type="string", length=255, nullable=true)
     */
    private $youtube;

    /**
     * @var string
     *
     * @ORM\Column(name="delicious", type="string", length=255, nullable=true)
     */
    private $delicious;

    /**
     * @var string
     *
     * @ORM\Column(name="google", type="string", length=255, nullable=true)
     */
    private $google;

    /**
     * @var string
     *
     * @ORM\Column(name="instagram", type="string", length=255, nullable=true)
     */
    private $instagram;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="nProdutoInicial", type="integer", nullable=true)
     */
    private $nprodutoinicial;

    /**
     * @var string
     *
     * @ORM\Column(name="slogan", type="string", length=150, nullable=true)
     */
    private $slogan;

    /**
     * @var integer
     *
     * @ORM\Column(name="colunas", type="integer", nullable=true)
     */
    private $colunas;

    /**
     * @var string
     *
     * @ORM\Column(name="copyright", type="string", length=255, nullable=true)
     */
    private $copyright;

    /**
     * @var string
     *
     * @ORM\Column(name="infoRodape", type="text", length=65535, nullable=true)
     */
    private $inforodape;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Configuracoes
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Configuracoes
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set youtube
     *
     * @param string $youtube
     *
     * @return Configuracoes
     */
    public function setYoutube($youtube)
    {
        $this->youtube = $youtube;

        return $this;
    }

    /**
     * Get youtube
     *
     * @return string
     */
    public function getYoutube()
    {
        return $this->youtube;
    }

    /**
     * Set delicious
     *
     * @param string $delicious
     *
     * @return Configuracoes
     */
    public function setDelicious($delicious)
    {
        $this->delicious = $delicious;

        return $this;
    }

    /**
     * Get delicious
     *
     * @return string
     */
    public function getDelicious()
    {
        return $this->delicious;
    }

    /**
     * Set google
     *
     * @param string $google
     *
     * @return Configuracoes
     */
    public function setGoogle($google)
    {
        $this->google = $google;

        return $this;
    }

    /**
     * Get google
     *
     * @return string
     */
    public function getGoogle()
    {
        return $this->google;
    }

    /**
     * Set instagram
     *
     * @param string $instagram
     *
     * @return Configuracoes
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;

        return $this;
    }

    /**
     * Get instagram
     *
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Configuracoes
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
     * Set nprodutoinicial
     *
     * @param integer $nprodutoinicial
     *
     * @return Configuracoes
     */
    public function setNprodutoinicial($nprodutoinicial)
    {
        $this->nprodutoinicial = $nprodutoinicial;

        return $this;
    }

    /**
     * Get nprodutoinicial
     *
     * @return integer
     */
    public function getNprodutoinicial()
    {
        return $this->nprodutoinicial;
    }

    /**
     * Set slogan
     *
     * @param string $slogan
     *
     * @return Configuracoes
     */
    public function setSlogan($slogan)
    {
        $this->slogan = $slogan;

        return $this;
    }

    /**
     * Get slogan
     *
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * Set colunas
     *
     * @param integer $colunas
     *
     * @return Configuracoes
     */
    public function setColunas($colunas)
    {
        $this->colunas = $colunas;

        return $this;
    }

    /**
     * Get colunas
     *
     * @return integer
     */
    public function getColunas()
    {
        return $this->colunas;
    }

    /**
     * Set copyright
     *
     * @param string $copyright
     *
     * @return Configuracoes
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * Get copyright
     *
     * @return string
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Set inforodape
     *
     * @param string $inforodape
     *
     * @return Configuracoes
     */
    public function setInforodape($inforodape)
    {
        $this->inforodape = $inforodape;

        return $this;
    }

    /**
     * Get inforodape
     *
     * @return string
     */
    public function getInforodape()
    {
        return $this->inforodape;
    }

    /**
     * Set seo
     *
     * @param string $seo
     *
     * @return Configuracoes
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
     * @return Configuracoes
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
}
