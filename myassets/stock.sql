CREATE DATABASE campusgroceryfinal;
USE campusgroceryfinal;

CREATE TABLE `stock` (
  `product_id` INT AUTO_INCREMENT PRIMARY KEY,
  `product_category` VARCHAR(50) DEFAULT NULL,
  `product_subcategory` VARCHAR(50) DEFAULT NULL,
  `product_name` VARCHAR(20) DEFAULT NULL,
  `unit_price` FLOAT(8,2) DEFAULT NULL,
  `unit_quantity` VARCHAR(15) DEFAULT NULL,
  `in_stock` INT(10) UNSIGNED DEFAULT NULL,
  `image_path` VARCHAR(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

BEGIN;
INSERT INTO `stock` VALUES (NULL, 'Frozen Food', 'Frozen Meat', 'Fish Fingers', 2.55, '375 gram', 1500, 'productimg\FishFingers375g.jpg');
INSERT INTO `stock` VALUES (NULL, 'Frozen Food', 'Frozen Meat', 'Fish Fingers', 5.00, '1000 gram', 750, 'productimg\FishFingers1kg.jpg');
INSERT INTO `stock` VALUES (NULL, 'Frozen Food', 'Frozen Vegetables', 'Tub Ice Cream', 1.80, '1 Litre', 800, 'productimg\TubIceCream1L.jpg');
INSERT INTO `stock` VALUES (NULL, 'Frozen Food', 'Others', 'Tub Ice Cream', 3.40, '2 Litre', 1200, 'productimg\TubIceCream2L.jpg');
INSERT INTO `stock` VALUES (NULL, 'Frozen Food', 'Others', 'Hash Brown', 6.40, '1000 gram', 1200, 'productimg\HashBrown.jpg');
INSERT INTO `stock` VALUES (NULL, 'Frozen Food', 'Others', 'Frozen Puff Patry', 6.10, '1600 gram', 500, 'productimg\FrozenPuffPastry.jpg');
INSERT INTO `stock` VALUES (NULL, 'Frozen Food', 'Others', 'Frozen Spring Rolls', 6.50, '640 gram', 400, 'productimg\FrozenSpringRolls.jpg');
INSERT INTO `stock` VALUES (NULL, 'Frozen Food', 'Frozen Meat', 'Chicken Nuggets', 4.40, '400 gram', 1500, 'productimg\ChickenNuggets.jpg');
INSERT INTO `stock` VALUES (NULL, 'Frozen Food', 'Frozen Vegetables', 'Frozen Peas', 3.30, '500 gram', 1000, 'productimg\FrozenPeas.jpg');
INSERT INTO `stock` VALUES (NULL, 'Frozen Food', 'Frozen Vegetables', 'Stir Fry Mix', 5.50, '850 gram', 900, 'productimg\StirFryMix.jpg');
INSERT INTO `stock` VALUES (NULL, 'Meat, Poultry & Seafood', 'Meat', 'Hamburger Patties', 2.35, 'Pack 10', 1200, 'productimg\HamburgerPatties.jpg');
INSERT INTO `stock` VALUES (NULL, 'Meat, Poultry & Seafood', 'Seafood', 'Shelled Prawns', 6.10, '200 gram', 300, 'productimg\ShelledPrawns.jpg');
INSERT INTO `stock` VALUES (NULL, 'Meat, Poultry & Seafood', 'Meat', 'T Bone Steak', 7.00, '1000 gram', 200, 'productimg\TBoneSteak.jpg');
INSERT INTO `stock` VALUES (NULL, 'Meat, Poultry & Seafood', 'Meat', 'Pork Belly', 12.00, '400 gram', 200, 'productimg\PorkBelly.jpg');
INSERT INTO `stock` VALUES (NULL, 'Meat, Poultry & Seafood', 'Poultry', 'Chicken', 9.80, '1 whole', 200, 'productimg\Chicken.jpg');
INSERT INTO `stock` VALUES (NULL, 'Meat, Poultry & Seafood', 'Meat', 'Sausage', 10.30, '450 gram', 200, 'productimg\Sausage.jpg');
INSERT INTO `stock` VALUES (NULL, 'Meat, Poultry & Seafood', 'Seafood', 'Salmon', 17.20, '460 gram', 200, 'productimg\Salmon.jpg');
INSERT INTO `stock` VALUES (NULL, 'Meat, Poultry & Seafood', 'Meat', 'Beef Scotch Fillet', 13.00, '250 gram', 200, 'productimg\BeefScotchFillet.jpg');
INSERT INTO `stock` VALUES (NULL, 'Meat, Poultry & Seafood', 'Meat', 'Lamb Loin Chops', 14.00, '500 gram', 200, 'productimg\LambLoinChops.jpg');
INSERT INTO `stock` VALUES (NULL, 'Meat, Poultry & Seafood', 'Poultry', 'Chicken Wings', 6.00, '600 gram', 200, 'productimg\ChickenWings.jpg');
INSERT INTO `stock` VALUES (NULL, 'Health & Beauty', 'Health', 'Panadol', 3.00, 'Pack 24', 2000, 'productimg\Panadol24.jpg');
INSERT INTO `stock` VALUES (NULL, 'Health & Beauty', 'Health', 'Panadol', 5.50, 'Pack 50', 1000, 'productimg\Panadol50.jpg');
INSERT INTO `stock` VALUES (NULL, 'Health & Beauty', 'Beauty', 'Bath Soap', 2.60, 'Pack 6', 500, 'productimg\BathSoap.jpg');
INSERT INTO `stock` VALUES (NULL, 'Health & Beauty', 'Beauty', 'Shampoo', 16.90, '900 ml', 500, 'productimg\Shampoo.jpg');
INSERT INTO `stock` VALUES (NULL, 'Health & Beauty', 'Beauty', 'Conditioner', 10.60, '900ml', 500, 'productimg\Conditioner.jpg');
INSERT INTO `stock` VALUES (NULL, 'Health & Beauty', 'Health', 'Eye Drop', 5.49, '15 ml', 300, 'productimg\EyeDrops.jpg');
INSERT INTO `stock` VALUES (NULL, 'Health & Beauty', 'Health', 'Dental Floss', 3.10, '50 m', 500, 'productimg\Dental Floss.jpg');
INSERT INTO `stock` VALUES (NULL, 'Health & Beauty', 'Beauty', 'Cotton Tips', 3.60, 'Pack 400', 500, 'productimg\Cotton Tips.jpg');
INSERT INTO `stock` VALUES (NULL, 'Dairy', NULL, 'Cheddar Cheese', 8.00, '500 gram', 1000, 'productimg\CheddarCheese500g.jpg');
INSERT INTO `stock` VALUES (NULL, 'Dairy', NULL, 'Cheddar Cheese', 15.00, '1000 gram', 600, 'productimg\CheddarCheese1kg.jpg');
INSERT INTO `stock` VALUES (NULL, 'Dairy', NULL, 'Cream Cheese', 5.40, '250 gram', 1000, 'productimg\CreamCheese.jpg');
INSERT INTO `stock` VALUES (NULL, 'Dairy', NULL, 'Milk', 1.60, '1 Litre', 1000, 'productimg\Milk.jpg');
INSERT INTO `stock` VALUES (NULL, 'Dairy', NULL, 'Yogurt', 4.50, '500 gram', 1000, 'productimg\Yogurt.jpg');
INSERT INTO `stock` VALUES (NULL, 'Dairy', NULL, 'Butter', 7.50, '400 gram', 1000, 'productimg\Butter.jpg');
INSERT INTO `stock` VALUES (NULL, 'Dairy', NULL, 'Brie Cheese', 7.00, '200 gram', 1000, 'productimg\BrieCheese.jpg');
INSERT INTO `stock` VALUES (NULL, 'Dairy', NULL, 'Thickened Cream', 2.85, '300 gram', 800, 'productimg\ThickenedCream.jpg');
INSERT INTO `stock` VALUES (NULL, 'Fruit', NULL, 'Navel Oranges', 3.99, 'Bag 20', 200, 'productimg\NavelOranges.jpg');
INSERT INTO `stock` VALUES (NULL, 'Fruit', NULL, 'Bananas', 1.49, 'Kilo', 400, 'productimg\Bananas.jpg');
INSERT INTO `stock` VALUES (NULL, 'Fruit', NULL, 'Peaches', 2.99, 'Kilo', 500, 'productimg\Peaches.jpg');
INSERT INTO `stock` VALUES (NULL, 'Fruit', NULL, 'Grapes', 3.50, 'Kilo', 200, 'productimg\Grapes.jpg');
INSERT INTO `stock` VALUES (NULL, 'Fruit', NULL, 'Apples', 1.99, 'Kilo', 500, 'productimg\Apples.jpg');
INSERT INTO `stock` VALUES (NULL, 'Fruit', NULL, 'Pineapples', 3.90, '1 whole', 100, 'productimg\Pineapples.jpg');
INSERT INTO `stock` VALUES (NULL, 'Fruit', NULL, 'Watermelon', 2.50, 'Kilo', 300, 'productimg\Watermelon.jpg');
INSERT INTO `stock` VALUES (NULL, 'Fruit', NULL, 'Avocado', 4.50, 'Kilo', 500, 'productimg\Avocado.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pantry', NULL, 'Earl Grey Tea Bags', 2.49, 'Pack 10', 1200, 'productimg\EarlGreyTeaBags10.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pantry', NULL, 'Earl Grey Tea Bags', 7.25, 'Pack 50', 1200, 'productimg\EarlGreyTeaBags50.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pantry', NULL, 'Earl Grey Tea Bags', 13.00, 'Pack 100', 800, 'productimg\EarlGreyTeaBags100.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pantry', NULL, 'Instant Coffee', 2.89, '200 gram', 500, 'productimg\InstantCoffee200g.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pantry', NULL, 'Instant Coffee', 5.10, '500 gram', 500, 'productimg\InstantCoffee500g.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pantry', NULL, 'Spaghetti', 3.10, '500 gram', 800, 'productimg\Spaghetti.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pantry', NULL, 'Rice', 3.30, '1000 gram', 800, 'productimg\Rice.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pantry', NULL, 'Chocolate Bar', 2.50, '500 gram', 300, 'productimg\ChocolateBar500g.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pantry', NULL, 'Biscuits', 3.10, '400 gram', 300, 'productimg\Biscuits.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pet', NULL, 'Dry Dog Food', 5.95, '5 kg Pack', 400, 'productimg\DryDogFood5kg.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pet', NULL, 'Dry Dog Food', 1.95, '1 kg Pack', 400, 'productimg\DryDogFood1kg.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pet', NULL, 'Bird Food', 3.99, '500g packet', 200, 'productimg\BirdFood.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pet', NULL, 'Cat Food', 2.00, '400g tin', 200, 'productimg\CatFood.jpg');
INSERT INTO `stock` VALUES (NULL, 'Pet', NULL, 'Fish Food', 3.00, '500g packet', 200, 'productimg\FishFood.jpg');
INSERT INTO `stock` VALUES (NULL, 'Household', 'Cleaning', 'Garbage Bags Small', 6.50, 'Pack 40', 500, 'productimg\GarbageBagsSmall.jpg');
INSERT INTO `stock` VALUES (NULL, 'Household', 'Cleaning', 'Garbage Bags Large', 12.00, 'Pack 100', 300, 'productimg\GarbageBagsLarge.jpg');
INSERT INTO `stock` VALUES (NULL, 'Household', 'Laundry', 'Washing Powder', 4.00, '1000 gram', 800, 'productimg\WashingPowder.jpg');
INSERT INTO `stock` VALUES (NULL, 'Household', 'Laundry', 'Laundry Bleach', 3.55, '2 Litre Bottle', 500, 'productimg\LaundryBleach.jpg');
COMMIT;
