<?php
class TestHelpers {

  // public $value;

  // public function __construct ($value, $name, $suit, $originalDeckPosition) {
  //   $this->value = $value;
  //   $this->name = $name;
  //   $this->suit = $suit;
  //   $this->originalDeckPosition = $originalDeckPosition;
  // }

  public function CardNames() {
    return ['Ace', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Jack', 'Queen', 'King'];
  }

  public function formatArrayStructure($deck) {
    $formattedDeck = [];

    if (sizeof($formattedDeck) === 0) {
      for ($i = 0; $i < sizeof($deck); $i++) {
        if (sizeof($formattedDeck) < 52) {
          array_push($formattedDeck, [$deck[$i]->name, $deck[$i]->suit, $deck[$i]->value, $deck[$i]->originalDeckPosition]);
        }
      }
    }

    return $formattedDeck;
  }

}
