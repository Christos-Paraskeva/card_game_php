<?php
require './src/Dealer.php';

class DealerTest extends \PHPUnit\Framework\TestCase
{
    private $dealer;

    // protected PlayerDouble;

    protected function setUp()
    {
        // $playerDouble = $this->getMock($PlayerDouble);
        // print_r($playerDouble);
        // $playerDouble->id('')
        $this->dealer = new Dealer();
    }

    protected function tearDown()
    {
        $this->dealer = NULL;
    }

    public function testDouble()
    {


        $playerDouble = $this->getMockBuilder(Player::class)
                            //  ->setMethods(null)
                             ->disableOriginalConstructor()
                             ->getMock();


        // $playerDouble = $this->getMockBuilder('Player')
        //                      ->getMock();
        // $playerDouble->expects($this->any())
        //              ->method('getId')
        //              ->will($this->returnValue(6));
        // print 'here';
        print_r($playerDouble);
        $this->assertEquals(1, 2);
    }


}
