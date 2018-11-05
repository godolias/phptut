<?php

/**
 * Class Shoppinglist
 *
 * asdfasdf asdf
 */
class Shoppinglist
{
  /**
   * @var array $items
   *   List of items.
   */
  protected $items;

  /**
   * Shoppinglist constructor.
   * @param $items
   */
  function __construct($items = [])
  {
    $this->items = $items;
  }

  /**
   * Beschreibungs
   *
   * @param string $product
   */
  function addItem($items)
  {
    $this->items[] = $items;
  }

  function getItems()
  {
    return $this->items;
  }

  /**
   * Returns an item by name.
   *
   * @param string $name
   *   Name to look for in list.
   * @return array|booeal
   *   Item found by name, or false if nothing found.
   */
  function getItemByName($name)
  {
    foreach ($this->items as $key => $item) {
      if ($this->items[$key][0] == $name) {
        // Return item on match
        return $this->items[$key];
      }
    }
  }

  function removeItemByName($items)
  {
    foreach ($this->items as $key => $item) {
      $this->items = $items;
      unset($this->items[$key][0]);

    }
  }
}

class ShoppingListItem
{
  public $product;
  public $amount;


  function __construct($product, $amount)
  {
    $this->product = $product;
    $this->amount = $amount;
  }

  function getProduct() {
    return $this->product;
  }

  function getAmount() {
    return $this->amount;
  }

  function calc() {
     $price = $this->amount * $this->product->getPrice();
     return $price;
  }
}

class Product
{

  private $name;
  private $price;

  function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function setPrice($price)
  {
    $this->price = $price;
  }

  function getName() {
    return $this->name;
  }

  function getPrice() {
    return $this->price;
  }
}

// DATENBANK TEIL
$shoppinglist = new ShoppingList();

$cheese = new Product("cheese", 3);
$bread = new Product("bread", 2);

$cheese_item = new ShoppingListItem($cheese, 2);
$bread_item = new ShoppingListItem($bread, 10);

$shoppinglist->addItem($cheese_item);
$shoppinglist->addItem($bread_item);


// DARSTRELLUNG
$items = $shoppinglist->getItems();
foreach ($items as $item) {
  echo '<div> <span style="margin-right: 200px">'. $item->getProduct()->getName() . '</span>
          <span style="margin-right: 200px">' . $item->getAmount() .
          '</span><span style="margin-right: 200px">' . $item->calc() . '</span> </div>';
}


// FILE A
//$apple = new Product();
//$shopinglist = new Shoppinglist($items);
//$shoppinglistitem = new ShoppingListItem($items);
//$listItem->listItem();
//$object1->addItem('Kaese', '200g');
//$object1->getItemByName('Kaese');
//$object1->removeItemByName($items);

// FILE B
//$object1->listItem();
