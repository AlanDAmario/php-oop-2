<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";


//istanza category
// PASSARE NELLE ISTANZE CREATE LE VARIABILI CREATE '$category..' COME PARAMETRI, GRAZIE ALLA COMPOSIZIONE 
$category_dog = new Category("Dog", "fas fa-dog");
$category_cat = new Category("Cat", "category_id");
$category_fish = new Category("Fish", "category_id");
//****************************************************************************************************** */

//istanza prodotto
$product = new Product("Prodotti", $category_dog);
$cereals_dog = new Product("Cereali per cani", $category_dog);
$cereals_cat = new Product("Cereali", $category_cat);
$seaweed_fish = new Product("Alghe Marine", $category_fish);
//var_dump($product);
var_dump($product);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Animal list</title>
  <!-- BOOSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>

  <head>
    <h1 class="text-warning fw-bold py-5 text-center">
      <em>Catalogo Animali</em>
    </h1>
  </head>
  <main>
    <div class="row">
      <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">
              With supporting text below as a natural lead-in to additional
              content.
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>