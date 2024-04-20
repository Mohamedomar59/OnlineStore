

<?php

include "navbar.php";

$products=[
    'product 1' =>[
        'price' => '620',
        'img'=>'image/8.jpg',
        'desc'=>'lol',
    ],
    'product 2' =>[
        'price' => '8700',
        'img'=>'image/9.jpg',
        'desc'=>'lol',
    ],
    'product 3' =>[
        'price' => '6300',
        'img'=>'image/12.jpg',
        'desc'=>'lol',
    ],
    'product 4' =>[
        'price' => '620',
        'img'=>'image/1.jpg',
        'desc'=>'lol',
    ],
     'product 5' =>[
        'price' => '8100',
        'img'=>'image/4.jpg',
        'desc'=>'lol',
    ],
    'product 6' =>[
        'price' => '6400',
        'img'=>'image/5.jpg',
        'desc'=>'lol',
    ],
];


?>

<div class="container">
<div class="row">




<?php

foreach ($products as $key => $value) 
{
?>
<div class="col-s-6 col-md-4">


<div class="card mb-5" style="width: 18rem;">
  <img src="<?php echo $value['img']  ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <small class="card-title"><?php  echo $value['price']  ?> LE.</small>
    <h5 class="card-title"><?php echo $key   ?></h5>
    <p class="card-text"><?php echo $value['desc']   ?></p>
    <a href="#" class="btn btn-primary">Buy</a>
  </div>
</div>

</div>
<?php
}

?>

</div>
</div>