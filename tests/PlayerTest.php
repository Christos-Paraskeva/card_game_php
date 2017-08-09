<?php
require './src/Player.php';

class PlayerTest extends \PHPUnit\Framework\TestCase
{
    private $player;

    protected function setUp()
    {
        $this->player = new Player('Test Name');
    }

    protected function tearDown()
    {
        $this->player = NULL;
    }

    public function testExists()
    {
        $this->assertInstanceOf(Player::class, $this->player);
    }

    public function testIsInitializedWithAName()
    {
        $this->assertEquals($this->player->name, 'Test Name');
    }
}
