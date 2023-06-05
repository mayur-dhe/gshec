
<?php

class Deck
{

public $cards = array();

public function __construct()
{
for($i = 1; $i <= 52; $i++)
{
$this->cards[] = new Card($i);
}
}

public function shuffle()
{
shuffle($this->cards);
}

public function deal()
{
return array_shift($this->cards);
}

}

class Card
{

public $suit;
public $rank;

public function __construct($i)
{
$this->suit = floor($i / 13);
$this->rank = $i % 13;
}

public function __toString()
{
static $suits = array("Clubs", "Diamonds", "Hearts", "Spades");
static $ranks = array(1 => "Ace", 2 => "2", 3 => "3", 4 => "4", 5 => "5", 6 => "6", 7 => "7", 8 => "8", 9 => "9", 10 => "10", 11 => "Jack", 12 => "Queen", 13 => "King");
}
}

?>