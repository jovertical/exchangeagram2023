<x-auth-layout>
    <form
        method="POST"
        action="{{ route('login') }}"
    >
        @csrf

        <x-text-input
            id="email"
            name="email"
            type="email"
            placeholder="Email address"
            error="{{ $errors->first('email') }}"
        ></x-text-input>

        <x-text-input
            id="password"
            class="mt-2"
            name="password"
            type="password"
            placeholder="Password"
            error="{{ $errors->first('password') }}"
        ></x-text-input>

        <x-button class="mt-4" type="submit">Log in</x-button>
    </form>

    <x-slot:footer>
        <p class="text-center">
            Don't have an account? <a href="{{ route('register') }}" class="text-blue-400 font-medium">Sign up</a>
        </p>
    </x-slot:footer>
</x-auth-layout>