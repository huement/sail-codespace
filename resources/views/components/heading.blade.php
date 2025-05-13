<div class="heading-component {{ $class ?? '' }}">
  @isset($subTitle)
    <div class="sub-title">{{ $subTitle }}</div>
  @endisset
  <{{ $size ?? 'h2' }}
    class="heading-element font-bold {{ $center ?? 'text-center' }} {{ $color ?? 'text-gray-100' }} {{ $size ?? 'h2' }}">
    <span>{{ $label }}</span>
  </{{ $size ?? 'h2' }}>
</div>
