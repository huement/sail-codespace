<div class="container share-buttons-component">
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <x-heading size="h4" color="white" label="Share This" class="mb-3 horzTitle background" />
    </div>
    @php
      $links = Share::page($url, 'Share title')
                ->facebook()
                ->twitter()
                ->reddit()
                ->whatsapp()
                ->telegram()
                ->linkedin('Extra linkedin summary can be passed here')
                ->whatsapp()
                ->getRawLinks();
    @endphp
    <div class="col-lg-10 mx-auto mt-5 mb-4 mb-lg-0">
      <div class="container-fluid share-button-component no-gutters">
        <div class="row mt-1 d-sm-none d-none d-lg-block">
          <div class="col">
            <div class="btn-group" role="group" aria-label="Social Media Buttons">
              <button class="btn btn-facebook" type="button" data-share="{{ $links['facebook'] }}">
                <x-bxl-facebook class="bx mr-2"/><span>Facebook</span>
              </button>
              <button class="btn btn-x" type="button" data-share="{{ $links['twitter'] }}">
                @svg('x_icon', 'bx mr-2')<span>X.COM</span>
              </button>
              <button class="btn btn-reddit" type="button" data-share="{{ $links['reddit'] }}">
                <x-bxl-reddit class="bx mr-2"/><span>Reddit</span>
              </button>
              <button class="btn btn-linkedin" type="button" data-share="{{ $links['linkedin'] }}">
                @svg('linkedin_icon', 'bx mr-2')<span>LinkedIn</span>
              </button>
            </div>
            <div class="btn-group ml-3" role="group" aria-label="Messenger Buttons">
              <button class="btn btn-whatsapp" type="button" data-share="{{ $links['whatsapp'] }}">
                <x-bxl-whatsapp class="bx mr-2"/><span>Whatsapp</span>
              </button>
              <button class="btn btn-telegram" type="button" data-share="{{ $links['telegram'] }}">
                <x-bxl-telegram class="bx mr-2"/><span>Telegram</span>
              </button>
            </div>
            <div class="btn-group ml-3" role="group" aria-label="System Buttons">
              <button class="btn btn-secondary" type="button" data-command="email" data-target="{{ $url }}">
                <x-bx-mail-send class="bx mr-2"/><span>Email</span>
              </button>
              <button class="btn btn-secondary" type="button" data-command="copy" data-target="{{ $url }}">
                <x-bx-copy class="bx mr-2"/><span>Copy Link</span>
              </button>
            </div>
          </div>
        </div>
        <div class="row mt-1 pb-5 d-md-block d-lg-none d-xl-none">
          <div class="col">
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <div class="btn-group" role="group">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <span>Share</span><span class="d-none d-sm-inline ml-1">on Social Media &nbsp;</span>
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <h6 class="dropdown-header">Social Apps</h6>
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="{{ $links['facebook'] }}" target="_blank">
                      <x-bxl-facebook class="bx mr-2"/> Facebook
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="{{ $links['twitter'] }}" target="_blank">
                      @svg('x_icon', 'bx mr-2') X.COM
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="{{ $links['reddit'] }}" target="_blank">
                      <x-bxl-reddit class="bx mr-2"/> Reddit
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="{{ $links['linkedin'] }}" target="_blank">
                      <x-bxl-linkedin class="bx mr-2"/> LinkedIn
                    </a>
                  </li>
                  <li>
                    <hr class="dropdown-divider" />
                  </li>
                  <li>
                    <h6 class="dropdown-header">Messaging Apps</h6>
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="{{ $links['whatsapp'] }}" target="_blank">
                      <x-bxl-whatsapp class="bx mr-2"/> Whatsapp
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item mb-2" href="{{ $links['telegram'] }}" target="_blank">
                      <x-bxl-telegram class="bx mr-2"/> Telegram
                    </a>
                  </li>
                </ul>
              </div>
              <button class="btn btn-secondary" type="button" data-command="email" data-target="{{ $url }}">
                <x-bx-mail-send class="bx mr-2"/><span class="d-none d-sm-inline">Email</span>
              </button>
              <button class="btn btn-secondary" type="button" data-command="copy" data-target="{{ $url }}">
                <x-bx-copy class="bx mr-2"/><span class="d-none d-sm-inline">Copy Link</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
