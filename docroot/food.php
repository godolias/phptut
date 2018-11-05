<?php

class Food
{
  public function listItem()
  {
    foreach ($this->items as $key => $item) {
      ?>
      <div>
        <span style="margin-right: 200px"><?php echo $this->items[$key][0] ?></span>
        <span style="width: 200px"><?php echo $this->items[$key][1] ?></span>
        <span style="width: 200px"><?php echo $this->items[$key][2] ?></span>
      </div>
      <?php
    }
    ?>
    <?php
  }
}
$items =
    [
        [
            "Fleisch",
            "500g",
            "3Euro"
        ],
        [
            "Obst",
            "1kg",
            "3Euro",
        ],
        [
            "Gemüse",
            "3kg",
            "3Euro",
        ],
        [
            "Öl",
            "1l",
            "3Euro",
        ]
    ];
$object1 = new Shoppinglist($items);
$object1->listItem();