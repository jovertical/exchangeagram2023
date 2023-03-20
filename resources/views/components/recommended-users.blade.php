@props(['users' => []])

<nav class="ml-6 w-auto overflow-hidden">
    <!-- Suggested to follow > header -->
    <div class="flex items-center justify-between">
        <h4 class="text-sm font-medium text-gray-400">Suggestions for you</h4>

        <a class="text-sm font-semibold text-gray-900 hover:text-gray-600" href="#">
            See all
        </a>
    </div>

    <!-- Suggested to follow > accounts list -->
    <ul class="mt-3 flex flex-col space-y-2.5">
        @foreach ($users as $user)
            <li>
                <div class="flex flex-row items-center justify-between">
                    <a class="flex flex-row items-center" href="#">
                        <div>
                            <img class="h-10 w-10 rounded-full bg-white p-[3px]"
                                src="{{ $user->avatar }}" alt="">
                        </div>

                        <div class="ml-2 min-w-0 flex-1">
                            <p class="text-sm font-medium text-gray-900">
                                {{ $user->username }}
                            </p>

                            @if ($user->follows_count)
                                <p class="text-xs font-medium text-gray-500">
                                    Followed by {{ $user->follows_count }} people
                                </p>
                            @endif
                        </div>
                    </a>

                    <div class="ml-4">
                        @if (!Auth::user()->following($user))
                            <button class="text-sm font-semibold text-blue-500 hover:text-blue-900"
                                type="button" onclick="follow('{{ $user->id }}')">
                                Follow
                            </button>
                        @else
                            <button class="text-sm font-semibold text-red-500 hover:text-red-900"
                                type="button" onclick="unfollow('{{ $user->id }}')">
                                Unfollow
                            </button>
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    <!--/. Suggested to follow > accounts list -->

    <!-- Follow user form -->
    <form class="hidden" id="form-users.follow.store" method="POST">
        @csrf
    </form>

    <!--/. Unfollow user form -->
    <form class="hidden" id="form-users.follow.destroy" method="POST">
        @csrf
        @method('DELETE')
    </form>
</nav>

@section('scripts')
    <script>
        function follow(user) {
            const form = document.getElementById('form-users.follow.store')

            form.action = '/users/' + user + '/follows';

            form.submit();
        }

        function unfollow(user) {
            const form = document.getElementById('form-users.follow.destroy')

            form.action = '/users/' + user + '/follows';

            form.submit();
        }
    </script>
@endsection
