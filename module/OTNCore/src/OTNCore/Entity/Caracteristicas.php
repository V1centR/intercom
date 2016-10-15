<?php

namespace OTNCore\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * Caracteristicas
 *
 * @ORM\Table(name="Caracteristicas", indexes={@ORM\Index(name="FK_Caracteristicas_Categorias", columns={"categoriaId"})})
 * @ORM\Entity
 */
class Caracteristicas
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
     * @ORM\Column(name="nome", type="string", length=50, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=1, nullable=true)
     */
    private $tipo;

    /**
     * @var \Categorias
     *
     * @ORM\ManyToOne(targetEntity="Categorias")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoriaId", referencedColumnName="id")
     * })
     */
    private $categoriaid;



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
     * Set nome
     *
     * @param string $nome
     *
     * @return Caracteristicas
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Caracteristicas
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set categoriaid
     *
     * @param \OTNCore\Entity\Categorias $categoriaid
     *
     * @return Caracteristicas
     */
    public function setCategoriaid(\OTNCore\Entity\Categorias $categoriaid = null)
    {
        $this->categoriaid = $categoriaid;

        return $this;
    }

    /**
     * Get categoriaid
     *
     * @return \OTNCore\Entity\Categorias
     */
    public function getCategoriaid()
    {
        return $this->categoriaid;
    }
}
