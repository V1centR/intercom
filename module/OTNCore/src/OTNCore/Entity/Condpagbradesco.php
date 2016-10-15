<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Condpagbradesco
 *
 * @ORM\Table(name="CondPagBradesco", indexes={@ORM\Index(name="FK_CondPagBradesco_FormaPagamento", columns={"formapagamentoId"}), @ORM\Index(name="FK_CondPagBradesco_Imagem", columns={"imagemId"})})
 * @ORM\Entity
 */
class Condpagbradesco
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
     * @ORM\Column(name="textolojavirtual", type="string", length=50, nullable=true)
     */
    private $textolojavirtual;

    /**
     * @var string
     *
     * @ORM\Column(name="disponivellojavirtual", type="string", length=1, nullable=true)
     */
    private $disponivellojavirtual;

    /**
     * @var integer
     *
     * @ORM\Column(name="contacorrenteId", type="integer", nullable=true)
     */
    private $contacorrenteid;

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
     * @ORM\Column(name="aceitaboleto", type="string", length=1, nullable=true)
     */
    private $aceitaboleto;

    /**
     * @var string
     *
     * @ORM\Column(name="aceitadebito", type="string", length=1, nullable=true)
     */
    private $aceitadebito;

    /**
     * @var string
     *
     * @ORM\Column(name="aceitafinanciamento", type="string", length=1, nullable=true)
     */
    private $aceitafinanciamento;

    /**
     * @var string
     *
     * @ORM\Column(name="aceitacartao", type="string", length=1, nullable=true)
     */
    private $aceitacartao;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroloja", type="string", length=50, nullable=true)
     */
    private $numeroloja;

    /**
     * @var string
     *
     * @ORM\Column(name="assinaturadigitalcontas", type="string", length=50, nullable=true)
     */
    private $assinaturadigitalcontas;

    /**
     * @var string
     *
     * @ORM\Column(name="assinaturadigitalboleto", type="string", length=50, nullable=true)
     */
    private $assinaturadigitalboleto;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=1, nullable=true)
     */
    private $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="diasvenctoboleto", type="integer", nullable=true)
     */
    private $diasvenctoboleto;

    /**
     * @var string
     *
     * @ORM\Column(name="obsboleto", type="string", length=255, nullable=true)
     */
    private $obsboleto;

    /**
     * @var string
     *
     * @ORM\Column(name="obstipopagto", type="string", length=255, nullable=true)
     */
    private $obstipopagto;

    /**
     * @var string
     *
     * @ORM\Column(name="obspedido", type="string", length=255, nullable=true)
     */
    private $obspedido;

    /**
     * @var \Formapagamento
     *
     * @ORM\ManyToOne(targetEntity="Formapagamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formapagamentoId", referencedColumnName="id")
     * })
     */
    private $formapagamentoid;

    /**
     * @var \Imagem
     *
     * @ORM\ManyToOne(targetEntity="Imagem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="imagemId", referencedColumnName="id")
     * })
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
     * @return Condpagbradesco
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
     * Set textolojavirtual
     *
     * @param string $textolojavirtual
     *
     * @return Condpagbradesco
     */
    public function setTextolojavirtual($textolojavirtual)
    {
        $this->textolojavirtual = $textolojavirtual;

        return $this;
    }

    /**
     * Get textolojavirtual
     *
     * @return string
     */
    public function getTextolojavirtual()
    {
        return $this->textolojavirtual;
    }

    /**
     * Set disponivellojavirtual
     *
     * @param string $disponivellojavirtual
     *
     * @return Condpagbradesco
     */
    public function setDisponivellojavirtual($disponivellojavirtual)
    {
        $this->disponivellojavirtual = $disponivellojavirtual;

        return $this;
    }

    /**
     * Get disponivellojavirtual
     *
     * @return string
     */
    public function getDisponivellojavirtual()
    {
        return $this->disponivellojavirtual;
    }

    /**
     * Set contacorrenteid
     *
     * @param integer $contacorrenteid
     *
     * @return Condpagbradesco
     */
    public function setContacorrenteid($contacorrenteid)
    {
        $this->contacorrenteid = $contacorrenteid;

        return $this;
    }

    /**
     * Get contacorrenteid
     *
     * @return integer
     */
    public function getContacorrenteid()
    {
        return $this->contacorrenteid;
    }

    /**
     * Set adicionarsubtrair
     *
     * @param string $adicionarsubtrair
     *
     * @return Condpagbradesco
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
     * @return Condpagbradesco
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
     * Set aceitaboleto
     *
     * @param string $aceitaboleto
     *
     * @return Condpagbradesco
     */
    public function setAceitaboleto($aceitaboleto)
    {
        $this->aceitaboleto = $aceitaboleto;

        return $this;
    }

    /**
     * Get aceitaboleto
     *
     * @return string
     */
    public function getAceitaboleto()
    {
        return $this->aceitaboleto;
    }

    /**
     * Set aceitadebito
     *
     * @param string $aceitadebito
     *
     * @return Condpagbradesco
     */
    public function setAceitadebito($aceitadebito)
    {
        $this->aceitadebito = $aceitadebito;

        return $this;
    }

    /**
     * Get aceitadebito
     *
     * @return string
     */
    public function getAceitadebito()
    {
        return $this->aceitadebito;
    }

    /**
     * Set aceitafinanciamento
     *
     * @param string $aceitafinanciamento
     *
     * @return Condpagbradesco
     */
    public function setAceitafinanciamento($aceitafinanciamento)
    {
        $this->aceitafinanciamento = $aceitafinanciamento;

        return $this;
    }

    /**
     * Get aceitafinanciamento
     *
     * @return string
     */
    public function getAceitafinanciamento()
    {
        return $this->aceitafinanciamento;
    }

    /**
     * Set aceitacartao
     *
     * @param string $aceitacartao
     *
     * @return Condpagbradesco
     */
    public function setAceitacartao($aceitacartao)
    {
        $this->aceitacartao = $aceitacartao;

        return $this;
    }

    /**
     * Get aceitacartao
     *
     * @return string
     */
    public function getAceitacartao()
    {
        return $this->aceitacartao;
    }

    /**
     * Set numeroloja
     *
     * @param string $numeroloja
     *
     * @return Condpagbradesco
     */
    public function setNumeroloja($numeroloja)
    {
        $this->numeroloja = $numeroloja;

        return $this;
    }

    /**
     * Get numeroloja
     *
     * @return string
     */
    public function getNumeroloja()
    {
        return $this->numeroloja;
    }

    /**
     * Set assinaturadigitalcontas
     *
     * @param string $assinaturadigitalcontas
     *
     * @return Condpagbradesco
     */
    public function setAssinaturadigitalcontas($assinaturadigitalcontas)
    {
        $this->assinaturadigitalcontas = $assinaturadigitalcontas;

        return $this;
    }

    /**
     * Get assinaturadigitalcontas
     *
     * @return string
     */
    public function getAssinaturadigitalcontas()
    {
        return $this->assinaturadigitalcontas;
    }

    /**
     * Set assinaturadigitalboleto
     *
     * @param string $assinaturadigitalboleto
     *
     * @return Condpagbradesco
     */
    public function setAssinaturadigitalboleto($assinaturadigitalboleto)
    {
        $this->assinaturadigitalboleto = $assinaturadigitalboleto;

        return $this;
    }

    /**
     * Get assinaturadigitalboleto
     *
     * @return string
     */
    public function getAssinaturadigitalboleto()
    {
        return $this->assinaturadigitalboleto;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Condpagbradesco
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
     * Set diasvenctoboleto
     *
     * @param integer $diasvenctoboleto
     *
     * @return Condpagbradesco
     */
    public function setDiasvenctoboleto($diasvenctoboleto)
    {
        $this->diasvenctoboleto = $diasvenctoboleto;

        return $this;
    }

    /**
     * Get diasvenctoboleto
     *
     * @return integer
     */
    public function getDiasvenctoboleto()
    {
        return $this->diasvenctoboleto;
    }

    /**
     * Set obsboleto
     *
     * @param string $obsboleto
     *
     * @return Condpagbradesco
     */
    public function setObsboleto($obsboleto)
    {
        $this->obsboleto = $obsboleto;

        return $this;
    }

    /**
     * Get obsboleto
     *
     * @return string
     */
    public function getObsboleto()
    {
        return $this->obsboleto;
    }

    /**
     * Set obstipopagto
     *
     * @param string $obstipopagto
     *
     * @return Condpagbradesco
     */
    public function setObstipopagto($obstipopagto)
    {
        $this->obstipopagto = $obstipopagto;

        return $this;
    }

    /**
     * Get obstipopagto
     *
     * @return string
     */
    public function getObstipopagto()
    {
        return $this->obstipopagto;
    }

    /**
     * Set obspedido
     *
     * @param string $obspedido
     *
     * @return Condpagbradesco
     */
    public function setObspedido($obspedido)
    {
        $this->obspedido = $obspedido;

        return $this;
    }

    /**
     * Get obspedido
     *
     * @return string
     */
    public function getObspedido()
    {
        return $this->obspedido;
    }

    /**
     * Set formapagamentoid
     *
     * @param \OTNCore\Entity\Formapagamento $formapagamentoid
     *
     * @return Condpagbradesco
     */
    public function setFormapagamentoid(\OTNCore\Entity\Formapagamento $formapagamentoid = null)
    {
        $this->formapagamentoid = $formapagamentoid;

        return $this;
    }

    /**
     * Get formapagamentoid
     *
     * @return \OTNCore\Entity\Formapagamento
     */
    public function getFormapagamentoid()
    {
        return $this->formapagamentoid;
    }

    /**
     * Set imagemid
     *
     * @param \OTNCore\Entity\Imagem $imagemid
     *
     * @return Condpagbradesco
     */
    public function setImagemid(\OTNCore\Entity\Imagem $imagemid = null)
    {
        $this->imagemid = $imagemid;

        return $this;
    }

    /**
     * Get imagemid
     *
     * @return \OTNCore\Entity\Imagem
     */
    public function getImagemid()
    {
        return $this->imagemid;
    }
}
