<section class="flex h-[85vh] items-center justify-center"
    style="background-image: url({{ asset('images/homeSlide3.png') }}); background-size: cover;
background-repeat: no-repeat;">
    <div class="flex flex-col items-center justify-center">
        <h2 class="text-shadow mt-24 border-b-2 border-blue-700 pb-5 text-5xl text-blue-700">Trips</h2>
        <p class="text-shadow mt-8 pb-12 text-3xl text-blue-700">search for your great trip!</p>
        <div>
            <a href="{{ route('app.Search') }}"><button type="submit"
                    class="duration-400 ease ml-10 inline-block h-10 w-60 cursor-pointer rounded-full border-none bg-blue-500 text-lg font-bold text-white shadow-md transition hover:bg-blue-700">Go
                    & search</button></a>
        </div>
    </div>
</section>
