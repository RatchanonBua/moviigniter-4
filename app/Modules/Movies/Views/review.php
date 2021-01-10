<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
  <div class="container content-element">
    <!-- Movie Information -->
    <div class="row" id="review-primary-row">
      <!-- Movie Name -->
      <div class="col-10" id="review-movie-name">
        <h2>SPIDER-MAN: FAR FROM HOME (2019)</h2>
      </div>
      <!-- Action Button -->
      <div class="col-2 mt-1">
        <a class="dropdown-toggle pull-right" id="action-dropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" href="#">TOOLS </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="action-dropdown">
          <a class="dropdown-item" href="#">
            <i class="fa fa-edit"></i>&ensp;&thinsp;UPDATE</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <i class="fa fa-trash"></i>&emsp;DELETE</a>
        </div>
      </div>
    </div>
    <!-- Movie Content -->
    <div class="row pt-2">
      <div class="col-lg-6 order-2 order-lg-1">
        <div class="row">
          <!-- Movie Image -->
          <div class="col-xl-5 col-lg-6 col-5 pr-0" id="review-movie-img">
            <img width="100%" src="<?php echo prep_url('https://images-na.ssl-images-amazon.com/images/I/910t9BoIymL._AC_SL1500_.jpg'); ?>">
          </div>
          <!-- Movie Information -->
          <div class="col-xl-7 col-lg-6 col-7">
            <!-- Rating -->
            <h4 class="font-weight-bold">RATING: 5.0 / 5.0</h4>
            <!-- Vote Count -->
            <p>FROM 1500 VOTES</p>
            <!-- Genre -->
            <div class="row">
              <span class="col-3 font-weight-bold">GENRE:&ensp;</span>
              <span class="col-9" ><a href="#">Action</a></span>
            </div>
            <!-- Cast -->
            <div class="row">
              <span class="col-3 font-weight-bold">CAST:&ensp;</span>
              <span class="col-9">Tom Holland<br>Samuel L. Jackson<br>Jake Gyllenhaal</span>
            </div>
            <!-- Director -->
            <div class="row">
              <span class="col-xl-3 col-lg-4 col-3 font-weight-bold">DIRECTOR:&ensp;</span>
              <span class="col-xl-9 col-lg-8 col-9">Jon Watts</span>
            </div>
            <!-- Date -->
            <div class="row">
              <span class="col-3 font-weight-bold">DATE:&ensp;</span>
              <span class="col-9">2 July 2019</span>
            </div>
            <!-- Detail (Medium Responsive Exclude) -->
            <div class="row d-md-none d-lg-flex">
              <span class="col-3 font-weight-bold">DETAIL:&ensp;</span>
              <span class="col-9"><a href="#">See More</a></span>
            </div>
            <!-- Detail (Medium Responsive Only) -->
            <div class="d-none d-md-flex d-lg-none border-top my-3"></div>
            <div class="d-none d-md-flex d-lg-none" id="md-movie-detail">
              <p class="text-justify">
                Peter Parker's relaxing European vacation takes an unexpected turn when Nick Fury shows up in his hotel room to recruit him for a mission. The world is in danger as four massive elemental creatures -- each representing Earth, Air, Water and Fire -- emerge from a hole torn in the universe. Parker soon finds himself donning the Spider-Man suit to help Fury and fellow superhero Mysterio stop the evils from wreaking havoc across the continent.
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Movie Trailer -->
      <div class="col-lg-6 order-1 order-lg-3" id="iframe-wrap">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Nt9L1jCKGnE" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="border-top my-3"></div>

    <!-- My Review -->
    <div class="row mt-4">
      <h3 class="col-11">MY REVIEW</h3>
    </div>
    <!-- Review Card -->
    <div class="card card-3 mt-3">
      <div class="row ml-3 mt-3 mr-3">
        <img class="rounded-circle shadow rounded review-user-image" src="<?php echo prep_url('https://www.flaticon.com/svg/static/icons/svg/149/149452.svg'); ?>">
        <div class="col">
          <h5 class="font-weight-bold">FALTZNER THYMES</h5>
          <div class="star-rating rising-star d-flex flex-row-reverse pull-left">
            <input type="radio" id="rw-5-star" name="rating" value="5"/><label for="rw-5-star" title="Best"     ></label>
            <input type="radio" id="rw-4-star" name="rating" value="4"/><label for="rw-4-star" title="Good"     ></label>
            <input type="radio" id="rw-3-star" name="rating" value="3"/><label for="rw-3-star" title="Average"  ></label>
            <input type="radio" id="rw-2-star" name="rating" value="2"/><label for="rw-2-star" title="Bad"      ></label>
            <input type="radio" id="rw-1-star" name="rating" value="1"/><label for="rw-1-star" title="Worst"    ></label>
          </div>
        </div>
        <!-- Delete Review Icon -->
        <div class="col-1">
          <a href="#" class="pull-right" style="font-size: 1.5em"><i class="fa fa-trash"></i></a>
        </div>
      </div>
      <!-- Comment Area -->
      <div class="m-3">
        <textarea class="form-control" rows="5" placeholder="WRITE YOUR REVIEW HERE..." style="resize: none;">เรื่องนี้สนุกดีนะครับ ชอบน้อง Tom Holland มากๆ - ขอบอกไว้ก่อนว่าถ้าใครยังไม่ได้ดู Avengers: Endgame อย่าเพิ่งมาดูเรื่องนี้นะครับ</textarea>
      </div>
      <!-- Submit Button -->
      <div class="row mb-3 mr-3 ml-auto">
        <button type="button" class="btn btn-outline-primary">SUBMIT MY REVIEW</button>
      </div>
    </div>

    <!-- Other Reviews -->
    <div class="row mt-4">
      <h3 class="col-9">OTHER REVIEWS</h3>
      <!-- Action Button -->
      <div class="col-3">
        <a class="pull-right" id="sort-dropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" href="#">SORTING&ensp;<i class="fa fa-sort"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sort-dropdown">
          <a class="dropdown-item" href="#"><i class="fa fa-thumbs-up"></i>&ensp;LIKE</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-star"></i>&ensp;RATING</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-clock-o"></i>&ensp;OLDEST</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-bell"></i>&ensp;NEWEST</a>
        </div>
      </div>
    </div>
    <!-- Review Card -->
    <div class="card card-3 mt-3">
      <div class="row ml-3 mt-3 mr-3">
        <img class="rounded-circle shadow rounded review-user-image" src="<?php echo prep_url('https://www.flaticon.com/svg/static/icons/svg/149/149452.svg'); ?>">
        <div class="col">
          <h5 class="font-weight-bold">BENJAMIN CRAWFORD</h5>
          <div style="font-size: 0.75em">20 September 2020 : 05:29 PM</div>
          <div class="pull-left" style="font-size: 1.25em">
            <?php for ($i = 0; $i < 5; $i++): ?>
              <i class="fa fa-star" style="color: #ffca08;"></i>
            <?php endfor; ?>
          </div>
        </div>
        <!-- Delete Review Icon -->
        <div class="col-1">
          <a href="#" class="pull-right" style="font-size: 1.5em"><i class="fa fa-trash"></i></a>
        </div>
      </div>
      <!-- Comment Area -->
      <div class="border-top m-3"></div>
      <div class="ml-4 mr-4">
        <div>เรื่องนี้สนุกดีนะครับ ชอบน้อง Tom Holland มากๆ - ขอบอกไว้ก่อนว่าถ้าใครยังไม่ได้ดู Avengers: Endgame อย่าเพิ่งมาดูเรื่องนี้นะครับ</div>
      </div>
      <div class="border-top m-3"></div>
      <!-- Like Button -->
      <div class="row mb-3 mr-3 d-flex align-items-center">
        <div class="ml-auto">100 LIKES</div>
        <button type="button" class="btn btn-outline-primary ml-2 user-response">
          <i class="fa fa-thumbs-up" style="font-size: 1.25em"></i></button>
        <button type="button" class="btn btn-outline-danger ml-2 user-response d-none">
          <i class="fa fa-exclamation-triangle" style="font-size: 1.25em"></i></button>
      </div>
    </div>
  </div>
<?= $this->endSection(); ?>