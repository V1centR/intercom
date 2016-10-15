<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Frete
 *
 * @ORM\Table(name="Frete")
 * @ORM\Entity
 */
class Frete
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
     * @ORM\Column(name="ativo", type="string", length=1, nullable=true)
     */
    private $ativo;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="informacliente", type="string", length=250, nullable=true)
     */
    private $informacliente;

    /**
     * @var string
     *
     * @ORM\Column(name="adicionarsubtrair", type="string", length=1, nullable=true)
     */
    private $adicionarsubtrair;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="valorpedidominimo", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valorpedidominimo;

    /**
     * @var integer
     *
     * @ORM\Column(name="imagemId", type="integer", nullable=true)
     */
    private $imagemid;



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
     * Set ativo
     *
     * @param string $ativo
     *
     * @return Frete
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * Get ativo
     *
     * @return string
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Frete
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
     * Set informacliente
     *
     * @param string $informacliente
     *
     * @return Frete
     */
    public function setInformacliente($informacliente)
    {
        $this->informacliente = $informacliente;

        return $this;
    }

    /**
     * Get informacliente
     *
     * @return string
     */
    public function getInformacliente()
    {
        return $this->informacliente;
    }

    /**
     * Set adicionarsubtrair
     *
     * @param string $adicionarsubtrair
     *
     * @return Frete
     */
    public function setAdicionarsubtrair($adicionarsubtrair)
    {
        $this->adicionarsubtrair = $adicionarsubtrair;

        return $this;
    }

    /**
     * Get adicionarsubtrair
     *
     * @return string
     */
    public function getAdicionarsubtrair()
    {
        return $this->adicionarsubtrair;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return Frete
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

    /**
     * Set valorpedidominimo
     *
     * @param string $valorpedidominimo
     *
     * @return Frete
     */
    public function setValorpedidominimo($valorpedidominimo)
    {
        $this->valorpedidominimo = $valorpedidominimo;

        return $this;
    }

    /**
     * Get valorpedidominimo
     *
     * @return string
     */
    public function getValorpedidominimo()
    {
        return $this->valorpedidominimo;
    }

    /**
     * Set imagemid
     *
     * @param integer $imagemid
     *
     * @return Frete
     */
    public function setImagemid($imagemid)
    {
        $this->imagemid = $imagemid;

        return $this;
    }

    /**
     * Get imagemid
     *
     * @return integer
     */
    public function getImagemid()
    {
        return $this->imagemid;
    }
}
