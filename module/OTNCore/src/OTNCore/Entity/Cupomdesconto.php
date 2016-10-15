<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Cupomdesconto
 *
 * @ORM\Table(name="CupomDesconto")
 * @ORM\Entity
 */
class Cupomdesconto
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
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="cupom", type="string", length=20, nullable=true)
     */
    private $cupom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datacadastro", type="datetime", nullable=true)
     */
    private $datacadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataexpira", type="datetime", nullable=true)
     */
    private $dataexpira;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valor;



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
     * Set status
     *
     * @param string $status
     *
     * @return Cupomdesconto
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set cupom
     *
     * @param string $cupom
     *
     * @return Cupomdesconto
     */
    public function setCupom($cupom)
    {
        $this->cupom = $cupom;

        return $this;
    }

    /**
     * Get cupom
     *
     * @return string
     */
    public function getCupom()
    {
        return $this->cupom;
    }

    /**
     * Set datacadastro
     *
     * @param \DateTime $datacadastro
     *
     * @return Cupomdesconto
     */
    public function setDatacadastro($datacadastro)
    {
        $this->datacadastro = $datacadastro;

        return $this;
    }

    /**
     * Get datacadastro
     *
     * @return \DateTime
     */
    public function getDatacadastro()
    {
        return $this->datacadastro;
    }

    /**
     * Set dataexpira
     *
     * @param \DateTime $dataexpira
     *
     * @return Cupomdesconto
     */
    public function setDataexpira($dataexpira)
    {
        $this->dataexpira = $dataexpira;

        return $this;
    }

    /**
     * Get dataexpira
     *
     * @return \DateTime
     */
    public function getDataexpira()
    {
        return $this->dataexpira;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return Cupomdesconto
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }
}
