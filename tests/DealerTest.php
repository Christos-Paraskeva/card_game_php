<?php
require './src/Dealer.php';

class DealerTest extends \PHPUnit\Framework\TestCase
{
    private $dealer;

    protected function setUp()
    {
        // $playerDouble = $this->getMock($PlayerDouble);
        // print_r($playerDouble);
        // $playerDouble->id('')
        $this->dealer = new Dealer();
        // $this->testHelper = new TestHelpers();

    }

    protected function tearDown()
    {
        $this->dealer = NULL;
    }

    public function testExists()
    {
        $this->assertInstanceOf(Dealer::class, $this->dealer);
    }

    // public function testDouble()
    // {
    //
    //
    //     $playerDouble = $this->getMockBuilder(Player::class)
    //                         //  ->setMethods(null)
    //                         //  ->disableOriginalConstructor()
    //                          ->setConstructorArgs(array('test name', 1))
    //                          ->getMock();
    //
    //      $playerDouble2 = $this->getMockBuilder(Player::class)
    //                          //  ->setMethods(null)
    //                         //   ->disableOriginalConstructor()
    //                           ->setConstructorArgs(array('test name 2', 2))
    //                           ->getMock();
    //
    //       $playerDouble3 = $this->getMockBuilder(Player::class)
    //                           //  ->setMethods(null)
    //                           //  ->disableOriginalConstructor()
    //                            ->setConstructorArgs(array('test name 3', 3))
    //                            ->getMock();
    //
    //        $playerDouble4 = $this->getMockBuilder(Player::class)
    //                            //  ->setMethods(null)
    //                            //  ->disableOriginalConstructor()
    //                             ->setConstructorArgs(array('test name 4', 4))
    //                             ->getMock();
    //
    //
    //     // $playerDouble = $this->getMockBuilder('Player')
    //     //                      ->getMock();
    //     // $playerDouble->expects($this->any())
    //     //              ->method('getId')
    //     //              ->will($this->returnValue(6));
    //     // print 'here';
    //     // print_r($playerDouble);
    //     // print_r($playerDouble2);
    //     // print_r($playerDouble3);
    //     // var_dump($playerDouble4);
    //
    //     $testArray = [];
    //     array_push($testArray,$playerDouble,$playerDouble2,$playerDouble3,$playerDouble4);
    //     // var_dump($testArray[0]);
    //
    //     // $obj = (object)[];
    //     // print '1';
    //     // var_dump(@obj);
    //     // print '2';
    //
    //     // $formattedDeck = $this->testHelper->minimizedTestDeck();
    //     $this->assertEquals(1, 2);
    // }


}
