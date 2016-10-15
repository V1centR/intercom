<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Freteuf
 *
 * @ORM\Table(name="FreteUF", indexes={@ORM\Index(name="FK_FreteUF_Frete", columns={"freteId"}), @ORM\Index(name="FK_FreteUF_UF", columns={"UFId"})})
 * @ORM\Entity
 */
class Freteuf
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
     * @var \Frete
     *
     * @ORM\ManyToOne(targetEntity="Frete")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="freteId", referencedColumnName="id")
     * })
     */
    private $freteid;

    /**
     * @var \Uf
     *
     * @ORM\ManyToOne(targetEntity="Uf")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UFId", referencedColumnName="id")
     * })
     */
    private $ufid;



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
     * Set freteid
     *
     * @param \OTNCore\Entity\Frete $freteid
     *
     * @return Freteuf
     */
    public function setFreteid(\OTNCore\Entity\Frete $freteid = null)
    {
        $this->freteid = $freteid;

        return $this;
    }

    /**
     * Get freteid
     *
     * @return \OTNCore\Entity\Frete
     */
    public function getFreteid()
    {
        return $this->freteid;
    }

    /**
     * Set ufid
     *
     * @param \OTNCore\Entity\Uf $ufid
     *
     * @return Freteuf
     */
    public function setUfid(\OTNCore\Entity\Uf $ufid = null)
    {
        $this->ufid = $ufid;

        return $this;
    }

    /**
     * Get ufid
     *
     * @return \OTNCore\Entity\Uf
     */
    public function getUfid()
    {
        return $this->ufid;
    }
}
