<?php

/**
 * @Entity @Table(name="label")
 */
class Label
{
    /**
     * @Id
     * @Column(type="integer")
     */
    protected $id;
    /**
     * @Column(type="string", length=255)
     */
    protected $name;

    /**
     * @OneToMany(targetEntity="Artist", mappedBy="label")
     * 
     */
    protected $artists;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of first_name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getArtists()
    {
        return $this->artists;
    }
    public function setArtists($artists)
    {
        $this->id = $artists;
    }

}