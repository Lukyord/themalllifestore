  <section class="template-banner-slide"
      <?php if (isset($section_id) && $section_id !== "") {
            echo "id='{$section_id}'";
        } else {
            echo "id='header-bound'";
        } ?>id="header-bound">
      <div class="content-wrapper">
          <div class="swiper main">
              <div class="swiper-wrapper">
                  <?php
                    foreach ($hero_slide_images as $image) {
                    ?>
                      <div class="swiper-slide">
                          <div class="image">
                              <?php
                                $cover = $image["pc"];
                                $cover_m = $image["mobile"];
                                if (preg_match("/\.(mp4)$/", $cover)) { ?>
                                  <figure class="object blurred-media">
                                      <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                                  </figure>
                              <?php } else { ?>
                                  <picture class="object blurred-media">
                                      <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                                      <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                                      <img
                                          src="<?php echo $cover; ?>"
                                          alt="Index Hero Image"
                                          data-animation="matrixZoomOut"
                                          class="inside-animation ease-out-cubic"
                                          data-wow-duration="1s"
                                          draggable="false">
                                  </picture>
                              <?php } ?>
                          </div>
                      </div>
                  <?php
                    } ?>
              </div>
          </div>

          <div class="thumbs">
              <div class="swiper thumb">
                  <div class="swiper-wrapper">
                      <?php
                        foreach ($hero_slide_images as $image) {
                        ?>
                          <div class="swiper-slide">
                              <div class="image">
                                  <?php
                                    $cover = $image["pc"];
                                    $cover_m = $image["mobile"];
                                    if (preg_match("/\.(mp4)$/", $cover)) { ?>
                                      <figure class="object blurred-media">
                                          <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                                      </figure>
                                  <?php } else { ?>
                                      <picture class="object blurred-media">
                                          <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                                          <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                                          <img
                                              src="<?php echo $cover; ?>"
                                              alt="Slide Image"
                                              draggable="false">
                                      </picture>
                                  <?php } ?>
                              </div>
                          </div>
                      <?php
                        } ?>
                  </div>
              </div>
          </div>
      </div>
  </section>