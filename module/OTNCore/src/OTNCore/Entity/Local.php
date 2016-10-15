<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Local
 *
 * @ORM\Table(name="Local")
 * @ORM\Entity
 */
class Local
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
     * @ORM\Column(name="razaosocial", type="string", length=50, nullable=true)
     */
    private $razaosocial;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviatura", type="string", length=50, nullable=true)
     */
    private $abreviatura;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=60, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=10, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=20, nullable=true)
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
     * @ORM\Column(name="municipio", type="string", length=50, nullable=true)
     */
    private $municipio;

    /**
     * @var string
     *
     * @ORM\Column(name="uf", type="string", length=2, nullable=true)
     */
    private $uf;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=9, nullable=true)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=20, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=20, nullable=true)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="inscestadual", type="string", length=20, nullable=true)
     */
    private $inscestadual;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datacadastro", type="date", nullable=true)
     */
    private $datacadastro;



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
     * Set razaosocial
     *
     * @param string $razaosocial
     *
     * @return Local
     */
    public function setRazaosocial($razaosocial)
    {
        $this->razaosocial = $razaosocial;

        return $this;
    }

    /**
     * Get razaosocial
     *
     * @return string
     */
    public function getRazaosocial()
    {
        return $this->razaosocial;
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     *
     * @return Local
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;

        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     *
     * @return Local
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
     * @return Local
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
     * @return Local
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
     * @return Local
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
     * Set municipio
     *
     * @param string $municipio
     *
     * @return Local
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set uf
     *
     * @param string $uf
     *
     * @return Local
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf
     *
     * @return string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set cep
     *
     * @param string $cep
     *
     * @return Local
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
     * Set telefone
     *
     * @param string $telefone
     *
     * @return Local
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * Get telefone
     *
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Local
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set cnpj
     *
     * @param string $cnpj
     *
     * @return Local
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get cnpj
     *
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * Set inscestadual
     *
     * @param string $inscestadual
     *
     * @return Local
     */
    public function setInscestadual($inscestadual)
    {
        $this->inscestadual = $inscestadual;

        return $this;
    }

    /**
     * Get inscestadual
     *
     * @return string
     */
    public function getInscestadual()
    {
        return $this->inscestadual;
    }

    /**
     * Set datacadastro
     *
     * @param \DateTime $datacadastro
     *
     * @return Local
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
}
