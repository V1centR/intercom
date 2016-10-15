<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Permissoesformulariosusuarios
 *
 * @ORM\Table(name="PermissoesFormulariosUsuarios", indexes={@ORM\Index(name="FK_PermissoesFormulariosUsuarios_Formularios", columns={"formularioId"}), @ORM\Index(name="FK_PermissoesFormulariosUsuarios_Usuario", columns={"usuarioId"})})
 * @ORM\Entity
 */
class Permissoesformulariosusuarios
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
     * @var \Formularios
     *
     * @ORM\ManyToOne(targetEntity="Formularios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formularioId", referencedColumnName="id")
     * })
     */
    private $formularioid;

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
     * Set formularioid
     *
     * @param \OTNCore\Entity\Formularios $formularioid
     *
     * @return Permissoesformulariosusuarios
     */
    public function setFormularioid(\OTNCore\Entity\Formularios $formularioid = null)
    {
        $this->formularioid = $formularioid;

        return $this;
    }

    /**
     * Get formularioid
     *
     * @return \OTNCore\Entity\Formularios
     */
    public function getFormularioid()
    {
        return $this->formularioid;
    }

    /**
     * Set usuarioid
     *
     * @param \OTNCore\Entity\Usuario $usuarioid
     *
     * @return Permissoesformulariosusuarios
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
