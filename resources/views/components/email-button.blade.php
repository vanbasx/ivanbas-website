<a
  ontouchstart
  href="mailto:hello@ivanbas.dev"
  class="group/button relative flex flex-col items-center bg-black active:opacity-70 px-7 py-3.5 rounded-full overflow-hidden text-white text-sm/5 transition-opacity duration-300 ease-in-out"
>
  <div class="flex font-bold uppercase tracking-wide transition-transform group-hover/button:-translate-y-10 duration-400 ease-in-out">
    {{ $slot }}
  </div>
  <div class="left-1/2 absolute flex items-center gap-1.5 transition-transform -translate-x-1/2 translate-y-10 group-hover/button:translate-y-0 duration-400 ease-in-out">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M1.39138 13.739H3.82616V7.82598L0.3479 5.21729V12.6955C0.3479 13.2729 0.815726 13.739 1.39138 13.739Z" fill="#4285F4"/><path d="M12.1738 13.739H14.6086C15.186 13.739 15.6521 13.2712 15.6521 12.6955V5.21729L12.1738 7.82598" fill="#34A853"/><path d="M12.1738 3.30437V7.82611L15.6521 5.21742V3.82611C15.6521 2.53568 14.179 1.80003 13.1477 2.57394" fill="#FBBC04"/><path d="M3.82617 7.82606V3.30432L8.00009 6.43476L12.174 3.30432V7.82606L8.00009 10.9565" fill="#EA4335"/><path d="M0.3479 3.82611V5.21742L3.82616 7.82611V3.30437L2.85225 2.57394C1.81921 1.80003 0.3479 2.53568 0.3479 3.82611Z" fill="#C5221F"/></svg>
    <span class="font-semibold tracking-wide">
      hello@ivanbas.dev
    </span>
  </div>
</a>