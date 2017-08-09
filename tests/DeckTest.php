<?php
require './src/Deck.php';

class DeckTest extends \PHPUnit\Framework\TestCase
{
    private $deck;

    protected function setUp()
    {
        $this->deck = new Deck();
    }

    protected function tearDown()
    {
        $this->deck = NULL;
    }

    public function testExists()
    {
        $this->assertInstanceOf(Deck::class, $this->deck);
    }

    public function testIsInitializedWithAnArrayWithCorrectAmountOfNames()
    {
        $this->assertEquals(sizeof($this->deck->names), 13);
    }

    public function testIsInitializedWithAnArrayWithCorrectAmountOfSuits()
    {
        $this->assertEquals(sizeof($this->deck->suits), 4);
    }

    public function testIsInitializedWithAnEmptyArrayOfCards()
    {
        $this->assertEquals($this->deck->cards, []);
    }
    // maybe test for contents of array?

}
