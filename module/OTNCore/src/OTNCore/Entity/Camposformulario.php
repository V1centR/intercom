<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Camposformulario
 *
 * @ORM\Table(name="CamposFormulario")
 * @ORM\Entity
 */
class Camposformulario
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
     * @ORM\Column(name="formularioId", type="integer", nullable=true)
     */
    private $formularioid;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=60, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=20, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=150, nullable=true)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=120, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="helptxt", type="string", length=255, nullable=true)
     */
    private $helptxt;

    /**
     * @var string
     *
     * @ORM\Column(name="helpURL", type="string", length=255, nullable=true)
     */
    private $helpurl;

    /**
     * @var string
     *
     * @ORM\Column(name="errorTxt", type="string", length=255, nullable=true)
     */
    private $errortxt;

    /**
     * @var string
     *
     * @ORM\Column(name="mask", type="string", length=60, nullable=true)
     */
    private $mask;

    /**
     * @var string
     *
     * @ORM\Column(name="required", type="string", length=1, nullable=true)
     */
    private $required;

    /**
     * @var string
     *
     * @ORM\Column(name="padrao", type="text", length=65535, nullable=true)
     */
    private $padrao;

    /**
     * @var integer
     *
     * @ORM\Column(name="max", type="integer", nullable=true)
     */
    private $max;

    /**
     * @var string
     *
     * @ORM\Column(name="placeholder", type="string", length=255, nullable=true)
     */
    private $placeholder;



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
     * Set formularioid
     *
     * @param integer $formularioid
     *
     * @return Camposformulario
     */
    public function setFormularioid($formularioid)
    {
        $this->formularioid = $formularioid;

        return $this;
    }

    /**
     * Get formularioid
     *
     * @return integer
     */
    public function getFormularioid()
    {
        return $this->formularioid;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Camposformulario
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Camposformulario
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Camposformulario
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Camposformulario
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set helptxt
     *
     * @param string $helptxt
     *
     * @return Camposformulario
     */
    public function setHelptxt($helptxt)
    {
        $this->helptxt = $helptxt;

        return $this;
    }

    /**
     * Get helptxt
     *
     * @return string
     */
    public function getHelptxt()
    {
        return $this->helptxt;
    }

    /**
     * Set helpurl
     *
     * @param string $helpurl
     *
     * @return Camposformulario
     */
    public function setHelpurl($helpurl)
    {
        $this->helpurl = $helpurl;

        return $this;
    }

    /**
     * Get helpurl
     *
     * @return string
     */
    public function getHelpurl()
    {
        return $this->helpurl;
    }

    /**
     * Set errortxt
     *
     * @param string $errortxt
     *
     * @return Camposformulario
     */
    public function setErrortxt($errortxt)
    {
        $this->errortxt = $errortxt;

        return $this;
    }

    /**
     * Get errortxt
     *
     * @return string
     */
    public function getErrortxt()
    {
        return $this->errortxt;
    }

    /**
     * Set mask
     *
     * @param string $mask
     *
     * @return Camposformulario
     */
    public function setMask($mask)
    {
        $this->mask = $mask;

        return $this;
    }

    /**
     * Get mask
     *
     * @return string
     */
    public function getMask()
    {
        return $this->mask;
    }

    /**
     * Set required
     *
     * @param string $required
     *
     * @return Camposformulario
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return string
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set padrao
     *
     * @param string $padrao
     *
     * @return Camposformulario
     */
    public function setPadrao($padrao)
    {
        $this->padrao = $padrao;

        return $this;
    }

    /**
     * Get padrao
     *
     * @return string
     */
    public function getPadrao()
    {
        return $this->padrao;
    }

    /**
     * Set max
     *
     * @param integer $max
     *
     * @return Camposformulario
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return integer
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set placeholder
     *
     * @param string $placeholder
     *
     * @return Camposformulario
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    /**
     * Get placeholder
     *
     * @return string
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }
}
