<div class="{{ $class }} row salvia-title-row">
    <div class="col-10 offset-1">
        <{!! $size !!} class="salvia-title text-lowercase">{!! $title !!}</{!! $size !!}>
        @if (!empty($subtitle))
          <h6 class="salvia-subtitle">{!! $subtitle !!}</h6>
        @endif
    </div>
</div>
