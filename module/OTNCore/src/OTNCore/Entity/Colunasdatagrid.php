<?php
namespace OTNCore\Entity;



use Doctrine\ORM\Mapping as ORM;

/**
 * Colunasdatagrid
 *
 * @ORM\Table(name="ColunasDatagrid")
 * @ORM\Entity
 */
class Colunasdatagrid
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
     * @ORM\Column(name="datagridId", type="integer", nullable=true)
     */
    private $datagridid;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=45, nullable=true)
     */
    private $field;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=60, nullable=true)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="template", type="string", length=200, nullable=true)
     */
    private $template;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=30, nullable=true)
     */
    private $format;

    /**
     * @var string
     *
     * @ORM\Column(name="aggregates", type="string", length=100, nullable=true)
     */
    private $aggregates;

    /**
     * @var string
     *
     * @ORM\Column(name="groupFooterTemplate", type="string", length=100, nullable=true)
     */
    private $groupfootertemplate;

    /**
     * @var string
     *
     * @ORM\Column(name="attributes", type="string", length=100, nullable=true)
     */
    private $attributes;

    /**
     * @var string
     *
     * @ORM\Column(name="command", type="string", length=200, nullable=true)
     */
    private $command;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true)
     */
    private $type;



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
     * Set datagridid
     *
     * @param integer $datagridid
     *
     * @return Colunasdatagrid
     */
    public function setDatagridid($datagridid)
    {
        $this->datagridid = $datagridid;

        return $this;
    }

    /**
     * Get datagridid
     *
     * @return integer
     */
    public function getDatagridid()
    {
        return $this->datagridid;
    }

    /**
     * Set field
     *
     * @param string $field
     *
     * @return Colunasdatagrid
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Colunasdatagrid
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set template
     *
     * @param string $template
     *
     * @return Colunasdatagrid
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set format
     *
     * @param string $format
     *
     * @return Colunasdatagrid
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set aggregates
     *
     * @param string $aggregates
     *
     * @return Colunasdatagrid
     */
    public function setAggregates($aggregates)
    {
        $this->aggregates = $aggregates;

        return $this;
    }

    /**
     * Get aggregates
     *
     * @return string
     */
    public function getAggregates()
    {
        return $this->aggregates;
    }

    /**
     * Set groupfootertemplate
     *
     * @param string $groupfootertemplate
     *
     * @return Colunasdatagrid
     */
    public function setGroupfootertemplate($groupfootertemplate)
    {
        $this->groupfootertemplate = $groupfootertemplate;

        return $this;
    }

    /**
     * Get groupfootertemplate
     *
     * @return string
     */
    public function getGroupfootertemplate()
    {
        return $this->groupfootertemplate;
    }

    /**
     * Set attributes
     *
     * @param string $attributes
     *
     * @return Colunasdatagrid
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get attributes
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set command
     *
     * @param string $command
     *
     * @return Colunasdatagrid
     */
    public function setCommand($command)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Get command
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Colunasdatagrid
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
