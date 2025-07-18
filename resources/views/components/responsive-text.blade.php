{{-- 
  Component: responsive-text

  @param string|null $class CSS classes for the SVG element.
  @param string|null $desktop viewBox value for desktop screens.
  @param string|null $mobile viewBox value for mobile screens.

  JavaScript automatically switches the viewBox based on the window width (< 1200px).
--}}

@props([
  'id' => null,
  'class' => null,
  'desktop' => null,
  'mobile' => null,
])


<svg
  data-responsive-text
  @if($id) id="{{ $id }}" @endif
  @if($class) class="{{ $class }}" @endif
  @if($desktop) 
    viewBox="{{ $desktop }}"
    data-size-desktop="{{ $desktop }}"
  @endif
  @if($mobile) data-size-mobile="{{ $mobile }}" @endif
  xmlns="http://www.w3.org/2000/svg"
>
  <foreignObject width="100%" height="100%">
    {!! $slot !!}
  </foreignObject>
</svg>