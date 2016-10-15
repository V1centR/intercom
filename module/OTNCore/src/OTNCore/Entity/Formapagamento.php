<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Formapagamento
 *
 * @ORM\Table(name="FormaPagamento")
 * @ORM\Entity
 */
class Formapagamento
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
     * @var integer
     *
     * @ORM\Column(name="tipopagamento", type="integer", nullable=true)
     */
    private $tipopagamento;



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
     * @return Formapagamento
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
     * Set tipopagamento
     *
     * @param integer $tipopagamento
     *
     * @return Formapagamento
     */
    public function setTipopagamento($tipopagamento)
    {
        $this->tipopagamento = $tipopagamento;

        return $this;
    }

    /**
     * Get tipopagamento
     *
     * @return integer
     */
    public function getTipopagamento()
    {
        return $this->tipopagamento;
    }
}
