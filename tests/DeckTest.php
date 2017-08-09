<?php
require './src/Deck.php';
require './tests/TestHelpers.php';

class DeckTest extends \PHPUnit\Framework\TestCase
{
    private $deck;

    protected function setUp()
    {
        $this->deck = new Deck();
        $this->test = new TestHelpers();
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
        // this allows me to call a function in the TestHelper file
        // print_r($this->test->FirstTest());
        // can save it to a variable too
        // $something = $this->test->FirstTest();
        // print_r($something);

        // this allows to print variable to console for debugging
        // print_r($this->deck);

        // this allows to print strings to console
        // print 'This is a string';

        $this->assertEquals($this->deck->cards, []);
    }

    public function testArrayOfNamesIsCorrect()
    {
        // $formatArrayStructure = $this->test->formatArrayStructure();


        $arrayOfNames = $this->test->CardNames();
        print_r($arrayOfNames);
        $this->assertEquals($this->deck->names, $arrayOfNames);
    }
    // maybe test for contents of array?

    public function testCardNameIsDefinedWhenCreatingADeck()
    {
        $formattedDeck = $this->test->formatArrayStructure($this->deck->CreateDeck('standard'));
        $this->assertEquals($formattedDeck[0][0], 'Ace');
    }
}
