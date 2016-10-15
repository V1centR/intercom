<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Servicos
 *
 * @ORM\Table(name="Servicos")
 * @ORM\Entity
 */
class Servicos
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
     * @ORM\Column(name="descricao", type="string", length=60, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="tipocobranca", type="string", length=1, nullable=true)
     */
    private $tipocobranca;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=12, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="porQtd", type="string", length=1, nullable=true)
     */
    private $porqtd;



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
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Servicos
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set tipocobranca
     *
     * @param string $tipocobranca
     *
     * @return Servicos
     */
    public function setTipocobranca($tipocobranca)
    {
        $this->tipocobranca = $tipocobranca;

        return $this;
    }

    /**
     * Get tipocobranca
     *
     * @return string
     */
    public function getTipocobranca()
    {
        return $this->tipocobranca;
    }

    /**
     * Set valor
     *
     * @param string $valor
     *
     * @return Servicos
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
     * Set porqtd
     *
     * @param string $porqtd
     *
     * @return Servicos
     */
    public function setPorqtd($porqtd)
    {
        $this->porqtd = $porqtd;

        return $this;
    }

    /**
     * Get porqtd
     *
     * @return string
     */
    public function getPorqtd()
    {
        return $this->porqtd;
    }
}
