<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Modulosusuario
 *
 * @ORM\Table(name="ModulosUsuario", indexes={@ORM\Index(name="FK_ModulosUsuario_Modulos", columns={"moduloId"}), @ORM\Index(name="FK_ModulosUsuario_Usuario", columns={"usuarioId"})})
 * @ORM\Entity
 */
class Modulosusuario
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
     * @ORM\Column(name="ordem", type="integer", nullable=true)
     */
    private $ordem;

    /**
     * @var string
     *
     * @ORM\Column(name="incluso", type="string", length=1, nullable=true)
     */
    private $incluso;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var \Modulos
     *
     * @ORM\ManyToOne(targetEntity="Modulos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="moduloId", referencedColumnName="id")
     * })
     */
    private $moduloid;

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
     * Set ordem
     *
     * @param integer $ordem
     *
     * @return Modulosusuario
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
     * Set incluso
     *
     * @param string $incluso
     *
     * @return Modulosusuario
     */
    public function setIncluso($incluso)
    {
        $this->incluso = $incluso;

        return $this;
    }

    /**
     * Get incluso
     *
     * @return string
     */
    public function getIncluso()
    {
        return $this->incluso;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Modulosusuario
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
     * Set moduloid
     *
     * @param \OTNCore\Entity\Modulos $moduloid
     *
     * @return Modulosusuario
     */
    public function setModuloid(\OTNCore\Entity\Modulos $moduloid = null)
    {
        $this->moduloid = $moduloid;

        return $this;
    }

    /**
     * Get moduloid
     *
     * @return \OTNCore\Entity\Modulos
     */
    public function getModuloid()
    {
        return $this->moduloid;
    }

    /**
     * Set usuarioid
     *
     * @param \OTNCore\Entity\Usuario $usuarioid
     *
     * @return Modulosusuario
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
