<x-auth-layout>
    <form
        method="POST"
        action="{{ route('login') }}"
    >
        @csrf

        <div>
            <input
                id="email"
                name="email"
                type="email"
                class="w-full border border-gray-200 focus:border-gray-300 bg-gray-50 rounded-sm px-2 py-1.5 text-sm focus:outline-none"
                placeholder="Email address"
            >
        </div>

        <div class="mt-2">
            <input
                id="password"
                name="password"
                type="password"
                class="w-full border border-gray-200 focus:border-gray-300 bg-gray-50 rounded-sm px-2 py-1.5 text-sm focus:outline-none"
                placeholder="Password"
            >
        </div>

        <div class="mt-4">
            <button
                type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white rounded-lg px-2 py-1.5 text-sm focus:outline-none"
            >
                Log in
            </button>
        </div>
    </form>

    <x-slot:footer>
        <p class="text-center">
            Don't have an account? <a href="{{ route('register') }}" class="text-blue-400 font-medium">Sign up</a>
        </p>
    </x-slot:footer>
</x-auth-layout>