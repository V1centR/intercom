<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="Municipio", indexes={@ORM\Index(name="FK_Municipio_UF", columns={"UFId"})})
 * @ORM\Entity
 */
class Municipio
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
     * @ORM\Column(name="nome", type="string", length=80, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=50, nullable=true)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="iso_ddd", type="string", length=4, nullable=true)
     */
    private $isoDdd;

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
     * Set nome
     *
     * @param string $nome
     *
     * @return Municipio
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
     * Set iso
     *
     * @param string $iso
     *
     * @return Municipio
     */
    public function setIso($iso)
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * Get iso
     *
     * @return string
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * Set isoDdd
     *
     * @param string $isoDdd
     *
     * @return Municipio
     */
    public function setIsoDdd($isoDdd)
    {
        $this->isoDdd = $isoDdd;

        return $this;
    }

    /**
     * Get isoDdd
     *
     * @return string
     */
    public function getIsoDdd()
    {
        return $this->isoDdd;
    }

    /**
     * Set ufid
     *
     * @param \OTNCore\Entity\Uf $ufid
     *
     * @return Municipio
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
