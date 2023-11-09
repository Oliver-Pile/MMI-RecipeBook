<div class="container">
  <h1 class="mb-4 pb-2">My Account</h1>
  <p>Welcome to your account. From here you can view the recipes added to your favourites list.</p>

  <h2>My Favourites</h2>
  <ul class="user-favs">
    <?php
      $Favourite = new Favourite($Conn);
      $user_favs = $Favourite->getAllFavouritesForUser();
      if($user_favs) {
        foreach($user_favs as $fav) {
          echo '<li><a href="index.php?p=recipe&id='.$fav['recipe_id'].'">'.$fav['recipe_name'].'</a></li>';
          }
      }
    ?>
  </ul>
</div>