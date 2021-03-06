<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Colunasusuario
 *
 * @ORM\Table(name="ColunasUsuario")
 * @ORM\Entity
 */
class Colunasusuario
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
     * @var integer
     *
     * @ORM\Column(name="colunaDatagridId", type="integer", nullable=true)
     */
    private $colunadatagridid;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuarioId", type="integer", nullable=true)
     */
    private $usuarioid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordem", type="integer", nullable=true)
     */
    private $ordem;

    /**
     * @var string
     *
     * @ORM\Column(name="mostrar", type="string", length=1, nullable=true)
     */
    private $mostrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="tamanho", type="integer", nullable=true)
     */
    private $tamanho;



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
     * Set colunadatagridid
     *
     * @param integer $colunadatagridid
     *
     * @return Colunasusuario
     */
    public function setColunadatagridid($colunadatagridid)
    {
        $this->colunadatagridid = $colunadatagridid;

        return $this;
    }

    /**
     * Get colunadatagridid
     *
     * @return integer
     */
    public function getColunadatagridid()
    {
        return $this->colunadatagridid;
    }

    /**
     * Set usuarioid
     *
     * @param integer $usuarioid
     *
     * @return Colunasusuario
     */
    public function setUsuarioid($usuarioid)
    {
        $this->usuarioid = $usuarioid;

        return $this;
    }

    /**
     * Get usuarioid
     *
     * @return integer
     */
    public function getUsuarioid()
    {
        return $this->usuarioid;
    }

    /**
     * Set ordem
     *
     * @param integer $ordem
     *
     * @return Colunasusuario
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Get ordem
     *
     * @return integer
     */
    public function getOrdem()
    {
        return $this->ordem;
    }

    /**
     * Set mostrar
     *
     * @param string $mostrar
     *
     * @return Colunasusuario
     */
    public function setMostrar($mostrar)
    {
        $this->mostrar = $mostrar;

        return $this;
    }

    /**
     * Get mostrar
     *
     * @return string
     */
    public function getMostrar()
    {
        return $this->mostrar;
    }

    /**
     * Set tamanho
     *
     * @param integer $tamanho
     *
     * @return Colunasusuario
     */
    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;

        return $this;
    }

    /**
     * Get tamanho
     *
     * @return integer
     */
    public function getTamanho()
    {
        return $this->tamanho;
    }
}
