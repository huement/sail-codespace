<!-- Footer -->
<div class="footer-clear d-block h-100px"></div>
<div class="img-fluid footer-waves" style="margin-top:-200px;">@svg('papercut-footer')</div>
<footer class="page-footer dark background-dark">
  <div class="container">
    <div class="row">
      <div class="col-8">
        <div class="container-fluid no-gutters">
          <div class="row">
            <div class="col-5">
              <h5 class="footer-title">connect with us</h5>
              <div class="d-flex justify-content-center align-items-center align-content-center pt-3 social-icons">
                <a class="mr-3" href="#">@svg('github_icon', 'img-fluid')</a>
                <a class="mx-0" href="#">@svg('linkedin_icon', 'img-fluid mx-30')</a>
                <a class="ml-3" href="#">@svg('x_icon', 'img-fluid')</a>
              </div>
              <div class="key-values mt-3 pt-3">
                <div class="key-value-row row mb-0 pb-0">
                  <div class="key col-3">
                    Email:
                  </div>
                  <div class="value col">
                    <a href="#" class="publicContactAddress">public@huement.com</a>
                  </div>
                </div>
                <div class="key-value-row row">
                  <div class="key col-3">
                    Phone:
                  </div>
                  <div class="value col">
                    <a href="tel:+18005555555">+1 800 555 5555</a>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-7">
              <h5 class="footer-title">we got links</h5>
              <div class="row">
                <div class="col">
                  <ul class="footer-link-list mt-3">
                    <li><a href="#">Company Information</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Reviews</a></li>
                    <li><a href="#">Pricing Guide</a></li>
                    <li><a href="#">Portfolio</a></li>
                  </ul>
                </div>
                <div class="col">
                  <ul class="footer-link-list mt-3">
                    <li><a href="#">Open Source</a></li>
                    <li><a href="#">Terms of Use</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="py-2">
          <div class="signup-form">
            <h4 class="signup-title text-white">
              Neon Newsletter Signup!
            </h4>
            <p class="signup-subtitle">
              Monthly collection of tech articles and interviews with industry leaders. It's really freaking good.
            </p>
            <div class="my-2">
              <form method="POST" action="#">
                @csrf {{-- Cross-Site Request Forgery protection --}}

                {{ html()->email('email')->value('')->class('form-control mb-1') }}
                <div class="form-text mb-3 mt-2 text-grey">We'll never share your email with anyone else.</div>

                <x-hui-button class="primary mt-2" type="button" svg="icons.bell">{{ __('Subscribe!') }}</x-hui-button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="height: 50px;"></div>
  </div>
  <div class="container-fluid no-gutters footer-final">
    <div class="container">
      <div class="row mt-5 py-3">
        <div class="col-5 pt-3 text-right">Copyright © 2014 - {{ date('Y') }} Huement.com – All Rights Reserved</div>
        <div class="col-1">
          <a href="#">
            @svg('huement-square', 'img-fluid fill-white footer-logo')
          </a>
        </div>
        <div class="col-6 pt-3">Built with Laravel v11</div>
      </div>
    </div>
  </div>
</footer>
