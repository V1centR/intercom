<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Tagpesquisa
 *
 * @ORM\Table(name="TagPesquisa")
 * @ORM\Entity
 */
class Tagpesquisa
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
     * @var integer
     *
     * @ORM\Column(name="qtdepesquisas", type="integer", nullable=true)
     */
    private $qtdepesquisas;



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
     * @return Tagpesquisa
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
     * Set qtdepesquisas
     *
     * @param integer $qtdepesquisas
     *
     * @return Tagpesquisa
     */
    public function setQtdepesquisas($qtdepesquisas)
    {
        $this->qtdepesquisas = $qtdepesquisas;

        return $this;
    }

    /**
     * Get qtdepesquisas
     *
     * @return integer
     */
    public function getQtdepesquisas()
    {
        return $this->qtdepesquisas;
    }
}
