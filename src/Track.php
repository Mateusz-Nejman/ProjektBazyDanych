<?php

/**
 * @Entity @Table(name="track")
 */
class Track
{
    /**
     * @Id
     * @Column(type="integer")
     */
    protected $id;
    /**
     * @Column(type="string", length=255)
     */
    protected $title;
    /**
     * @ManyToOne(targetEntity="Artist", inversedBy="track")
     * @JoinColumn(name="artist", referencedColumnName="id")
     */
    protected $artist;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getArtist()
    {
        return $this->artist;
    }
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }
}