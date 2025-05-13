{{-- HUI NAVLINK : Its going places! --}}
@props([
    'svg' => null,
    'icon' => null,
    'route' => null,
    'href' => null,
    'label' => null,
    'class' => '',
    'iclass' => 'bx mr-2'
])

<li class="nav-item">
  <a class="nav-link {{ $route ? 'active' : 'text-white' }} {{ $class }}"
    href="{{ $href }}">
  @if($svg)
    @svg($svg, $iclass)
  @elseif($icon)
    <x-dynamic-component :component="$icon" :class="$iclass" />
  @endif
  {{ $label ?? $slot }}
  </a>
</li>
