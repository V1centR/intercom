<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Uf
 *
 * @ORM\Table(name="UF", indexes={@ORM\Index(name="FK_UF_Pais", columns={"paisId"}), @ORM\Index(name="FK_UF_Regiao", columns={"regiaoId"})})
 * @ORM\Entity
 */
class Uf
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
     * @ORM\Column(name="sigla", type="string", length=50, nullable=true)
     */
    private $sigla;

    /**
     * @var string
     *
     * @ORM\Column(name="iso", type="string", length=50, nullable=true)
     */
    private $iso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var \Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="paisId", referencedColumnName="id")
     * })
     */
    private $paisid;

    /**
     * @var \Regiao
     *
     * @ORM\ManyToOne(targetEntity="Regiao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regiaoId", referencedColumnName="id")
     * })
     */
    private $regiaoid;



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
     * @return Uf
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
     * Set sigla
     *
     * @param string $sigla
     *
     * @return Uf
     */
    public function setSigla($sigla)
    {
        $this->sigla = $sigla;

        return $this;
    }

    /**
     * Get sigla
     *
     * @return string
     */
    public function getSigla()
    {
        return $this->sigla;
    }

    /**
     * Set iso
     *
     * @param string $iso
     *
     * @return Uf
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Uf
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Uf
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Uf
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set paisid
     *
     * @param \OTNCore\Entity\Pais $paisid
     *
     * @return Uf
     */
    public function setPaisid(\OTNCore\Entity\Pais $paisid = null)
    {
        $this->paisid = $paisid;

        return $this;
    }

    /**
     * Get paisid
     *
     * @return \OTNCore\Entity\Pais
     */
    public function getPaisid()
    {
        return $this->paisid;
    }

    /**
     * Set regiaoid
     *
     * @param \OTNCore\Entity\Regiao $regiaoid
     *
     * @return Uf
     */
    public function setRegiaoid(\OTNCore\Entity\Regiao $regiaoid = null)
    {
        $this->regiaoid = $regiaoid;

        return $this;
    }

    /**
     * Get regiaoid
     *
     * @return \OTNCore\Entity\Regiao
     */
    public function getRegiaoid()
    {
        return $this->regiaoid;
    }
}
