
<div class="container my-5">
    <footer class="text-center footerMorph-inner-up">
      <!-- Grid container -->
      <div class="container">
        <!-- Section: Links -->
        <section class="mt-5">
          <!-- Grid row-->
          <div class="row text-center d-flex justify-content-center pt-5">
            <!-- Grid column -->
            <!-- <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-black">About us</a>
              </h6>
            </div> -->
            <!-- Grid column -->

            <!-- Grid column -->
            <!-- <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-black">Products</a>
              </h6>
            </div> -->
            <!-- Grid column -->

            <!-- Grid column -->
            <!-- <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-black">Awards</a>
              </h6>
            </div> -->
            <!-- Grid column -->

            <!-- Grid column -->
            <!-- <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-black">Help</a>
              </h6>
            </div> -->
            <!-- Grid column -->

            <!-- Grid column -->
            @if(Auth::check() && !Auth::user()->is_revisor) 
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="{{route('formRevisor')}}" class="buttonCustomPrimary text-decoration-none">{{__('ui.Lavora_con_noi')}}</a>
              </h6>
            </div>
            @elseif(Auth::check() && Auth::user()->is_revisor)
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="{{route('revisor.index')}}" class="buttonCustomPrimary text-decoration-none">{{__('ui.Revisor_dash')}}</a>
              </h6>
            </div>
            @elseif(!Auth::check())
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="{{route('login')}}" class="buttonCustomPrimary text-decoration-none">{{__('ui.Revisore')}}</a>
              </h6>
            </div>
            @endif
            <!-- Grid column -->
          </div>
          <!-- Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-5" />

        <!-- Section: Text -->
        <section class="mb-5">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
                distinctio earum repellat quaerat voluptatibus placeat nam,
                commodi optio pariatur est quia magnam eum harum corrupti
                dicta, aliquam sequi voluptate quas.
              </p>
            </div>
          </div>
        </section>
        <!-- Section: Text -->

        <!-- Section: Social -->
        <section class="text-center mb-5">
          <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
          </a>
        </section>
        <!-- Section: Social -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3 footerMorph-inner-down">
        © 2024 Copyright:
        <a class="text-black" href=""></a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->
