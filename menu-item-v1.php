<?php include 'includes/header.php'; ?>

  <!-- Subheader Start -->
  <div class="subheader dark-overlay dark-overlay-2" style="background-image: url('assets/img/subheader.jpg')">
    <div class="container">
      <div class="subheader-inner">
        <h1>Menu Item v1</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Menu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Menu Item v1</li>
          </ol>
        </nav>
      </div>

    </div>
  </div>
  <!-- Subheader End -->

  <div class="section product-single">
    <div class="container">

      <div class="row">
        <div class="col-md-5">

          <!-- Main Thumb -->
          <div class="product-thumb">
            <img src="assets/img/prods/3.png" alt="pizza">
          </div>
          <!-- /Main Thumb -->

        </div>
        <div class="col-md-7">
          <div class="product-content">

            <!-- Product Title -->
            <h2 class="title">Pepperoni Pizza</h2>
            <!-- /Product Title -->

            <div class="favorite">
              <i class="far fa-heart"></i>
            </div>

            <!-- Rating -->
            <div class="ct-rating-wrapper">
              <div class="ct-rating">
                <i class="fas fa-star active"></i>
                <i class="fas fa-star active"></i>
                <i class="fas fa-star active"></i>
                <i class="fas fa-star active"></i>
                <i class="fas fa-star"></i>
              </div>
              <span>(24 ratings)</span>
            </div>
            <!-- /Rating -->

            <!-- Price -->
            <div class="price-wrapper">
              <p class="product-price">14.99$</p>
            </div>
            <!-- /Price -->

            <!-- Product Short Description -->
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <!-- /Product Short Description -->

            <!-- Variations -->
            <div class="customize-variations">

              <div class="customize-size-wrapper">
                <h5>Size: </h5>
                <div class="customize-size active">
                  11"
                </div>
                <div class="customize-size">
                  16"
                </div>
                <div class="customize-size">
                  21"
                </div>
              </div>

              <div class="row">

                <!-- Variation Start -->
                <div class="col-lg-6 col-12">
                  <div class="customize-variation-wrapper">
                    <i class="flaticon-bread-roll"></i>
                    <h5>Dough</h5>
                    <div class="customize-variation-item" data-price="0.00">
                      <div class="custom-control custom-radio">
                        <input type="radio" checked id="regularDough1" name="dough1" class="custom-control-input">
                        <label class="custom-control-label" for="regularDough1">Regular</label>
                      </div>
                      <span>+0.00$</span>
                    </div>
                    <div class="customize-variation-item" data-price="2.00">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="thinDough1" name="dough1" class="custom-control-input">
                        <label class="custom-control-label" for="thinDough1">Hand Flipped</label>
                      </div>
                      <span>+2.00$</span>
                    </div>
                    <div class="customize-variation-item" data-price="4.00">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="multiGrainDough1" name="dough1" class="custom-control-input">
                        <label class="custom-control-label" for="multiGrainDough1">Multi Grain</label>
                      </div>
                      <span>+4.00$</span>
                    </div>
                  </div>
                </div>
                <!-- Variation End -->

                <!-- Variation Start -->
                <div class="col-lg-6 col-12">
                  <div class="customize-variation-wrapper">
                    <i class="flaticon-pizza-slice"></i>
                    <h5>Crust</h5>
                    <div class="customize-variation-item" data-price="4.00">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="cheeseCrust1" name="crust1" class="custom-control-input">
                        <label class="custom-control-label" for="cheeseCrust1">Cheese</label>
                      </div>
                      <span>+4.00$</span>
                    </div>
                    <div class="customize-variation-item" data-price="3.25">
                      <div class="custom-control custom-radio">
                        <input type="radio" id="butterCrust1" name="crust1" class="custom-control-input">
                        <label class="custom-control-label" for="butterCrust1">Butter</label>
                      </div>
                      <span>+3.25$</span>
                    </div>
                  </div>
                </div>
                <!-- Variation End -->

                <!-- Variation Start -->
                <div class="col-lg-6 col-12">
                  <div class="customize-variation-wrapper">
                    <i class="flaticon-pizza-and-cutted-slice"></i>
                    <h5>Add</h5>
                    <div class="customize-variation-item" data-price="2.00">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="addChicken1">
                        <label class="custom-control-label" for="addChicken1">Chicken</label>
                      </div>
                      <span>+2.00$</span>
                    </div>
                    <div class="customize-variation-item" data-price="1.20">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="addFourCheese1">
                        <label class="custom-control-label" for="addFourCheese1">Four Cheese</label>
                      </div>
                      <span>+1.20$</span>
                    </div>
                    <div class="customize-variation-item" data-price="0.75">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="addFreshMushroom1">
                        <label class="custom-control-label" for="addFreshMushroom1">Fresh Mushroom</label>
                      </div>
                      <span>+0.75$</span>
                    </div>
                    <div class="customize-variation-item" data-price="0.25">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="addBellPepper1">
                        <label class="custom-control-label" for="addBellPepper1">Bell Peppers</label>
                      </div>
                      <span>+0.25$</span>
                    </div>
                  </div>
                </div>
                <!-- Variation End -->

                <!-- Variation Start -->
                <div class="col-lg-6 col-12">
                  <div class="customize-variation-wrapper">
                    <i class="flaticon-cheese"></i>
                    <h5>Cheese</h5>
                    <div class="customize-variation-item" data-price="1.00">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="cheeseMozarella1">
                        <label class="custom-control-label" for="cheeseMozarella1">Mozarella</label>
                      </div>
                      <span>+1.00$</span>
                    </div>
                    <div class="customize-variation-item" data-price="1.25">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="cheeseCheddar1">
                        <label class="custom-control-label" for="cheeseCheddar1">Cheddar</label>
                      </div>
                      <span>+1.25$</span>
                    </div>
                    <div class="customize-variation-item" data-price="3.75">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="cheeseGruyer1">
                        <label class="custom-control-label" for="cheeseGruyer1">Gruyere</label>
                      </div>
                      <span>+3.75$</span>
                    </div>
                    <div class="customize-variation-item" data-price="0.25">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="cheeseBlueCheese1">
                        <label class="custom-control-label" for="cheeseBlueCheese1">Blue Cheese</label>
                      </div>
                      <span>+0.25$</span>
                    </div>
                  </div>
                </div>
                <!-- Variation End -->

              </div>

            </div>
            <!-- /Variations -->

            <!-- Add To Cart Form -->
            <form class="atc-form" method="post">
              <div class="form-group">
                <label>Quantity</label>
                <div class="qty">
                  <span class="qty-subtract"><i class="fas fa-minus"></i></span>
                  <input type="text" name="qty" value="1">
                  <span class="qty-add"><i class="fas fa-plus"></i></span>
                </div>
              </div>
              <button type="submit" name="button" class="btn-custom secondary"> Order <i class="fas fa-shopping-cart"></i> </button>
            </form>
            <!-- /Add To Cart Form -->

            <!-- Product Meta -->
            <ul class="product-meta">
              <li>
                <span>Categories: </span>
                <div class="product-meta-item">
                  <a href="#">Pizza</a>
                </div>
              </li>
              <li>
                <span>Tags: </span>
                <div class="product-meta-item">
                  <a href="#">Pizza</a>,
                  <a href="#">Cheese</a>,
                  <a href="#">Cheesy Crusts</a>
                </div>
              </li>
              <li>
                <span>SKU: </span>
                <div class="product-meta-item">
                  <span>N/A</span>
                </div>
              </li>
            </ul>
            <!-- /Product Meta -->

          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="section pt-0">
    <div class="container">
      <!-- Additional Information Start -->
      <div class="product-additional-info">
        <ul class="nav" id="bordered-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="tab-product-desc-tab" data-toggle="pill" href="#tab-product-desc" role="tab" aria-controls="tab-product-desc" aria-selected="true">Description</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab-product-reviews-tab" data-toggle="pill" href="#tab-product-reviews" role="tab" aria-controls="tab-product-reviews" aria-selected="false">Reviews (25)</a>
          </li>
        </ul>
        <div class="tab-content" id="bordered-tabContent">
          <div class="tab-pane fade show active" id="tab-product-desc" role="tabpanel" aria-labelledby="tab-product-desc-tab">
            <h4>Description</h4>
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
            bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica
          </div>

          <div class="tab-pane fade" id="tab-product-reviews" role="tabpanel" aria-labelledby="tab-product-reviews-tab">
            <h4>Leave a Review</h4>

            <div class="ct-rating-wrapper">
              <div class="ct-rating">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span>Your Review</span>
            </div>

            <!-- Review Form start -->
            <div class="comment-form">
              <form method="post">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" class="form-control" placeholder="Full Name" name="fname" value="">
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" placeholder="Email Address" name="email" value="">
                  </div>
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" placeholder="Type your comment..." name="comment" rows="7"></textarea>
                  </div>
                </div>

                <button type="submit" class="btn-custom primary" name="button">Post Review</button>
              </form>
            </div>
            <!-- Review Form End -->

            <!-- Reviews Start -->
            <div class="comments-list">
              <ul>
                <li class="comment-item">
                  <img src="assets/img/people/1.jpg" alt="comment author">
                  <div class="comment-body">
                    <h5>Henry Crow</h5>
                    <div class="ct-rating">
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <span>Posted on: January 13 2020</span>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour, or randomised words which don't look even slightly</p>
                    <a href="#" class="reply-link"> Reply </a>
                  </div>
                </li>
                <li class="comment-item">
                  <img src="assets/img/people/2.jpg" alt="comment author">
                  <div class="comment-body">
                    <h5>Ilyn Rodrick</h5>
                    <div class="ct-rating">
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                    </div>
                    <span>Posted on: January 13 2020</span>
                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    <a href="#" class="reply-link"> Reply </a>
                  </div>
                </li>
                <li class="comment-item">
                  <img src="assets/img/people/3.jpg" alt="comment author">
                  <div class="comment-body">
                    <h5>Fiyona Lumber</h5>
                    <div class="ct-rating">
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                      <i class="fas fa-star active"></i>
                    </div>
                    <span>Posted on: January 13 2020</span>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
                      College in Virginia</p>
                    <a href="#" class="reply-link"> Reply </a>
                  </div>
                </li>
              </ul>
            </div>
            <!-- Reviews End -->

          </div>
        </div>
      </div>
      <!-- Additional Information End -->
    </div>
  </div>

  <?php include 'includes/footer.php'; ?>