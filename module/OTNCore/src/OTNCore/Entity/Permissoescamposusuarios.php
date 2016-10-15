<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Permissoescamposusuarios
 *
 * @ORM\Table(name="PermissoesCamposUsuarios", indexes={@ORM\Index(name="FK_PermissoesCamposUsuarios_CamposFormulario", columns={"campoId"}), @ORM\Index(name="FK_PermissoesCamposUsuarios_Usuario", columns={"usuarioId"})})
 * @ORM\Entity
 */
class Permissoescamposusuarios
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
     * @ORM\Column(name="visualizar", type="string", length=1, nullable=true)
     */
    private $visualizar = 'S';

    /**
     * @var string
     *
     * @ORM\Column(name="editar", type="string", length=1, nullable=true)
     */
    private $editar = 'S';

    /**
     * @var string
     *
     * @ORM\Column(name="configurar", type="string", length=1, nullable=true)
     */
    private $configurar = 'S';

    /**
     * @var \Camposformulario
     *
     * @ORM\ManyToOne(targetEntity="Camposformulario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="campoId", referencedColumnName="id")
     * })
     */
    private $campoid;

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
     * Set visualizar
     *
     * @param string $visualizar
     *
     * @return Permissoescamposusuarios
     */
    public function setVisualizar($visualizar)
    {
        $this->visualizar = $visualizar;

        return $this;
    }

    /**
     * Get visualizar
     *
     * @return string
     */
    public function getVisualizar()
    {
        return $this->visualizar;
    }

    /**
     * Set editar
     *
     * @param string $editar
     *
     * @return Permissoescamposusuarios
     */
    public function setEditar($editar)
    {
        $this->editar = $editar;

        return $this;
    }

    /**
     * Get editar
     *
     * @return string
     */
    public function getEditar()
    {
        return $this->editar;
    }

    /**
     * Set configurar
     *
     * @param string $configurar
     *
     * @return Permissoescamposusuarios
     */
    public function setConfigurar($configurar)
    {
        $this->configurar = $configurar;

        return $this;
    }

    /**
     * Get configurar
     *
     * @return string
     */
    public function getConfigurar()
    {
        return $this->configurar;
    }

    /**
     * Set campoid
     *
     * @param \OTNCore\Entity\Camposformulario $campoid
     *
     * @return Permissoescamposusuarios
     */
    public function setCampoid(\OTNCore\Entity\Camposformulario $campoid = null)
    {
        $this->campoid = $campoid;

        return $this;
    }

    /**
     * Get campoid
     *
     * @return \OTNCore\Entity\Camposformulario
     */
    public function getCampoid()
    {
        return $this->campoid;
    }

    /**
     * Set usuarioid
     *
     * @param \OTNCore\Entity\Usuario $usuarioid
     *
     * @return Permissoescamposusuarios
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
