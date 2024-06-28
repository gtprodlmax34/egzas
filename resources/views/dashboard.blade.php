<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> --}}
                {{-- <x-welcome /> --}}
                <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>
  
      <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://th.bing.com/th/id/OIP.LWMUT8QnNdANJUUJx_ecJgHaHa?rs=1&pid=ImgDetMain" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">palikta riedlente</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$8</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://m.media-amazon.com/images/I/71I3AuBmKJL.jpg" alt="Olive drab green insulated bottle with flared screw lid and flat top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">sigma skater</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://th.bing.com/th/id/R.3dd43bbfb421b18c319944be41a79950?rik=t%2fpQZP5x6G1g0g&pid=ImgRaw&r=0" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">cool veidas 🕶</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$1.30</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://kahoyskim.com/wp-content/uploads/2017/04/Rasta-Penny-Board.jpg" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">toksai kietesnis</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$30</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://m.media-amazon.com/images/I/71v3T9O0kLL._AC_.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">tiesus ziaurej</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$82</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://th.bing.com/th/id/R.57ac7bc920c507468273a5585687b19b?rik=JxaW58RsNidZ0A&pid=ImgRaw&r=0" alt="Hand holding black machined steel mechanical pencil with brass tip and top." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">tiesiai is growtopios</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">2 dl </p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://th.bing.com/th/id/R.96a3d2a7794807f57f684c701299a9e8?rik=Y6wye9jYhB4ntA&riu=http%3a%2f%2f4.bp.blogspot.com%2f-BTvK_JbcF9U%2fUr1ognOsETI%2fAAAAAAAAArU%2f_ZEwApkEPu4%2fs1600%2fsolid3.jpg&ehk=REiJ%2b14E1LLqebYN8LtQBxPHQ3syYe7odc2%2bauZRTJ8%3d&risl=&pid=ImgRaw&r=0" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">new yorkerio vansai</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$20</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://noobnorm.com/wp-content/uploads/2017/11/best-penny-board.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">as po casino </h3>
          <p class="mt-1 text-lg font-medium text-gray-900">5dl</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://www.truetop5review.com/wp-content/uploads/2020/02/3-115-1024x1024.jpg" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">mazas tox</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$92</p>
        </a>
        <a href="#" class="group">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
            <img src="https://th.bing.com/th/id/OIP.4iCUrHvmB0ngyHdGDID5vgHaKh?rs=1&pid=ImgDetMain" alt="Person using a pen to cross a task off a productivity paper card." class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <h3 class="mt-4 text-sm text-gray-700">zemas 150 cj</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">$20</p>

        </a>
      </div>
    </div>
    <a href = "https://medal.tv/u/urmomlover43"
     class="button1">daugiau</button> </a>
  </div>
            {{-- </div>
        </div>
    </div> --}}
</x-app-layout>


