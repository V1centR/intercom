<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Servicoscontratados
 *
 * @ORM\Table(name="ServicosContratados")
 * @ORM\Entity
 */
class Servicoscontratados
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
     * @var \DateTime
     *
     * @ORM\Column(name="datahora", type="datetime", nullable=true)
     */
    private $datahora;

    /**
     * @var integer
     *
     * @ORM\Column(name="usuarioId", type="integer", nullable=true)
     */
    private $usuarioid;

    /**
     * @var integer
     *
     * @ORM\Column(name="servicosId", type="integer", nullable=true)
     */
    private $servicosid;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=true)
     */
    private $quantidade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datahoraencerramento", type="datetime", nullable=true)
     */
    private $datahoraencerramento;

    /**
     * @var string
     *
     * @ORM\Column(name="encerrado", type="string", length=1, nullable=true)
     */
    private $encerrado;



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
     * Set datahora
     *
     * @param \DateTime $datahora
     *
     * @return Servicoscontratados
     */
    public function setDatahora($datahora)
    {
        $this->datahora = $datahora;

        return $this;
    }

    /**
     * Get datahora
     *
     * @return \DateTime
     */
    public function getDatahora()
    {
        return $this->datahora;
    }

    /**
     * Set usuarioid
     *
     * @param integer $usuarioid
     *
     * @return Servicoscontratados
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
     * Set servicosid
     *
     * @param integer $servicosid
     *
     * @return Servicoscontratados
     */
    public function setServicosid($servicosid)
    {
        $this->servicosid = $servicosid;

        return $this;
    }

    /**
     * Get servicosid
     *
     * @return integer
     */
    public function getServicosid()
    {
        return $this->servicosid;
    }

    /**
     * Set quantidade
     *
     * @param integer $quantidade
     *
     * @return Servicoscontratados
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set datahoraencerramento
     *
     * @param \DateTime $datahoraencerramento
     *
     * @return Servicoscontratados
     */
    public function setDatahoraencerramento($datahoraencerramento)
    {
        $this->datahoraencerramento = $datahoraencerramento;

        return $this;
    }

    /**
     * Get datahoraencerramento
     *
     * @return \DateTime
     */
    public function getDatahoraencerramento()
    {
        return $this->datahoraencerramento;
    }

    /**
     * Set encerrado
     *
     * @param string $encerrado
     *
     * @return Servicoscontratados
     */
    public function setEncerrado($encerrado)
    {
        $this->encerrado = $encerrado;

        return $this;
    }

    /**
     * Get encerrado
     *
     * @return string
     */
    public function getEncerrado()
    {
        return $this->encerrado;
    }
}
