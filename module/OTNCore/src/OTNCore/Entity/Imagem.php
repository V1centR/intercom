<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Imagem
 *
 * @ORM\Table(name="Imagem")
 * @ORM\Entity
 */
class Imagem
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
     * @ORM\Column(name="thumb", type="string", length=1, nullable=true)
     */
    private $thumb;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=10, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="seo", type="string", length=255, nullable=true)
     */
    private $seo;

    /**
     * @var string
     *
     * @ORM\Column(name="ext", type="string", length=4, nullable=true)
     */
    private $ext;

    /**
     * @var string
     *
     * @ORM\Column(name="virada", type="string", length=1, nullable=true)
     */
    private $virada;

    /**
     * @var string
     *
     * @ORM\Column(name="temp", type="string", length=40, nullable=true)
     */
    private $temp;



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
     * Set thumb
     *
     * @param string $thumb
     *
     * @return Imagem
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;

        return $this;
    }

    /**
     * Get thumb
     *
     * @return string
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Imagem
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
     * Set seo
     *
     * @param string $seo
     *
     * @return Imagem
     */
    public function setSeo($seo)
    {
        $this->seo = $seo;

        return $this;
    }

    /**
     * Get seo
     *
     * @return string
     */
    public function getSeo()
    {
        return $this->seo;
    }

    /**
     * Set ext
     *
     * @param string $ext
     *
     * @return Imagem
     */
    public function setExt($ext)
    {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Get ext
     *
     * @return string
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * Set virada
     *
     * @param string $virada
     *
     * @return Imagem
     */
    public function setVirada($virada)
    {
        $this->virada = $virada;

        return $this;
    }

    /**
     * Get virada
     *
     * @return string
     */
    public function getVirada()
    {
        return $this->virada;
    }

    /**
     * Set temp
     *
     * @param string $temp
     *
     * @return Imagem
     */
    public function setTemp($temp)
    {
        $this->temp = $temp;

        return $this;
    }

    /**
     * Get temp
     *
     * @return string
     */
    public function getTemp()
    {
        return $this->temp;
    }
}
