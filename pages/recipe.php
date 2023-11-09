<?php
  $Recipe = new Recipe($Conn);
  $recipe_data = $Recipe->getRecipe($_GET['id']);
?>
<div class="container">
  <h1 class="mb-4 pb-2"><?php echo $recipe_data['recipe_name']; ?></h1>
  <div class="row">
    <div class="col-md-6">
      <?php if($recipe_data['images']) { ?>
        <div class="row">
          <?php foreach($recipe_data['images'] as $image) { ?>
          <div class="col-md-4">
          <div class="recipe-image mb-4" style="background-image: url('./recipe-images/<?php echo $image['recipe_image']; ?>');">
          <a href="./recipe-images/<?php echo $image['recipe_image']; ?>" data-lightbox="recipe-imgs"></></a>
            </div>
          </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>

    <div class="col-md-6">
      <p><?php echo $recipe_data['recipe_instructions']; ?></p>
      <ul class="recipe-features">
      <li><i class="far fa-clock"></i> <?php echo $recipe_data['recipe_time']; ?></li>
      <li><i class="fas fa-users"></i> <?php echo $recipe_data['recipe_servings']; ?> Servings</li>
      <li><i class="fas fa-dollar-sign"></i> <?php echo $recipe_data['recipe_price']; ?></li>
      <li><i class="fas fa-tags"></i> <?php echo $recipe_data['recipe_tags']; ?></li>
      </ul>

      <?php
        $Favourite = new Favourite($Conn);
        $is_fav = $Favourite->isFavourite($_GET['id']);
        if($is_fav) {
        ?>
        <button id="removeFav" type="button" class="btn btn-primary mb-3" data-recipeid="<?php echo
          $_GET['id']; ?>">Remove from favourites
        </button>
        <?php
        } else {
        ?>
        <button id="addFav" type="button" class="btn btn-primary mb-3" data-recipeid="<?php echo $_GET['id']; ?>">
          Add to favourites
        </button>
        <?php
        }
        ?>
    </div>
  </div>
</div>