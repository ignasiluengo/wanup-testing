<?php

namespace App\Domain;

use Ramsey\Uuid\Uuid;

/**
 * Class CardId
 * @package App\Domain
 */
class CardId
{
    /**
     * @var string
     */
    private $id;

    /**
     * CardId constructor.
     * @param null|string $id
     */
    public function __construct($id = null)
    {
        $this->id = $id ?? Uuid::uuid4()->toString();
    }

    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param CardId $cardId
     * @return bool
     */
    public function equals(CardId $cardId)
    {
        return $this->getId() === $cardId->getId();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getId();
    }
}