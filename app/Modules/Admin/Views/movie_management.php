<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
  <div class="container content-element">
    <!-- IMAGE INPUT -->
    <div class="row" id="movie-responsive">
      <!-- IMAGE HOLDER -->
      <div class="col-sm-5" id="image-manager">
        <div id="img-modify-div"><img class="card-img-top" src="<?php echo prep_url('http://placehold.it/400x400'); ?>"></div>
        <div class="input-group my-3">
          <div class="input-group-prepend">
            <label class="btn btn-info" id="input-img-file">
              <i class="fa fa-paperclip"></i>
              <input type="file" name="input_img" hidden>
            </label>
          </div>
          <input type="text" class="form-control" placeholder="Upload File" disabled>
        </div>
      </div>
      <!-- INFO INPUT -->
      <div class="col-sm-7 pl-0" id="info-manager">
        <!-- NAME -->
        <div class="row form-group">
          <div class="input-group col-12">
            <label class="label col-3">NAME</label>
            <input class="form-control" id="modi-name-input" name="input_name" type="text" required>
          </div>
        </div>
        <!-- YEAR -->
        <div class="row form-group">
          <div class="input-group col-12">
            <label class="label col-3">YEAR</label>
            <select class="form-control" id="modi-year-input" name="input_year" required>
              <?php
                /* Set the option automatic selected (In IE, the option is chosen by default). */
                $currently_selected = date('Y');
                /* Set the earliest year option. */
                $earliest_year = 1997;
                /* Set the latest year option. */
                $latest_year = date('Y');
                foreach (range($latest_year, $earliest_year) as $i) {
                  echo '<option value="'.$i.'">'.$i.'</option>'; }
              ?>
            </select>
          </div>
        </div>
        <!-- DATE -->
        <div class="row form-group">
          <div class="input-group col-12">
            <label class="label col-3">DATE</label>
            <input class="form-control" id="modi-date-input" name="input_date" type="date" required>
          </div>
        </div>
        <!-- TYPE -->
        <div class="row form-group">
          <div class="input-group col-12">
            <label class="label col-3">TYPE</label>
            <select class="form-control" id="modi-type-input" name="input_type" required>
              <?php
                $typelist = array("Action", "Adventure", "Animation", "Comedy", "Crime",
                  "Documentaries", "Drama", "Family", "Horror", "Musicals", "Romance", "Sci-Fi", "Thriller", "War");
                for ($i = 0; $i < count($typelist); $i++) {
                  echo '<option value="'.$typelist[$i].'">'.$typelist[$i].'</option>'; }
              ?>
            </select>
          </div>
        </div>
        <!-- TRAILER -->
        <div class="row form-group">
          <div class="input-group col-12">
            <label class="label col-3">TRAILER</label>
            <input class="form-control" id="modi-link-input" name="input_link" type="text" placeholder="Ex. https://www.youtube.com/embed/{Video ID}">
          </div>
        </div>
        <!-- DIRECTOR -->
        <div class="row form-group">
          <div class="input-group col-12">
            <label class="label col-3">DIRECTOR</label>
            <input class="form-control" id="modi-dirc-input" name="input_dirc" type="text">
          </div>
        </div>
        <!-- CAST -->
        <div class="row form-group">
          <div class="input-group col-12">
            <label class="label col-3">CAST</label>
            <textarea class="form-control" id="modi-cast-input" name="input_cast"></textarea>
          </div>
        </div>
        <!-- DETAIL -->
        <div class="row form-group">
          <div class="input-group col-12">
            <label class="label col-3">DETAIL</label>
            <textarea class="form-control" id="modi-info-input" name="input_detail"></textarea>
          </div>
        </div>
        <!-- Button -->
        <div class="text-center">
          <button class="btn btn-danger" type="submit" style="width: 120px;">CREATE</button>
          <button class="btn btn-outline-danger" type="reset" style="width: 120px;">CLEAR</button>
        </div>
      </div>
    </div>
  </div>
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
  <script type="text/javascript"></script>
<?= $this->endSection(); ?>