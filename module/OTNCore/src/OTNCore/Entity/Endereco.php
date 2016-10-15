<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Endereco
 *
 * @ORM\Table(name="Endereco", indexes={@ORM\Index(name="FK_Endereco_Pessoa", columns={"pessoaId"})})
 * @ORM\Entity
 */
class Endereco
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
     * @ORM\Column(name="endereco", type="string", length=80, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=30, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=50, nullable=true)
     */
    private $complemento;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=50, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=50, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=2, nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=50, nullable=true)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=9, nullable=true)
     */
    private $cep;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datacadastro", type="datetime", nullable=true)
     */
    private $datacadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="tipodeendereco", type="string", length=1, nullable=true)
     */
    private $tipodeendereco;

    /**
     * @var string
     *
     * @ORM\Column(name="pontoreferencia", type="string", length=50, nullable=true)
     */
    private $pontoreferencia;

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
     * Set endereco
     *
     * @param string $endereco
     *
     * @return Endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Endereco
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set complemento
     *
     * @param string $complemento
     *
     * @return Endereco
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get complemento
     *
     * @return string
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     *
     * @return Endereco
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     *
     * @return Endereco
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Endereco
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Endereco
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set cep
     *
     * @param string $cep
     *
     * @return Endereco
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set datacadastro
     *
     * @param \DateTime $datacadastro
     *
     * @return Endereco
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
     * Set status
     *
     * @param string $status
     *
     * @return Endereco
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
     * Set tipodeendereco
     *
     * @param string $tipodeendereco
     *
     * @return Endereco
     */
    public function setTipodeendereco($tipodeendereco)
    {
        $this->tipodeendereco = $tipodeendereco;

        return $this;
    }

    /**
     * Get tipodeendereco
     *
     * @return string
     */
    public function getTipodeendereco()
    {
        return $this->tipodeendereco;
    }

    /**
     * Set pontoreferencia
     *
     * @param string $pontoreferencia
     *
     * @return Endereco
     */
    public function setPontoreferencia($pontoreferencia)
    {
        $this->pontoreferencia = $pontoreferencia;

        return $this;
    }

    /**
     * Get pontoreferencia
     *
     * @return string
     */
    public function getPontoreferencia()
    {
        return $this->pontoreferencia;
    }

    /**
     * Set pessoaid
     *
     * @param \OTNCore\Entity\Pessoa $pessoaid
     *
     * @return Endereco
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
