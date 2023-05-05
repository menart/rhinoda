<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

trait HistoryEntity
{
    #[ORM\Column(name: 'created_at', type: 'datetime', nullable: false)]
    private DateTime $createdAt;

    #[ORM\Column(name: 'updated_at', type: 'datetime', nullable: false)]
    private DateTime $updatedAt;

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param ?DateTime $createdAt
     */
    public function setCreatedAt(?DateTime $createdAt = null): self
    {
        if (is_null($createdAt))
            $createdAt = new DateTime();
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt(): DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param ?DateTime $updatedAt
     */
    public function setUpdatedAt(?DateTime $updatedAt = null): self
    {
        if (is_null($updatedAt))
            $updatedAt = new DateTime();
        $this->updatedAt = $updatedAt;
        return $this;
    }

}