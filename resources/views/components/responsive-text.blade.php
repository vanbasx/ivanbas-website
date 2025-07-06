{{-- 
  Component: responsive-text

  @param string|null $class CSS classes for the SVG element.
  @param string|null $desktop viewBox value for desktop screens.
  @param string|null $mobile viewBox value for mobile screens.

  JavaScript automatically switches the viewBox based on the window width (< 1200px).
--}}

@props([
  'class' => null,
  'desktop' => null,
  'mobile' => null,
])


<svg
  data-responsive-text
  @if($class) class="{{ $class }}" @endif
  @if($desktop) data-size-desktop="{{ $desktop }}" @endif
  @if($mobile) 
    viewBox="{{ $mobile }}"
    data-size-mobile="{{ $mobile }}"
  @endif
  xmlns="http://www.w3.org/2000/svg"
>
  <foreignObject width="100%" height="100%">
    {!! $slot !!}
  </foreignObject>
</svg>