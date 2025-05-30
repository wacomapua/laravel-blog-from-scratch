<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest
        <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->
        <div class="relative lg:inline-flex bg-gray-200 rounded-xl">
            <x-dropdown>
                <x-slot name="trigger">
                    <button class="py-2 pl-3 pr-9 text-sm font-semibold
                    w-full lg:w-32 text-left flex lg:inline-flex"
                    >
                        {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

                        <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px">

                        </x-icon>

                    </button>
                </x-slot>

                <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>


                @foreach ($categories as $category)

                    <x-dropdown-item
                        href="/categories/{{ $category->slug }}"
                        :active="request()->is('categories/' . $category->slug)"
                    >{{ ucwords($category->name) }}
                    </x-dropdown-item>

                @endforeach
            </x-dropdown>


        </div>

        <!-- Other Filters -->
        {{--        <div--}}
        {{--            class="relative flex lg:inline-flex items-center bg-gray-200 rounded-xl">--}}
        {{--            <select--}}
        {{--                class="flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold focus:outline-none focus:ring focus:border-blue-300">--}}
        {{--                <option--}}
        {{--                    value="category"--}}
        {{--                    disabled--}}
        {{--                    selected>--}}
        {{--                    Other Filters--}}
        {{--                </option>--}}
        {{--                <option value="foo">Foo</option>--}}
        {{--                <option value="bar">Bar</option>--}}
        {{--            </select>--}}

        {{--            <svg--}}
        {{--                class="transform -rotate-90 absolute pointer-events-none"--}}
        {{--                style="right: 12px"--}}
        {{--                width="22"--}}
        {{--                height="22"--}}
        {{--                viewBox="0 0 22 22">--}}
        {{--                <g--}}
        {{--                    fill="none"--}}
        {{--                    fill-rule="evenodd">--}}
        {{--                    <path--}}
        {{--                        stroke="#000"--}}
        {{--                        stroke-opacity=".012"--}}
        {{--                        stroke-width=".5"--}}
        {{--                        d="M21 1v20.16H.84V1z"></path>--}}
        {{--                    <path--}}
        {{--                        fill="#222"--}}
        {{--                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>--}}
        {{--                </g>--}}
        {{--            </svg>--}}
        {{--        </div>--}}

        <!-- Search -->

        <div
            class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-2 py-3">
            <img
                class="mr-2"
                width="20"
                height="20"
                src="/images/icons-search.svg"
                alt="search-icon"/>
            <form
                method="GET"
                action="#">
                <input
                    type="text"
                    name="search"
                    placeholder="Find something"
                    class="bg-transparent placeholder-black font-semibold text-sm outline-none"
                    value="{{ request('search') }}"/>
            </form>
        </div>
    </div>
</header>
