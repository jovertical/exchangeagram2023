<x-auth-layout>
    <form
        method="POST"
        action="{{ route('register') }}"
    >
        @csrf

        <div>
            <input
                id="name"
                name="name"
                type="text"
                class="w-full border border-gray-200 focus:border-gray-300 bg-gray-50 rounded-sm px-2 py-1.5 text-sm focus:outline-none"
                placeholder="Name"
            >

            @error('name')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2">
            <input
                id="email"
                name="email"
                type="email"
                class="w-full border border-gray-200 focus:border-gray-300 bg-gray-50 rounded-sm px-2 py-1.5 text-sm focus:outline-none"
                placeholder="Email address"
            >

            @error('email')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2">
            <input
                id="password"
                name="password"
                type="password"
                class="w-full border border-gray-200 focus:border-gray-300 bg-gray-50 rounded-sm px-2 py-1.5 text-sm focus:outline-none"
                placeholder="Password"
            >

            @error('password')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-2">
            <input
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                class="w-full border border-gray-200 focus:border-gray-300 bg-gray-50 rounded-sm px-2 py-1.5 text-sm focus:outline-none"
                placeholder="Repeat password"
            >

            @error('password_confirmation')
                <span class="text-red-500 text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="mt-4">
            <button
                type="submit"
                class="w-full bg-blue-500 hover:bg-blue-600 text-white rounded-lg px-2 py-1.5 text-sm focus:outline-none"
            >
                Sign Up
            </button>
        </div>
    </form>

    <x-slot:footer>
        <p class="text-center">
            Have an account? <a href="{{ route('login') }}" class="text-blue-400 font-medium">Log in</a>
        </p>
    </x-slot:footer>
</x-auth-layout>