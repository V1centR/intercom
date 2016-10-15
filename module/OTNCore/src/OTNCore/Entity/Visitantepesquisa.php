<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Visitantepesquisa
 *
 * @ORM\Table(name="VisitantePesquisa", indexes={@ORM\Index(name="FK_VisitantePesquisa_Visitante", columns={"visitanteId"})})
 * @ORM\Entity
 */
class Visitantepesquisa
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
     * @ORM\Column(name="texto", type="string", length=50, nullable=true)
     */
    private $texto;

    /**
     * @var \Visitante
     *
     * @ORM\ManyToOne(targetEntity="Visitante")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="visitanteId", referencedColumnName="id")
     * })
     */
    private $visitanteid;



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
     * Set texto
     *
     * @param string $texto
     *
     * @return Visitantepesquisa
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
     * Set visitanteid
     *
     * @param \OTNCore\Entity\Visitante $visitanteid
     *
     * @return Visitantepesquisa
     */
    public function setVisitanteid(\OTNCore\Entity\Visitante $visitanteid = null)
    {
        $this->visitanteid = $visitanteid;

        return $this;
    }

    /**
     * Get visitanteid
     *
     * @return \OTNCore\Entity\Visitante
     */
    public function getVisitanteid()
    {
        return $this->visitanteid;
    }
}
