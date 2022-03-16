<template>
    <header
      class="sticky top-0 z-30 lg:px-16 px-6 bg-gray-100 flex flex-wrap items-center header-scrolled lg:py-0 py-2"
    >
      <div class="flex-1 flex justify-between items-center">
        <a href="/">
          Andalalin Dishub Banyuwangi
        </a>
      </div>

      <label for="menu-toggle" class="pointer-cursor lg:hidden block"
        ><svg
          class="fill-current text-gray-900"
          xmlns="http://www.w3.org/2000/svg"
          width="20"
          height="20"
          viewBox="0 0 20 20"
        >
          <title>menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path></svg
      ></label>
      <input class="hidden" type="checkbox" id="menu-toggle" />

      <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
        <nav class="p-4">
          <ul class="lg:flex items-center justify-start pt-4 lg:pt-0">
            <li>
              <a
            href="/register"
            class="
              inline-flex
              justify-center
              p-2
              border border-transparent
              shadow-sm
              text-sm
              font-medium
              rounded-md
              text-white
              bg-biru
              hover:bg-blue-700 hover:text-white
              focus:outline-none
              focus:ring-2
              focus:ring-offset-2
              focus:ring-blue-500
            "
          >
            Daftar / Masuk
          </a>
              </li>
          </ul>
        </nav>
      </div>
    </header>
</template>


<style>
#menu-toggle:checked + #menu {
  display: block;
}

#sortbox:checked ~ #sortboxmenu {
  opacity: 1;
}
</style>
