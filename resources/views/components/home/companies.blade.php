<section class="slide2 p-12">
    <div class="left flex items-center justify-between">
        <h2 class="relative right-9 text-2xl">Companies</h2>
        <br>
        <a href=""><button type="submit"
                class="btn1 inline-block h-10 w-36 rounded-full bg-blue-600 text-white">View all</button></a>
    </div>
    <p class="relative left-[8px] top-[14px] mb-[20px] text-lg font-bold text-[#1186a291]"
        style="text-shadow: 2px 3px 7px #ababab;">View Recent Companies </p>
    <div class="cards grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

        <x-home.company-card />
        <x-home.company-card />
        <x-home.company-card />
        <x-home.company-card />

        <!-- Repeat for other company cards -->

    </div>
    <hr>
    <div class="mt-4">
        <a href=""><button type="submit"
                class="btn1 inline-block h-10 rounded-full bg-blue-600 p-3 text-white hover:bg-blue-900">
                Tarwada company</button></a>
    </div>
</section>
