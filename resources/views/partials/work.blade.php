<article @php(post_class( 'group/card relative' ))>
  <a href="{{ get_the_permalink() }}">
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
      <span class="subtitle">
        {{ get_the_title() }}
      </span>
      <span class="text-zinc-400 subtitle">
        Education
      </span>
      <span class="text-zinc-400 subtitle">
        {{ get_the_date('Y') }}
      </span>
    </div>
  </a>
</article>