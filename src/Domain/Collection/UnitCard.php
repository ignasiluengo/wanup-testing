<?php

namespace App\Domain\Collection;

use App\Domain\CardId;
use App\Domain\Exception\UnitCardInvalidLivesException;

/**
 * Class UnitCard
 * @package App\Domain\Collection
 */
class UnitCard implements \JsonSerializable
{
    /**
     * @var CardId
     */
    private $cardId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $attack;

    /**
     * @var int
     */
    private $lives = 0;

    /**
     * UnitCard constructor.
     * @param CardId $cardId
     * @param string $name
     * @param int $attack
     * @param int $lives
     */
    public function __construct(CardId $cardId, $name, $attack, $lives)
    {
        $this->cardId = $cardId;
        $this->name = $name;
        $this->attack = $attack;
        $this->setLives($lives);
    }

    private function setLives(int $lives)
    {
        if ($lives < 0) {
            throw new UnitCardInvalidLivesException("Lives must be greater than zero");
        }
    }

    /**
     * @return CardId
     */
    public function getCardId(): CardId
    {
        return $this->cardId;
    }

    /**
     * @param int $attack
     */
    public function damage(int $attack)
    {
        $this->setLives($this->getLives() - $attack);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAttack(): int
    {
        return $this->attack;
    }

    /**
     * @return int
     */
    public function getLives(): int
    {
        return $this->lives;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return [
            'id' => $this->getCardId()->getId(),
            'name' => $this->getName()
        ];
    }
}