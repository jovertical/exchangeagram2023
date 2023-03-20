<div class="border border-gray-300 bg-white py-2 px-3">
    <ul class="scrollbar-hide flex w-full space-x-3 overflow-x-auto overflow-y-hidden">
        @foreach (range(1, 16) as $n)
            <li
                class="flex h-14 w-14 flex-none rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[3px]">
                <img class="h-full w-full rounded-full bg-white p-[3px]"
                    src="{{ 'https://i.pravatar.cc/300?u=' . Str::random(8) }}"
                    alt="{{ $n }}">
            </li>
        @endforeach
    </ul>
</div>
