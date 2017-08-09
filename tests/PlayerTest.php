<?php
require './src/Player.php';

class PlayerTest extends \PHPUnit\Framework\TestCase
{
    private $player;

    protected function setUp()
    {
        $this->player = new Player();
    }

    protected function tearDown()
    {
        $this->player = NULL;
    }

    public function testExists()
    {
        $this->assertInstanceOf(Player::class, $this->player);
    }
}
