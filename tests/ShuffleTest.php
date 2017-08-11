<?php
require './src/Shuffle.php';

class ShuffleTest extends \PHPUnit\Framework\TestCase
{
    private $shuffle;

    protected function setUp()
    {
        $this->shuffle = new Shuffle();
    }

    protected function tearDown()
    {
        $this->shuffle = NULL;
    }

    public function testExists()
    {
        $this->assertInstanceOf(Shuffle::class, $this->shuffle);
    }

    public function testInitializesWithAVariableSetToFalseConfirmingWhetherTheShuffleHasBeenPerformedCorrectly()
    {
        $this->assertEquals($this->shuffle->correctShuffle, false);
    }

    public function testTheDefaultShuffleMethodDoesNotReturnAnyTwoCardsInSequence()
    {
        $cardDouble1 = $this->getMockBuilder(Card::class)
                            ->setConstructorArgs(array(1, 'Ace', 'Hearts', 1))
                            ->getMock();

        $cardDouble2 = $this->getMockBuilder(Card::class)
                            ->setConstructorArgs(array(2, 'Two', 'Hearts', 2))
                            ->getMock();

        $cardDouble3 = $this->getMockBuilder(Card::class)
                            ->setConstructorArgs(array(3, 'Three', 'Hearts', 3))
                            ->getMock();

       $invalidScenarioOne = array($cardDouble1, $cardDouble2, $cardDouble3);
       $invalidScenarioTwo = array($cardDouble2, $cardDouble3, $cardDouble1);
       $invalidScenarioThree = array($cardDouble3, $cardDouble1, $cardDouble2);

       $shuffledCards = $this->shuffle->defaultShuffle($invalidScenarioOne);

       $this->assertNotEquals($shuffledCards, null);
       $this->assertNotEquals($shuffledCards, $invalidScenarioOne);
       $this->assertNotEquals($shuffledCards, $invalidScenarioTwo);
       $this->assertNotEquals($shuffledCards, $invalidScenarioThree);
    }

}
