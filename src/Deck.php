<?php
class Deck {

  public function __construct () {
    $this->names = ['Ace', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Jack', 'Queen', 'King'];
    $this->suits = ['Hearts', 'Clubs', 'Spades', 'Diamonds'];
    $this->cards = [];
  }

}
