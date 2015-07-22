<?php
// create an array for suits
$suits = ['Clubs', 'Hearts', 'Spades', 'Diamonds'];
// create an array for cards
$cards = ['Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King'];
// build a deck (array) of cards
// card values should be "VALUE SUIT". ex: "7 H"
// make sure to shuffle the deck before returning it
function getInput($upper = true){

    // Capture user input
    $cleaninput = trim(fgets(STDIN));

    // Only sometimes will we modify the input to uppercase, before returning. 
    if ($upper) {
        $cleaninput = strtoupper($cleaninput);
    }
    
    // Return user input 
    return $cleaninput;
 }

function buildDeck($suits, $cards) {
	foreach ($suits as $suit) {
		foreach ($cards as $card) {
			$deck[]= "$card of $suit";
		}
	}
	shuffle($deck);
	return $deck;
}
// determine if a card is an ace
// return true for ace, false for anything else
function cardIsAce($card) {
	$cardArray = explode(' ', $card);
	if ($cardArray[0] == 'Ace') {
		return true;
	}else{
		return false;
	}
}
// determine the value of an individual card (string)
// aces are worth 11
// face cards are worth 10
// numeric cards are worth their value
function getCardValue($card) {
	$getCardValue = 0;
	$cardArray = explode(' ', $card);
	switch ($cardArray[0]) {
		case 'Ace':
			$getCardValue += 11;
			break;

		case 'Jack';
			$getCardValue += 10;
			break;

		case 'Queen';
			$getCardValue += 10;
			break;

		case 'King';
			$getCardValue += 10;
			break;
		
		default:
			$getCardValue = intval($card);
			break;
	}
	return $getCardValue;
}
// get total value for a hand of cards
// don't forget to factor in aces
// aces can be 1 or 11 (make them 1 if total value is over 21)
function getHandTotal($hand) {
	$handTotal = 0;
	foreach ($hand as $card) {
		$cardValue = getCardValue($card);
		$handTotal += $cardValue;
	}
	return $handTotal;
}
// draw a card from the deck into a hand
// pass by reference (both hand and deck passed in are modified)
function drawCard(&$hand, &$deck) {
	$randomCard = mt_rand(0, count($deck) -1);
	$selectedCard = $deck[$randomCard];
	array_push($hand, $selectedCard);
	unset($deck, $selectedCard);
	return $hand;
}
// print out a hand of cards
// name is the name of the player
// hidden is to initially show only first card of hand (for dealer)
// output should look like this:
// Dealer: [4 C] [???] Total: ???
// or:
// Player: [J D] [2 D] Total: 12
function echoHand($hand, $name, $hidden = false) {
	foreach ($hand as $card) {
		if ($hidden) {
			echo $name . " hand: " . $card . PHP_EOL;
			break;
		}else {
			echo $name . " hand: " . $card . PHP_EOL;
			continue;
		}
	}

}
// build the deck of cards
$deck = buildDeck($suits, $cards);
// initialize a dealer and player hand
$dealer = [];
$player = [];
// dealer and player each draw two cards
$dealer = drawCard($dealer, $deck);
$player = drawCard($player, $deck);
$dealer = drawCard($dealer, $deck);
$player = drawCard($player, $deck);
// echo the dealer hand, only showing the first card
echoHand($dealer, "Dealer", true);

// echo the player hand
echoHand($player, "Player");
echo "You have " . getHandTotal($player) . " points!";

// allow player to "(H)it or (S)tay?" till they bust (exceed 21) or stay
while (getHandTotal($player) <= 21) {
	echo "(H)it or (S)tay ";
	$input = getInput();

if ($input == "H") {
	$player = drawCard($player, $deck);
	echo "Your score is " . getHandTotal($player) . PHP_EOL;
	if ((getHandTotal($dealer) > getHandTotal($player)) && getHandTotal($player) > 21) {
		echo "Dealer score is " . getHandTotal($dealer) . PHP_EOL;
		echo "Dealer Wins";
	}elseif ((getHandTotal($dealer) == getHandTotal($player)) && getHandTotal($player) > 21) {
		echo "Dealer score is " . getHandTotal($dealer) . PHP_EOL;
		echo "It is a Draw!";
	}elseif (getHandTotal($player) > 21) {
		echo "Dealer score is " . getHandTotal($dealer) . PHP_EOL;
		echo "You busted Dealer Wins!";
	}
}elseif ($input == "S") {
	echoHand($dealer, "Dealer");
	while ((getHandTotal($dealer) < getHandTotal($player)) && (getHandTotal($dealer) < 21)) {
		$dealer = drawCard($dealer, $deck);
			echo "Your score is " . getHandTotal($player) . PHP_EOL;
			echo "Dealer score is " . getHandTotal($dealer) . PHP_EOL;

		if (getHandTotal($dealer) > 21) {
			echo "Dealer busted you win!";
			exit(0);
		}
	}
	if (getHandTotal($dealer) > getHandTotal($player)) {
		echo "Your score is " . getHandTotal($player) . PHP_EOL;
		echo "Dealer score is " . getHandTotal($dealer) . PHP_EOL;
		echo "Dealer Wins";
		exit(0);
	}elseif (getHandTotal($dealer) == getHandTotal($player)) {
		echo "Your score is " . getHandTotal($player) . PHP_EOL;
		echo "Dealer score is " . getHandTotal($dealer) . PHP_EOL;
		echo "It is a Draw!";
		exit(0);
	}elseif ($getHandTotal($player) == 21) {
		echo "Your score is " . getHandTotal($player) . PHP_EOL;
		echo "Dealer score is " . getHandTotal($dealer) . PHP_EOL;
		echo "You Win!";
		exit(0);
	}else {
		echo "Your score is " . getHandTotal($player) . PHP_EOL;
		echo "Dealer score is " . getHandTotal($dealer) . PHP_EOL;
		echo "You Win!";
		exit(0);
	}
}elseif ($input != ("H" || "S")) {
	echo "(H)it or (S)tay";
	$input = getInput();
}
}
// at this point, if the player has more than 21, tell them they busted
// otherwise, if they have 21, tell them they won (regardless of dealer hand)
// if neither of the above are true, then the dealer needs to draw more cards
// dealer draws until their hand has a value of at least 17
// show the dealer hand each time they draw a card
// finally, we can check and see who won
// by this point, if dealer has busted, then player automatically wins
// if player and dealer tie, it is a "push"
// if dealer has more than player, dealer wins, otherwise, player wins