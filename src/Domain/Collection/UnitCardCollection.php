<?php

namespace App\Domain\Collection;

use App\Domain\UnitCard;
use Closure;
use Traversable;

/**
 * Class UnitCardCollection
 * @package App\Domain\Collection
 */
class UnitCardCollection implements ICollection
{
    /**
     * @var []UnitCard
     */
    protected $cards = [];

    /**
     * UnitCardCollection constructor.
     * @param []UnitCard
     */
    public function __construct(array $data = [])
    {
        $this->cards = $data;
    }

    public function add(UnitCard $card)
    {

    }


    /**
     * Clears the collection, removing all elements.
     *
     * @return void
     */
    public function clear()
    {

    }

    /**
     * @param $element
     */
    public function contains($element)
    {

    }

    /**
     *
     */
    public function isEmpty()
    {

    }

    /**
     * @param UnitCard $card
     */
    public function remove(UnitCard $card)
    {

    }


    /**
     * Checks whether the collection contains an element with the specified key/index.
     *
     * @param string|int $key The key/index to check for.
     *
     * @return bool TRUE if the collection contains an element with the specified key/index,
     *              FALSE otherwise.
     */
    public function containsKey($key)
    {

    }

    /**
     * Gets the element at the specified key/index.
     *
     * @param string|int $key The key/index of the element to retrieve.
     *
     * @return mixed
     */
    public function get($key)
    {

    }

    /**
     * Gets all keys/indices of the collection.
     *
     * @return array The keys/indices of the collection, in the order of the corresponding
     *               elements in the collection.
     */
    public function getKeys()
    {

    }

    /**
     * Gets all values of the collection.
     *
     * @return array The values of all elements in the collection, in the order they
     *               appear in the collection.
     */
    public function getValues()
    {

    }

    /**
     * Gets a native PHP array representation of the collection.
     *
     * @return array
     */
    public function toArray()
    {

    }


    public function exists(Closure $p)
    {

    }


    public function filter(Closure $p)
    {

    }


    public function forAll(Closure $p)
    {

    }


    public function map(Closure $func)
    {

    }

    /**
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     * @since 5.0.0
     */
    public function getIterator()
    {
        // TODO: Implement getIterator() method.
    }

    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        // TODO: Implement count() method.
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
        // TODO: Implement jsonSerialize() method.
    }
}