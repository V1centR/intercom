<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Variacaopropriedade
 *
 * @ORM\Table(name="VariacaoPropriedade", indexes={@ORM\Index(name="FK_VariacaoPropriedade_Propriedade", columns={"propriedadeId"})})
 * @ORM\Entity
 */
class Variacaopropriedade
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
     * @var \Variacao
     *
     * @ORM\ManyToOne(targetEntity="Variacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="propriedadeId", referencedColumnName="id")
     * })
     */
    private $propriedadeid;



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
     * @return Variacaopropriedade
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
     * Set propriedadeid
     *
     * @param \OTNCore\Entity\Variacao $propriedadeid
     *
     * @return Variacaopropriedade
     */
    public function setPropriedadeid(\OTNCore\Entity\Variacao $propriedadeid = null)
    {
        $this->propriedadeid = $propriedadeid;

        return $this;
    }

    /**
     * Get propriedadeid
     *
     * @return \OTNCore\Entity\Variacao
     */
    public function getPropriedadeid()
    {
        return $this->propriedadeid;
    }
}
