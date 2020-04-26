<?php include 'includes/header.php'; ?>

  <!-- Subheader Start -->
  <div class="subheader dark-overlay dark-overlay-2" style="background-image: url('assets/img/subheader.jpg')">
    <div class="container">
      <div class="subheader-inner">
        <h1>Cart</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cart</li>
          </ol>
        </nav>
      </div>

    </div>
  </div>
  <!-- Subheader End -->

  <!--Cart Start -->
  <section class="section">
    <div class="container">

      <!-- Cart Table Start -->
      <table class="ct-responsive-table">
        <thead>
          <tr>
            <th class="remove-item"></th>
            <th>Product</th>
            <th>Price</th>
            <th>Qunantity</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="remove">
              <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
              </button>
            </td>
            <td data-title="Product">
              <div class="cart-product-wrapper">
                <img src="assets/img/prods-sm/1.png" alt="prod1">
                <div class="cart-product-body">
                  <h6> <a href="#">Pepperoni</a> </h6>
                  <p>21 Inch</p>
                  <p>Extra Cheese</p>
                  <p>Extra Pepperoni</p>
                  <p>Cheese Crust</p>
                  <p>Added Bacon</p>
                </div>
              </div>
            </td>
            <td data-title="Price"> <strong>12.99$</strong> </td>
            <td class="quantity" data-title="Quantity">
              <input type="number" class="qty form-control" value="1">
            </td>
            <td data-title="Total"> <strong>12.99$</strong> </td>
          </tr>
          <tr>
            <td class="remove">
              <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
              </button>
            </td>
            <td data-title="Product">
              <div class="cart-product-wrapper">
                <img src="assets/img/prods-sm/5.png" alt="prod1">
                <div class="cart-product-body">
                  <h6> <a href="#">Vegetarian</a> </h6>
                  <p>14 Inch</p>
                </div>
              </div>
            </td>
            <td data-title="Price"> <strong>9.99$</strong> </td>
            <td class="quantity" data-title="Quantity">
              <input type="number" class="qty form-control" value="1">
            </td>
            <td data-title="Total"> <strong>9.99$</strong> </td>
          </tr>
          <tr>
            <td class="remove">
              <button type="button" class="close-btn close-danger remove-from-cart">
                <span></span>
                <span></span>
              </button>
            </td>
            <td data-title="Product">
              <div class="cart-product-wrapper">
                <img src="assets/img/prods-sm/3.png" alt="prod1">
                <div class="cart-product-body">
                  <h6> <a href="#">Four Cheese</a> </h6>
                  <p>21 Inch</p>
                  <p>Extra Cheese</p>
                </div>
              </div>
            </td>
            <td data-title="Price"> <strong>13.99$</strong> </td>
            <td class="quantity" data-title="Quantity">
              <input type="number" class="qty form-control" value="1">
            </td>
            <td data-title="Total"> <strong>13.99$</strong> </td>
          </tr>

        </tbody>
      </table>
      <!-- Cart Table End -->

      <!-- Coupon Code Start -->
      <div class="row">
        <div class="col-lg-5">
          <div class="form-group mb-0">
            <div class="input-group mb-0">
              <input type="text" class="form-control" placeholder="Enter Coupon Code" aria-label="Coupon Code">
              <div class="input-group-append">
                <button class="btn-custom shadow-none" type="button">Apply</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Coupon Code End -->

      <!-- Cart form Start -->
      <div class="row ct-cart-form">
        <div class="offset-lg-6 col-lg-6">
          <h4>Cart Total</h4>
          <table>
            <tbody>
              <tr>
                <th>Subtotal</th>
                <td>90.99$</td>
              </tr>
              <tr>
                <th>Tax</th>
                <td> 9.99$ <span class="small">(11%)</span> </td>
              </tr>
              <tr>
                <th>Total</th>
                <td> <b>99.99$</b> </td>
              </tr>
            </tbody>
          </table>
          <a href="#" class="btn-custom primary btn-block">Proceeed to Checkout</a>
        </div>
      </div>
      <!-- Cart form End -->

    </div>
  </section>
  <!-- Cart End -->

  <?php include 'includes/footer.php'; ?>