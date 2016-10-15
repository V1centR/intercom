<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Textoatendimento
 *
 * @ORM\Table(name="TextoAtendimento", indexes={@ORM\Index(name="FK_TextoAtendimento_CategoriaAtendimento", columns={"categoriaatendimentoId"})})
 * @ORM\Entity
 */
class Textoatendimento
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
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=50, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", length=65535, nullable=true)
     */
    private $texto;

    /**
     * @var \Categoriaatendimento
     *
     * @ORM\ManyToOne(targetEntity="Categoriaatendimento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoriaatendimentoId", referencedColumnName="id")
     * })
     */
    private $categoriaatendimentoid;



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
     * @return Textoatendimento
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
     * @return Textoatendimento
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
     * Set url
     *
     * @param string $url
     *
     * @return Textoatendimento
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
     * Set texto
     *
     * @param string $texto
     *
     * @return Textoatendimento
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set categoriaatendimentoid
     *
     * @param \OTNCore\Entity\Categoriaatendimento $categoriaatendimentoid
     *
     * @return Textoatendimento
     */
    public function setCategoriaatendimentoid(\OTNCore\Entity\Categoriaatendimento $categoriaatendimentoid = null)
    {
        $this->categoriaatendimentoid = $categoriaatendimentoid;

        return $this;
    }

    /**
     * Get categoriaatendimentoid
     *
     * @return \OTNCore\Entity\Categoriaatendimento
     */
    public function getCategoriaatendimentoid()
    {
        return $this->categoriaatendimentoid;
    }
}
