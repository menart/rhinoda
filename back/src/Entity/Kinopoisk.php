<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'kinopoisk')]
#[ORM\Entity]
class Kinopoisk
{
    #[ORM\Column(name: 'id', type: 'bigint', unique: true, nullable: false)]
    #[ORM\Id]
    private int $id;

    #[ORM\OneToOne(targetEntity: Movie::class)]
    #[ORM\JoinColumn(name: 'movie_id', referencedColumnName: 'id')]
    private Movie $movie;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Movie
     */
    public function getMovie(): Movie
    {
        return $this->movie;
    }

    /**
     * @param Movie $movie
     */
    public function setMovie(Movie $movie): self
    {
        $this->movie = $movie;
        return $this;
    }
}