<nav class="border-b border-gray-200 bg-white">
    <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-12 items-center justify-between">
            <!-- Logo -->
            <div class="flex">
                <div class="flex flex-shrink-0 items-center">
                    <img 
                        class="h-8 w-auto"
                        src="{{ Vite::asset('resources/images/logo.png') }}"
                        alt="{{ config('app.name') }}"
                    >
                </div>
            </div>
            <!--/. Logo -->

            <!-- Search bar -->
            <div class="flex justify-center px-2 lg:ml-6 lg:justify-end">
                <div class="w-full max-w-lg lg:max-w-xs">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative text-gray-400 focus-within:text-gray-600">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    fill-rule="evenodd"
                                    d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                    clip-rule="evenodd" 
                                />
                            </svg>
                        </div>

                        <input
                            id="search"
                            class="block w-64 h-8 rounded-md border border-gray-200 bg-white py-1 pl-10 pr-3 text-gray-900 sm:text-sm sm:leading-6 focus:outline-none"
                            placeholder="Search"
                            type="search"
                            name="search"
                        >
                    </div>
                </div>
            </div>
            <!--/. Search bar -->

            <div class="flex items-center ml-6 space-x-4">
                <!-- Home link -->
                <a
                    href="#"
                    class="rounded-full bg-white text-gray-900 focus:outline-none"
                >
                    <span class="sr-only">View posts</span>
                    <svg
                        class="h-6 w-6"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        aria-hidden="true"
                    >
                        <!-- Use this for INACTIVE link state
                            <path
                                d="M9.005 16.545a2.997 2.997 0 0 1 2.997-2.997A2.997 2.997 0 0 1 15 16.545V22h7V11.543L12 2 2 11.543V22h7.005Z"
                                fill="none"
                                stroke="currentColor"
                                stroke-linejoin="round"
                                stroke-width="2"
                            ></path>
                        -->

                        <path
                            d="M22 23h-6.001a1 1 0 0 1-1-1v-5.455a2.997 2.997 0 1 0-5.993 0V22a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V11.543a1.002 1.002 0 0 1 .31-.724l10-9.543a1.001 1.001 0 0 1 1.38 0l10 9.543a1.002 1.002 0 0 1 .31.724V22a1 1 0 0 1-1 1Z"
                            fill="currentColor"
                        ></path>
                    </svg>
                </a>
                <!--/. Home link -->
                
                <!-- Explore link -->
                <a 
                    href="#"
                    class="rounded-full bg-transparent text-gray-900 focus:outline-none"
                >
                    <span class="sr-only">Explore trending posts</span>
                    <svg
                        class="h-6 w-6"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        aria-hidden="true"
                    >
                        <polygon
                            fill="none"
                            points="13.941 13.953 7.581 16.424 10.06 10.056 16.42 7.585 13.941 13.953"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5"
                        ></polygon>
                        <polygon
                            fill-rule="evenodd"
                            points="10.06 10.056 13.949 13.945 7.581 16.424 10.06 10.056"></polygon><circle cx="12.001"
                            cy="12.005"
                            fill="none"
                            r="10.5"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="1.5">
                        </circle>

                        <!-- Use this for ACTIVE link state
                            <path
                                d="m13.173 13.164 1.491-3.829-3.83 1.49ZM12.001.5a11.5 11.5 0 1 0 11.5 11.5A11.513 11.513 0 0 0 12.001.5Zm5.35 7.443-2.478 6.369a1 1 0 0 1-.57.569l-6.36 2.47a1 1 0 0 1-1.294-1.294l2.48-6.369a1 1 0 0 1 .57-.569l6.359-2.47a1 1 0 0 1 1.294 1.294Z"
                            ></path>
                        -->
                    </svg>
                </a>
                <!--/. Explore link -->

                <!-- Messages link -->
                <a
                    href="#"
                    class="rounded-full bg-transparent text-gray-900 focus:outline-none"
                >
                    <span class="sr-only">View messages</span>
                    <svg
                        class="h-6 w-6"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                        aria-hidden="true"
                    >
                        <path
                            d="M12.003 2.001a9.705 9.705 0 1 1 0 19.4 10.876 10.876 0 0 1-2.895-.384.798.798 0 0 0-.533.04l-1.984.876a.801.801 0 0 1-1.123-.708l-.054-1.78a.806.806 0 0 0-.27-.569 9.49 9.49 0 0 1-3.14-7.175 9.65 9.65 0 0 1 10-9.7Z"
                            fill="none"
                            stroke="currentColor"
                            stroke-miterlimit="10"
                            stroke-width="1.739">
                        </path>
                        <path
                            d="M17.79 10.132a.659.659 0 0 0-.962-.873l-2.556 2.05a.63.63 0 0 1-.758.002L11.06 9.47a1.576 1.576 0 0 0-2.277.42l-2.567 3.98a.659.659 0 0 0 .961.875l2.556-2.049a.63.63 0 0 1 .759-.002l2.452 1.84a1.576 1.576 0 0 0 2.278-.42Z"
                            fill-rule="evenodd"
                        ></path>

                        <!-- Use this for ACTIVE links
                            <path
                                d="M12.003 1.131a10.487 10.487 0 0 0-10.87 10.57 10.194 10.194 0 0 0 3.412 7.771l.054 1.78a1.67 1.67 0 0 0 2.342 1.476l1.935-.872a11.767 11.767 0 0 0 3.127.416 10.488 10.488 0 0 0 10.87-10.57 10.487 10.487 0 0 0-10.87-10.57Zm5.786 9.001-2.566 3.983a1.577 1.577 0 0 1-2.278.42l-2.452-1.84a.63.63 0 0 0-.759.002l-2.556 2.049a.659.659 0 0 1-.96-.874L8.783 9.89a1.576 1.576 0 0 1 2.277-.42l2.453 1.84a.63.63 0 0 0 .758-.003l2.556-2.05a.659.659 0 0 1 .961.874Z"
                            ></path>
                        !-->
                    </svg>
                </a>
                <!--/. Messages link -->

                <!-- Notifications link -->
                <a
                    href="#"
                    class="rounded-full bg-transparent text-gray-900 focus:outline-none"
                >
                    <span class="sr-only">View notifications</span>
                    <!--
                        Set the viewBox to `0 0 24 24` if the link is INACTIVE
                        Set the viewBox to `0 0 48 48` if the link is ACTIVE
                    -->
                    <svg
                        class="h-6 w-6"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                        aria-hidden="true"
                    >
                        <path
                            d="M16.792 3.904A4.989 4.989 0 0 1 21.5 9.122c0 3.072-2.652 4.959-5.197 7.222-2.512 2.243-3.865 3.469-4.303 3.752-.477-.309-2.143-1.823-4.303-3.752C5.141 14.072 2.5 12.167 2.5 9.122a4.989 4.989 0 0 1 4.708-5.218 4.21 4.21 0 0 1 3.675 1.941c.84 1.175.98 1.763 1.12 1.763s.278-.588 1.11-1.766a4.17 4.17 0 0 1 3.679-1.938m0-2a6.04 6.04 0 0 0-4.797 2.127 6.052 6.052 0 0 0-4.787-2.127A6.985 6.985 0 0 0 .5 9.122c0 3.61 2.55 5.827 5.015 7.97.283.246.569.494.853.747l1.027.918a44.998 44.998 0 0 0 3.518 3.018 2 2 0 0 0 2.174 0 45.263 45.263 0 0 0 3.626-3.115l.922-.824c.293-.26.59-.519.885-.774 2.334-2.025 4.98-4.32 4.98-7.94a6.985 6.985 0 0 0-6.708-7.218Z"
                        ></path>

                        <!-- Use this for ACTIVE link state
                            <path
                                d="M34.6 3.1c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5s1.1-.2 1.6-.5c1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"
                            ></path>
                        -->
                    </svg>
                </a>
                <!--/. Notifications link -->

                <!-- Create post button -->
                <button
                    type="button"
                    class="rounded-full bg-transparent text-gray-900 focus:outline-none"
                >
                    <span class="sr-only">Create post</span>
                    <svg
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.5"
                        aria-hidden="true"
                    >
                        <path
                            d="M2 12v3.45c0 2.849.698 4.005 1.606 4.944.94.909 2.098 1.608 4.946 1.608h6.896c2.848 0 4.006-.7 4.946-1.608C21.302 19.455 22 18.3 22 15.45V8.552c0-2.849-.698-4.006-1.606-4.945C19.454 2.7 18.296 2 15.448 2H8.552c-2.848 0-4.006.699-4.946 1.607C2.698 4.547 2 5.703 2 8.552Z"
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                        ></path>
                        <line
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            x1="6.545"
                            x2="17.455"
                            y1="12.001"
                            y2="12.001"
                        ></line>
                        <line
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            x1="12.003"
                            x2="12.003"
                            y1="6.545"
                            y2="17.455"
                        ></line>
                    </svg>
                </button>
                <!--/. Create post button -->

                <!-- View profile link -->
                <a
                    href="#"
                    class="flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none"
                >
                    <span class="sr-only">View profile</span>
                    <img
                        class="h-7 w-7 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt=""
                    >
                </a>
                <!--/. View profile link -->
            </div>
        </div>
    </div>
</nav>