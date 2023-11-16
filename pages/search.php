<?PHP
  $Recipe = new Recipe($Conn);
  $recipes = $Recipe->searchRecipes($_POST['query']);
?>
<div class="container">
  <h1 class="mb-4 pb-2">Search results for "<?php echo $_POST['query']; ?>"</h1>
  <div class="row">
    <?php foreach($recipes as $recipe) { ?>
      <div class="col-md-3">
        <div class="recipe-card">
          <div class="recipe-card-image" style="background-image: url('./recipe-images/<?php echo $recipe['recipe_image']; ?>');">
          <a href="index.php?p=recipe&id=<?php echo $recipe['recipe_id']; ?>"></a>
          </div>
          <a href="index.php?p=recipe&id=<?php echo $recipe['recipe_id']; ?>">
            <h3><?php echo $recipe['recipe_name']; ?></h3>
          </a>
        </div>
      </div>
    <?php } ?>
  </div>
</div>