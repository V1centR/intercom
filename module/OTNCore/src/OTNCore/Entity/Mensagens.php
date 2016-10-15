<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Mensagens
 *
 * @ORM\Table(name="Mensagens", indexes={@ORM\Index(name="FK_Mensagens_Usuario", columns={"usuarioId"})})
 * @ORM\Entity
 */
class Mensagens
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
     * @ORM\Column(name="titulo", type="string", length=255, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="mensagem", type="text", length=65535, nullable=true)
     */
    private $mensagem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datahora", type="datetime", nullable=true)
     */
    private $datahora;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuarioId", referencedColumnName="id")
     * })
     */
    private $usuarioid;



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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Mensagens
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
     * Set mensagem
     *
     * @param string $mensagem
     *
     * @return Mensagens
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;

        return $this;
    }

    /**
     * Get mensagem
     *
     * @return string
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * Set datahora
     *
     * @param \DateTime $datahora
     *
     * @return Mensagens
     */
    public function setDatahora($datahora)
    {
        $this->datahora = $datahora;

        return $this;
    }

    /**
     * Get datahora
     *
     * @return \DateTime
     */
    public function getDatahora()
    {
        return $this->datahora;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Mensagens
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
     * Set usuarioid
     *
     * @param \OTNCore\Entity\Usuario $usuarioid
     *
     * @return Mensagens
     */
    public function setUsuarioid(\OTNCore\Entity\Usuario $usuarioid = null)
    {
        $this->usuarioid = $usuarioid;

        return $this;
    }

    /**
     * Get usuarioid
     *
     * @return \OTNCore\Entity\Usuario
     */
    public function getUsuarioid()
    {
        return $this->usuarioid;
    }
}
