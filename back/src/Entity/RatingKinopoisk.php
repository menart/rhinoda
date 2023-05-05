<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'rating_kinopoisk')]
#[ORM\Entity]
class RatingKinopoisk
{
    #[ORM\Column(name: 'id', type: 'bigint', unique: true)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Kinopoisk::class)]
    #[ORM\JoinColumn(name: 'kinopoisk_id', referencedColumnName: 'id')]
    private Kinopoisk $Kinopoisk;

    #[ORM\Column(type: 'integer')]
    private int $position;

    #[ORM\Column(type: 'integer')]
    private int $countVote;

    #[ORM\Column(name: 'rating_date', type: 'datetime', nullable: false)]
    private DateTime $ratingDate;

    use HistoryEntity;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Kinopoisk
     */
    public function getKinopoisk(): Kinopoisk
    {
        return $this->Kinopoisk;
    }

    /**
     * @param Kinopoisk $Kinopoisk
     */
    public function setKinopoisk(Kinopoisk $Kinopoisk): self
    {
        $this->Kinopoisk = $Kinopoisk;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition(int $position): self
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountVote(): int
    {
        return $this->countVote;
    }

    /**
     * @param int $countVote
     */
    public function setCountVote(int $countVote): self
    {
        $this->countVote = $countVote;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getRatingDate(): DateTime
    {
        return $this->ratingDate;
    }

    /**
     * @param ?DateTime $ratingDate
     */
    public function setRatingDate(?DateTime $ratingDate = null): self
    {
        if (is_null($ratingDate)) {
            $ratingDate = new DateTime();
        }
        $this->ratingDate = $ratingDate;
        return $this;
    }

}