<?php
class Deck {

  public function __construct () {
    $this->names = ['Ace', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Jack', 'Queen', 'King'];
    $this->suits = ['Hearts', 'Clubs', 'Spades', 'Diamonds'];
    $this->cards = [];
  }

  public function createDeck($type) {
    if ($type === 'standard') {
      $positionInDeck = 1;

      for ($s = 0; $s < sizeof($this->suits); $s++) {
        for ($v = 0; $v < sizeof($this->names); $v++) {
          array_push($this->cards, new Card($v+1, $this->names[$v], $this->suits[$s], $positionInDeck));
          $positionInDeck += 1;
        }
      }
      return $this->cards;

    } else {
      print 'This should be an error message';
    }
  }

}
