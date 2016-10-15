<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Pessoa
 *
 * @ORM\Table(name="Pessoa")
 * @ORM\Entity
 */
class Pessoa
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
     * @ORM\Column(name="tipocadastro", type="integer", nullable=true)
     */
    private $tipocadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="razaosocial", type="string", length=60, nullable=true)
     */
    private $razaosocial;

    /**
     * @var string
     *
     * @ORM\Column(name="nomefantasia", type="string", length=50, nullable=true)
     */
    private $nomefantasia;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="emaildanfe", type="string", length=60, nullable=true)
     */
    private $emaildanfe;

    /**
     * @var string
     *
     * @ORM\Column(name="telcomercial", type="string", length=20, nullable=true)
     */
    private $telcomercial;

    /**
     * @var string
     *
     * @ORM\Column(name="ramal", type="string", length=5, nullable=true)
     */
    private $ramal;

    /**
     * @var string
     *
     * @ORM\Column(name="telresidencial", type="string", length=20, nullable=true)
     */
    private $telresidencial;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=20, nullable=true)
     */
    private $celular;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpjcpf", type="string", length=20, nullable=true)
     */
    private $cnpjcpf;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=20, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="inscestadual", type="string", length=20, nullable=true)
     */
    private $inscestadual;

    /**
     * @var string
     *
     * @ORM\Column(name="inscsuframa", type="string", length=20, nullable=true)
     */
    private $inscsuframa;

    /**
     * @var string
     *
     * @ORM\Column(name="responsavel", type="string", length=50, nullable=true)
     */
    private $responsavel;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datanascimento", type="date", nullable=true)
     */
    private $datanascimento;

    /**
     * @var integer
     *
     * @ORM\Column(name="transportadora", type="integer", nullable=true)
     */
    private $transportadora;

    /**
     * @var integer
     *
     * @ORM\Column(name="tabeladeprecos", type="integer", nullable=true)
     */
    private $tabeladeprecos;

    /**
     * @var string
     *
     * @ORM\Column(name="newsletters", type="string", length=1, nullable=true)
     */
    private $newsletters;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=255, nullable=true)
     */
    private $senha;



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
     * Set tipocadastro
     *
     * @param integer $tipocadastro
     *
     * @return Pessoa
     */
    public function setTipocadastro($tipocadastro)
    {
        $this->tipocadastro = $tipocadastro;

        return $this;
    }

    /**
     * Get tipocadastro
     *
     * @return integer
     */
    public function getTipocadastro()
    {
        return $this->tipocadastro;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Pessoa
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
     * Set razaosocial
     *
     * @param string $razaosocial
     *
     * @return Pessoa
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
     * Set nomefantasia
     *
     * @param string $nomefantasia
     *
     * @return Pessoa
     */
    public function setNomefantasia($nomefantasia)
    {
        $this->nomefantasia = $nomefantasia;

        return $this;
    }

    /**
     * Get nomefantasia
     *
     * @return string
     */
    public function getNomefantasia()
    {
        return $this->nomefantasia;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Pessoa
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emaildanfe
     *
     * @param string $emaildanfe
     *
     * @return Pessoa
     */
    public function setEmaildanfe($emaildanfe)
    {
        $this->emaildanfe = $emaildanfe;

        return $this;
    }

    /**
     * Get emaildanfe
     *
     * @return string
     */
    public function getEmaildanfe()
    {
        return $this->emaildanfe;
    }

    /**
     * Set telcomercial
     *
     * @param string $telcomercial
     *
     * @return Pessoa
     */
    public function setTelcomercial($telcomercial)
    {
        $this->telcomercial = $telcomercial;

        return $this;
    }

    /**
     * Get telcomercial
     *
     * @return string
     */
    public function getTelcomercial()
    {
        return $this->telcomercial;
    }

    /**
     * Set ramal
     *
     * @param string $ramal
     *
     * @return Pessoa
     */
    public function setRamal($ramal)
    {
        $this->ramal = $ramal;

        return $this;
    }

    /**
     * Get ramal
     *
     * @return string
     */
    public function getRamal()
    {
        return $this->ramal;
    }

    /**
     * Set telresidencial
     *
     * @param string $telresidencial
     *
     * @return Pessoa
     */
    public function setTelresidencial($telresidencial)
    {
        $this->telresidencial = $telresidencial;

        return $this;
    }

    /**
     * Get telresidencial
     *
     * @return string
     */
    public function getTelresidencial()
    {
        return $this->telresidencial;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Pessoa
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
     * Set celular
     *
     * @param string $celular
     *
     * @return Pessoa
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;

        return $this;
    }

    /**
     * Get celular
     *
     * @return string
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set cnpjcpf
     *
     * @param string $cnpjcpf
     *
     * @return Pessoa
     */
    public function setCnpjcpf($cnpjcpf)
    {
        $this->cnpjcpf = $cnpjcpf;

        return $this;
    }

    /**
     * Get cnpjcpf
     *
     * @return string
     */
    public function getCnpjcpf()
    {
        return $this->cnpjcpf;
    }

    /**
     * Set rg
     *
     * @param string $rg
     *
     * @return Pessoa
     */
    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    /**
     * Get rg
     *
     * @return string
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * Set inscestadual
     *
     * @param string $inscestadual
     *
     * @return Pessoa
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
     * Set inscsuframa
     *
     * @param string $inscsuframa
     *
     * @return Pessoa
     */
    public function setInscsuframa($inscsuframa)
    {
        $this->inscsuframa = $inscsuframa;

        return $this;
    }

    /**
     * Get inscsuframa
     *
     * @return string
     */
    public function getInscsuframa()
    {
        return $this->inscsuframa;
    }

    /**
     * Set responsavel
     *
     * @param string $responsavel
     *
     * @return Pessoa
     */
    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    /**
     * Get responsavel
     *
     * @return string
     */
    public function getResponsavel()
    {
        return $this->responsavel;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Pessoa
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set datanascimento
     *
     * @param \DateTime $datanascimento
     *
     * @return Pessoa
     */
    public function setDatanascimento($datanascimento)
    {
        $this->datanascimento = $datanascimento;

        return $this;
    }

    /**
     * Get datanascimento
     *
     * @return \DateTime
     */
    public function getDatanascimento()
    {
        return $this->datanascimento;
    }

    /**
     * Set transportadora
     *
     * @param integer $transportadora
     *
     * @return Pessoa
     */
    public function setTransportadora($transportadora)
    {
        $this->transportadora = $transportadora;

        return $this;
    }

    /**
     * Get transportadora
     *
     * @return integer
     */
    public function getTransportadora()
    {
        return $this->transportadora;
    }

    /**
     * Set tabeladeprecos
     *
     * @param integer $tabeladeprecos
     *
     * @return Pessoa
     */
    public function setTabeladeprecos($tabeladeprecos)
    {
        $this->tabeladeprecos = $tabeladeprecos;

        return $this;
    }

    /**
     * Get tabeladeprecos
     *
     * @return integer
     */
    public function getTabeladeprecos()
    {
        return $this->tabeladeprecos;
    }

    /**
     * Set newsletters
     *
     * @param string $newsletters
     *
     * @return Pessoa
     */
    public function setNewsletters($newsletters)
    {
        $this->newsletters = $newsletters;

        return $this;
    }

    /**
     * Get newsletters
     *
     * @return string
     */
    public function getNewsletters()
    {
        return $this->newsletters;
    }

    /**
     * Set senha
     *
     * @param string $senha
     *
     * @return Pessoa
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Get senha
     *
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }
}
