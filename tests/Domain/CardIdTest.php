<?php

namespace App\Tests\Domain;

use App\Domain\CardId;
use PHPUnit\Framework\TestCase;

/**
 * Class CardIdTest
 * @package App\Tests\Domain
 */
class CardIdTest extends TestCase
{
    const UUID_REGEX = '/^[0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i';

    /**
     * @test
     */
    public function when_generate_empty_card_id_should_generate_id_with_uuid_format()
    {
        $cardId = new CardId();
        $this->assertRegExp(self::UUID_REGEX, $cardId->getId(), 'not match with uuid v 4');
        $this->assertRegExp(self::UUID_REGEX, $cardId->__toString(), 'not match with uuid v 4');
    }

    /**
     * @test
     */
    public function when_pass_same_obj_should_return_true()
    {
        $cardId = new CardId();
        $this->assertTrue($cardId->equals($cardId));
    }

    /**
     * @test
     */
    public function when_compare_with_same_id_should_return_true()
    {
        $cardId = new CardId('card-1');
        $anotherCardId = new CardId('card-1');
        $this->assertTrue($cardId->equals($anotherCardId));
    }

    /**
     * @test
     */
    public function when_compare_with_different_id_should_return_false()
    {
        $cardId = new CardId('card-1');
        $anotherCardId = new CardId('card-3');
        $this->assertFalse($cardId->equals($anotherCardId));
    }
}
