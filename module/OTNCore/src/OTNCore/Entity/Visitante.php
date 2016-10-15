<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Visitante
 *
 * @ORM\Table(name="Visitante", indexes={@ORM\Index(name="FK_Visitante_Pessoa", columns={"pessoaId"})})
 * @ORM\Entity
 */
class Visitante
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
     * @var string
     *
     * @ORM\Column(name="sessao", type="string", length=255, nullable=true)
     */
    private $sessao;

    /**
     * @var string
     *
     * @ORM\Column(name="ipacesso", type="string", length=50, nullable=true)
     */
    private $ipacesso;

    /**
     * @var string
     *
     * @ORM\Column(name="localizacao", type="string", length=50, nullable=true)
     */
    private $localizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="campanha", type="string", length=50, nullable=true)
     */
    private $campanha;

    /**
     * @var string
     *
     * @ORM\Column(name="origem", type="string", length=50, nullable=true)
     */
    private $origem;

    /**
     * @var integer
     *
     * @ORM\Column(name="parceiroId", type="integer", nullable=true)
     */
    private $parceiroid;

    /**
     * @var \Pessoa
     *
     * @ORM\ManyToOne(targetEntity="Pessoa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pessoaId", referencedColumnName="id")
     * })
     */
    private $pessoaid;



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
     * @return Visitante
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
     * Set sessao
     *
     * @param string $sessao
     *
     * @return Visitante
     */
    public function setSessao($sessao)
    {
        $this->sessao = $sessao;

        return $this;
    }

    /**
     * Get sessao
     *
     * @return string
     */
    public function getSessao()
    {
        return $this->sessao;
    }

    /**
     * Set ipacesso
     *
     * @param string $ipacesso
     *
     * @return Visitante
     */
    public function setIpacesso($ipacesso)
    {
        $this->ipacesso = $ipacesso;

        return $this;
    }

    /**
     * Get ipacesso
     *
     * @return string
     */
    public function getIpacesso()
    {
        return $this->ipacesso;
    }

    /**
     * Set localizacao
     *
     * @param string $localizacao
     *
     * @return Visitante
     */
    public function setLocalizacao($localizacao)
    {
        $this->localizacao = $localizacao;

        return $this;
    }

    /**
     * Get localizacao
     *
     * @return string
     */
    public function getLocalizacao()
    {
        return $this->localizacao;
    }

    /**
     * Set campanha
     *
     * @param string $campanha
     *
     * @return Visitante
     */
    public function setCampanha($campanha)
    {
        $this->campanha = $campanha;

        return $this;
    }

    /**
     * Get campanha
     *
     * @return string
     */
    public function getCampanha()
    {
        return $this->campanha;
    }

    /**
     * Set origem
     *
     * @param string $origem
     *
     * @return Visitante
     */
    public function setOrigem($origem)
    {
        $this->origem = $origem;

        return $this;
    }

    /**
     * Get origem
     *
     * @return string
     */
    public function getOrigem()
    {
        return $this->origem;
    }

    /**
     * Set parceiroid
     *
     * @param integer $parceiroid
     *
     * @return Visitante
     */
    public function setParceiroid($parceiroid)
    {
        $this->parceiroid = $parceiroid;

        return $this;
    }

    /**
     * Get parceiroid
     *
     * @return integer
     */
    public function getParceiroid()
    {
        return $this->parceiroid;
    }

    /**
     * Set pessoaid
     *
     * @param \OTNCore\Entity\Pessoa $pessoaid
     *
     * @return Visitante
     */
    public function setPessoaid(\OTNCore\Entity\Pessoa $pessoaid = null)
    {
        $this->pessoaid = $pessoaid;

        return $this;
    }

    /**
     * Get pessoaid
     *
     * @return \OTNCore\Entity\Pessoa
     */
    public function getPessoaid()
    {
        return $this->pessoaid;
    }
}
