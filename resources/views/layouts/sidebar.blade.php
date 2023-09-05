<aside class="sidebar bottom-5 top-5 w-[250px] overflow-y-auto rounded-2xl bg-blue-600 p-2  ">
    <ul class="">
        <li class="my-2 p-3">
            <div class="mt-1 flex items-center justify-between gap-5 p-2.5">
                <a href="#" class="text-base font-bold text-white"> Dashboard </a>
                <span class="cursor-pointer text-xl font-bold text-red-400" onclick="openMenu()">
                    X
                </span>
            </div>
            <hr class="my-2" />
        </li>
        <li class="m-2 flex cursor-pointer items-center gap-3 rounded-md p-3 text-white duration-300">
            <!-- icon here  -->
            <input type="search" placeholder="search" id=""
                class="w-full rounded-md border bg-transparent p-2 pl-4 text-[15px] text-slate-100 focus:outline-none" />
        </li>
        <li class="my-2 flex items-center gap-4 rounded-lg p-2 hover:bg-blue-400">
            <svg class="h-6 w-6 flex-none fill-sky-100 stroke-sky-500 stroke-2" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
            </svg>
            <a href="/users" class="text-base font-semibold uppercase text-slate-50">
                users
            </a>
        </li>
        <li class="my-2 flex items-center gap-4 rounded-lg p-2 hover:bg-blue-400">
            <svg class="h-6 w-6 flex-none fill-sky-100 stroke-sky-500 stroke-2" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
            </svg>
            <a href="/savings" class="text-base font-semibold uppercase text-slate-50">
                Savings
            </a>
        </li>
        <li class="my-2 flex items-center gap-4 rounded-lg p-2 hover:bg-blue-400">
            <svg class="h-6 w-6 flex-none fill-sky-100 stroke-sky-500 stroke-2" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
            </svg>
            <a href="" class="text-base font-semibold uppercase text-slate-50">
                loans
            </a>
        </li>
        <hr class="my-4 text-gray-200" />
        <li class="my-2 flex items-center gap-4 rounded-lg p-2 bg-blue-400">
            <svg class="h-6 w-6 flex-none fill-sky-100 stroke-sky-500 stroke-2" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <path d="m8 13 2.165 2.165a1 1 0 0 0 1.521-.126L16 9" fill="none" />
            </svg>
            <a href="#" class="text-base font-semibold uppercase text-slate-50">
                logout
            </a>
        </li>
    </ul>
</aside>
