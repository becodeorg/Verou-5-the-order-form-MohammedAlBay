<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

// TODO: provide some products (you may overwrite the example)
$productsA = [
    ['name' => 'The Lord of the Rings: The Fellowship of the Ring"', 'price' => 6.99], 
    ['name' => 'Harry Potter and the Philosopher\'s Stone', 'price' => 4.99],
    ['name' => 'Pan\'s Labyrinth', 'price' => 6.99],
    ['name' => 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe', 'price' => 8.99],
    ['name' => 'Stardust', 'price' => 13.99]
];

$productsB = [
  ['name' => 'The Girl with the Dragon Tattoo', 'price' => 9.99], 
  ['name' => 'A Clash of Kings', 'price' => 12.99],
  ['name' => 'The Wheel of Time - 1', 'price' => 10.99],
  ['name' => 'A Murder Is Announced', 'price' => 15.50],
  ['name' => 'The Da Vinci Code', 'price' => 25.00]
];

if (!isset($_GET['cat']) || $_GET['cat'] == 0) {
  $products = array_merge($productsA, $productsB);
} else if ($_GET['cat'] == 1) {
  $products = $productsA;
} else if ($_GET['cat'] == 2) {
  $products = $productsB;
}

$totalValue = 0;

function validate()
{
    // TODO: This function will send a list of invalid fields back
    return [];
}

function handleForm()
{
    // TODO: form related tasks (step 1)

    // Validation (step 2)
    $invalidFields = validate();
    if (!empty($invalidFields)) {
        // TODO: handle errors
    } else {
        // TODO: handle successful submission
    }
}

// TODO: replace this if by an actual check for the form to be submitted
$formSubmitted = false;
if ($formSubmitted) {
    handleForm();
}

require 'form-view.php';