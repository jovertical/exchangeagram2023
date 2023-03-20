@props(['posts' => []])

<!-- Post listing -->
<div class="mt-4">
    <ul class="space-y-4" role="list">
        @foreach ($posts as $post)
            <x-posts.post :post="$post" />
        @endforeach
    </ul>
</div>
<!--/. Post listing -->