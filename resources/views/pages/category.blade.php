@extends('layouts.app')

@section('title')
    Store Category Page
@endsection

@section('content')
<div class="page-content page-home">

    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Categories</h5>
          </div>
          <div class="container">
          <div class="row">

            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="./images/Trent_Categories/gadget.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">Gadgets</p>
              </a>
            </div>

            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="./images/Trent_Categories/furniture.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">Furniture</p>
              </a>
            </div>

            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="./images/Trent_Categories/make_up.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">Make up</p>
              </a>
            </div>

            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="./images/Trent_Categories/sneaker.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">Sneaker</p>
              </a>
            </div>

            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="./images/Trent_Categories/tools.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">Tools</p>
              </a>
            </div>

            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
              <a href="#" class="component-categories d-block">
                <div class="categories-image">
                  <img src="./images/Trent_Categories/baby.svg" alt="" class="w-100">
                </div>
                <p class="categories-text">Baby</p>
              </a>
            </div>
          </div>

          </div>
        </div>
      </div>
    </section>

    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Products</h5>
          </div>
        </div>

        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/Products/Apple_Watch.jpg')"></div>
              </div>
              <div class="products-text">Apple Watch 4</div>
              <div class="products-price">$890</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/Products/orange.jpg')"></div>
              </div>
              <div class="products-text">Orange Boggota</div>
              <div class="products-price">$940</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/Products/sofa_ternyaman.jpg')"></div>
              </div>
              <div class="products-text">Soffa Ternyaman</div>
              <div class="products-price">$1250</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/Products/bubuk_maketti.jpg')"></div>
              </div>
              <div class="products-text">Bubuk Maketti</div>
              <div class="products-price">$200</div>
            </a>
          </div>

          <!-- Down -->

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/Products/tatakan_gelas.jpg')"></div>
              </div>
              <div class="products-text">Tatakan Gelas</div>
              <div class="products-price">$150</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/Products/mavic_kawe.jpg')"></div>
              </div>
              <div class="products-text">Mavic Kawe</div>
              <div class="products-price">$520</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/Products/sepatu_black.jpg')"></div>
              </div>
              <div class="products-text">Black Edition Nike</div>
              <div class="products-price">$1200</div>
            </a>
          </div>

          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div class="products-image" style="background-image: url('./images/Products/monkey_toys.jpg')"></div>
              </div>
              <div class="products-text">Monkey Toys</div>
              <div class="products-price">$780</div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
