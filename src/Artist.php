<?php

/**
 * @Entity @Table(name="artist")
 */
class Artist
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
     * @Column(type="string", length=255)
     */
    protected $surname;
    /**
     * @Column(type="string", length=255)
     */
    protected $pseudo;

    /**
     * @ManyToOne(targetEntity="Label", inversedBy="artist")
     * @JoinColumn(name="label", referencedColumnName="id")
     */
    protected $label;

    /**
     * @OneToMany(targetEntity="Track", mappedBy="artist")
     * 
     */
    protected $tracks;

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
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getLabel()
    {
        return $this->label;
    }
    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getTracks()
    {
        return $this->tracks;
    }

    public function setTracks($tracks)
    {
        $this->tracks = $tracks;
    }

    public function getArtistName()
    {
        $return = $this->pseudo;

        if($this->name != "")
        {
            $prefix = $this->name;
            $name = "";
            $suffix = " ". $this->surname;
            
            if($this->pseudo != "")
                $name = " \"".$this->pseudo."\"";

            $return = $prefix.$name.$suffix;
        }

        return $return;
    }
}