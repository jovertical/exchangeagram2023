<x-app-layout>
    <div class="flex w-full overflow-hidden">
        <!-- Main section -->
        <div class="w-3/5">
            <x-stories-slider />

            <x-posts.listing :posts="$posts" />
        </div>
        <!--/. Main section -->

        <!-- Sidebar section -->
        <div>
            <x-recommended-users :users="$followable" />
        </div>
        <!--/. Sidebar section -->
    </div>
</x-app-layout>
