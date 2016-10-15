<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Detlogs
 *
 * @ORM\Table(name="DetLogs", indexes={@ORM\Index(name="FK_DetLogs_Usuario", columns={"usuarioId"})})
 * @ORM\Entity
 */
class Detlogs
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
     * @ORM\Column(name="tabela", type="string", length=50, nullable=true)
     */
    private $tabela;

    /**
     * @var integer
     *
     * @ORM\Column(name="tabelaId", type="integer", nullable=true)
     */
    private $tabelaid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datahora", type="datetime", nullable=true)
     */
    private $datahora;

    /**
     * @var string
     *
     * @ORM\Column(name="conteudoanterior", type="string", length=50, nullable=true)
     */
    private $conteudoanterior;

    /**
     * @var string
     *
     * @ORM\Column(name="conteudoatual", type="string", length=50, nullable=true)
     */
    private $conteudoatual;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuarioId", referencedColumnName="id")
     * })
     */
    private $usuarioid;



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
     * Set tabela
     *
     * @param string $tabela
     *
     * @return Detlogs
     */
    public function setTabela($tabela)
    {
        $this->tabela = $tabela;

        return $this;
    }

    /**
     * Get tabela
     *
     * @return string
     */
    public function getTabela()
    {
        return $this->tabela;
    }

    /**
     * Set tabelaid
     *
     * @param integer $tabelaid
     *
     * @return Detlogs
     */
    public function setTabelaid($tabelaid)
    {
        $this->tabelaid = $tabelaid;

        return $this;
    }

    /**
     * Get tabelaid
     *
     * @return integer
     */
    public function getTabelaid()
    {
        return $this->tabelaid;
    }

    /**
     * Set datahora
     *
     * @param \DateTime $datahora
     *
     * @return Detlogs
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
     * Set conteudoanterior
     *
     * @param string $conteudoanterior
     *
     * @return Detlogs
     */
    public function setConteudoanterior($conteudoanterior)
    {
        $this->conteudoanterior = $conteudoanterior;

        return $this;
    }

    /**
     * Get conteudoanterior
     *
     * @return string
     */
    public function getConteudoanterior()
    {
        return $this->conteudoanterior;
    }

    /**
     * Set conteudoatual
     *
     * @param string $conteudoatual
     *
     * @return Detlogs
     */
    public function setConteudoatual($conteudoatual)
    {
        $this->conteudoatual = $conteudoatual;

        return $this;
    }

    /**
     * Get conteudoatual
     *
     * @return string
     */
    public function getConteudoatual()
    {
        return $this->conteudoatual;
    }

    /**
     * Set usuarioid
     *
     * @param \OTNCore\Entity\Usuario $usuarioid
     *
     * @return Detlogs
     */
    public function setUsuarioid(\OTNCore\Entity\Usuario $usuarioid = null)
    {
        $this->usuarioid = $usuarioid;

        return $this;
    }

    /**
     * Get usuarioid
     *
     * @return \OTNCore\Entity\Usuario
     */
    public function getUsuarioid()
    {
        return $this->usuarioid;
    }
}
