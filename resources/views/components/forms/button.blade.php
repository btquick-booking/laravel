@props(['name' => 'Button', 'as' => 'button', 'href' => null])

@if ($as == 'button')
    <button type="submit"
        class="font-cursive duration-400 mt-[-10px] inline-block h-12 w-32 cursor-pointer rounded-full border-2 border-white bg-white text-lg font-semibold text-[#13709a] shadow-md transition hover:border-[#13709a] hover:bg-[#13709a] hover:text-white">
        {{ $name }}
    </button>
@elseif (!is_null($href))
    <a href="{{ $href }}"><button
            class="font-cursive duration-400 mt-[-10px] inline-block h-12 w-32 cursor-pointer rounded-full border-2 border-white bg-white text-lg font-semibold text-[#13709a] shadow-md transition hover:border-[#13709a] hover:bg-[#13709a] hover:text-white">
            {{ $name }}
        </button></a>
@endif
