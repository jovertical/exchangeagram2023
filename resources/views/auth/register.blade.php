<x-auth-layout>
    <form
        method="POST"
        action="{{ route('register') }}"
    >
        @csrf

        <x-text-input
            id="name"
            name="name"
            placeholder="Name"
            value="{{ old('name') }}"
            error="{{ $errors->first('name') }}"
        ></x-text-input>

        <x-text-input
            class="mt-2"
            id="email"
            name="email"
            type="email"
            placeholder="Email address"
            value="{{ old('email') }}"
            error="{{ $errors->first('email') }}"
        ></x-text-input>

        <x-text-input
            class="mt-2"
            id="password"
            name="password"
            type="password"
            placeholder="Password"
            value="{{ old('password') }}"
            error="{{ $errors->first('password') }}"
        ></x-text-input>

        <x-text-input
            class="mt-2"
            id="password_confirmation"
            name="password_confirmation"
            type="password"
            placeholder="Repeat password"
            value="{{ old('password_confirmation') }}"
            error="{{ $errors->first('password_confirmation') }}"
        ></x-text-input>

        <x-button class="mt-4" type="submit">Sign up</x-button>
    </form>

    <x-slot:footer>
        <p class="text-center">
            Have an account? <a href="{{ route('login') }}" class="text-blue-400 font-medium">Log in</a>
        </p>
    </x-slot:footer>
</x-auth-layout>