<article @php(post_class( 'group/card relative' ))>
  <div class="bg-zinc-800/25 aspect-[16/10] max-md:aspect-[4/3] overflow-hidden">
    <picture>
      <source
        type="image/webp"
        srcset="{!! the_post_thumbnail_url( 'mobile' ) !!}"
        media="(max-width: 500px)"
      />
      <img 
        class="group-hover/card:brightness-50 w-full h-full object-cover transition-all"
        src="{!! the_post_thumbnail_url() !!}" 
        alt=""
        loading="lazy"
        fetchpriority="high"
      >
    </picture>
  </div>
  <div class="flex max-xl:justify-between gap-5 py-5 max-sm:py-3">
    <a href="{{ get_the_permalink() }}" class="before:top-0 before:left-0 before:absolute before:w-full before:h-full subtitle">
      {{ get_the_title() }}
    </a>
    <span class="text-zinc-400 subtitle">
      Education
    </span>
    <span class="text-zinc-400 subtitle">
      2025
    </span>
  </div>
</article>