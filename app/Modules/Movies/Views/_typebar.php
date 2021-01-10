<nav class="navbar-expand-lg" id="sidebar">
  <!-- Header -->
  <div class="collapse navbar-collapse">
    <div class="sidebar-header"><h5>Category</h5></div>
  </div>
  <!-- List -->
  <div class="collapse navbar-collapse">
    <ul class="list-unstyled components">
      <?php
        $typelist = array("All", "Action", "Adventure", "Animation", "Comedy", "Crime",
          "Documentaries", "Drama", "Family", "Horror", "Musicals", "Romance", "Sci-Fi", "Thriller", "War");
        for ($i = 0; $i < count($typelist); $i++) {
          echo '<li><a href="#">'.$typelist[$i].'</a></li>'; }
      ?>
    </ul>
  </div>
</nav>