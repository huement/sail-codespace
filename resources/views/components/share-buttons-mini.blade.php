 @php
$links = Share::page($url, 'Share title')
          ->facebook()
          ->twitter()
          ->reddit()
          ->whatsapp()
          ->telegram()
          ->linkedin('Extra linkedin summary can be passed here')
          ->getRawLinks();
@endphp
<div class="share-buttons-mini-component btn-group {{ $class ?? '' }}" role="group" aria-label="Button group with nested dropdown">
  <div class="btn-group" role="group">
    <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-bs-toggle="dropdown" aria-expanded="false">Share&nbsp;</button>
    <ul class="dropdown-menu">
      <li>
        <h6 class="dropdown-header">Social Apps</h6>
      </li>
      <li><a class="dropdown-item mb-2" href="{{ $links['facebook'] }}" target="_blank"><x-bxl-facebook class="bx mr-2"/> Facebook</a></li>
      <li><a class="dropdown-item mb-2" href="{{ $links['twitter'] }}" target="_blank">@svg('x_icon', 'bx mr-2') X.COM</a></li>
      <li><a class="dropdown-item mb-2" href="{{ $links['reddit'] }}" target="_blank"><x-bxl-reddit class="bx mr-2"/> Reddit</a></li>
      <li><a class="dropdown-item" href="{{ $links['linkedin'] }}" target="_blank"><x-bxl-linkedin class="bx mr-2"/> LinkedIn</a></li>
      <li>
        <hr class="dropdown-divider" />
      </li>
      <li>
        <h6 class="dropdown-header">Messaging Apps</h6>
      </li>
      <li><a class="dropdown-item mb-2" href="{{ $links['whatsapp'] }}" target="_blank"><x-bxl-whatsapp class="bx mr-2"/> Whatsapp</a></li>
      <li><a class="dropdown-item mb-2" href="{{ $links['telegram'] }}" target="_blank"><x-bxl-telegram class="bx mr-2"/> Telegram</a></li>
    </ul>
  </div>
  <button class="btn btn-secondary btn-sm" type="button" data-command="email" data-target="{{ $url }}"><x-bx-mail-send class="bx bx-sm mr-2"/><span class="d-none d-sm-inline">Email</span></button>
  <button class="btn btn-secondary btn-sm" type="button" data-command="copy" data-target="{{ $url }}"><x-bx-copy class="bx bx-sm mr-2"/><span class="d-none d-sm-inline">Copy Link</span></button>
</div>
