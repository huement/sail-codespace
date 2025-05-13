@props([
    'svg' => null,
    'name' => null,
    'class' => 'bx mr-2'
])

@if($svg)
  @svg($svg, $class)
@elseif($name)
  <x-dynamic-component :component="$name" :class="$class" />
@endif
