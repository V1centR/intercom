<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="Empresa", indexes={@ORM\Index(name="PK_NomeGrupo", columns={"nomegrupoempresarial"}), @ORM\Index(name="FK_Empresa_PrincipalAtuacao", columns={"principalatuacaoId"})})
 * @ORM\Entity
 */
class Empresa
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
     * @ORM\Column(name="nomegrupoempresarial", type="string", length=45, nullable=false)
     */
    private $nomegrupoempresarial;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datacadastro", type="datetime", nullable=true)
     */
    private $datacadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataencerramento", type="datetime", nullable=true)
     */
    private $dataencerramento;

    /**
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=50, nullable=true)
     */
    private $host;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=20, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=20, nullable=true)
     */
    private $pass;

    /**
     * @var string
     *
     * @ORM\Column(name="port", type="string", length=5, nullable=true)
     */
    private $port;

    /**
     * @var string
     *
     * @ORM\Column(name="db", type="string", length=16, nullable=true)
     */
    private $db;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var \Principalatuacao
     *
     * @ORM\ManyToOne(targetEntity="Principalatuacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="principalatuacaoId", referencedColumnName="id")
     * })
     */
    private $principalatuacaoid;



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
     * Set nomegrupoempresarial
     *
     * @param string $nomegrupoempresarial
     *
     * @return Empresa
     */
    public function setNomegrupoempresarial($nomegrupoempresarial)
    {
        $this->nomegrupoempresarial = $nomegrupoempresarial;

        return $this;
    }

    /**
     * Get nomegrupoempresarial
     *
     * @return string
     */
    public function getNomegrupoempresarial()
    {
        return $this->nomegrupoempresarial;
    }

    /**
     * Set datacadastro
     *
     * @param \DateTime $datacadastro
     *
     * @return Empresa
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
     * Set dataencerramento
     *
     * @param \DateTime $dataencerramento
     *
     * @return Empresa
     */
    public function setDataencerramento($dataencerramento)
    {
        $this->dataencerramento = $dataencerramento;

        return $this;
    }

    /**
     * Get dataencerramento
     *
     * @return \DateTime
     */
    public function getDataencerramento()
    {
        return $this->dataencerramento;
    }

    /**
     * Set host
     *
     * @param string $host
     *
     * @return Empresa
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Get host
     *
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Empresa
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return Empresa
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set port
     *
     * @param string $port
     *
     * @return Empresa
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set db
     *
     * @param string $db
     *
     * @return Empresa
     */
    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    /**
     * Get db
     *
     * @return string
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Empresa
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
     * Set principalatuacaoid
     *
     * @param \OTNCore\Entity\Principalatuacao $principalatuacaoid
     *
     * @return Empresa
     */
    public function setPrincipalatuacaoid(\OTNCore\Entity\Principalatuacao $principalatuacaoid = null)
    {
        $this->principalatuacaoid = $principalatuacaoid;

        return $this;
    }

    /**
     * Get principalatuacaoid
     *
     * @return \OTNCore\Entity\Principalatuacao
     */
    public function getPrincipalatuacaoid()
    {
        return $this->principalatuacaoid;
    }
}
