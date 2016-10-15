<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Zona
 *
 * @ORM\Table(name="Zona", indexes={@ORM\Index(name="FK_Zona_UF", columns={"UFId"})})
 * @ORM\Entity
 */
class Zona
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
     * @ORM\Column(name="iso", type="string", length=50, nullable=true)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="nomeiso", type="string", length=50, nullable=true)
     */
    private $nomeiso;

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
     * @return Zona
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
     * @return Zona
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
     * Set nomeiso
     *
     * @param string $nomeiso
     *
     * @return Zona
     */
    public function setNomeiso($nomeiso)
    {
        $this->nomeiso = $nomeiso;

        return $this;
    }

    /**
     * Get nomeiso
     *
     * @return string
     */
    public function getNomeiso()
    {
        return $this->nomeiso;
    }

    /**
     * Set ufid
     *
     * @param \OTNCore\Entity\Uf $ufid
     *
     * @return Zona
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
