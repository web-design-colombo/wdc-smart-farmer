<x-site-layout>
<x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                     :value="old('name')" required autofocus autocomplete="name" />
        </div>
        <br>
        <div>
            <x-label for="address" value="{{ __('Address') }}" />
            <x-input id="address" class="block mt-1 w-full" type="text" name="address"
                     :value="old('address')" required autofocus autocomplete="address" />
        </div>

        <br>

        <div>
            <x-label for="phone" value="{{ __('Phone Number') }}" />
            <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone"
                     :value="old('phone')" required autofocus autocomplete="tel" />
        </div>

        {{-- select option for student ,and teacher  --}}
        <div class="mt-4">
            <x-label for="role" value="{{ __('Role') }}" />
            <select name="role" id="role" class="block mt-1 w-full">
                <option value="2">Buyer</option>
                <option value="3">Farmer</option>
            </select>

        <div class="mt-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                     :value="old('email')" required autocomplete="username" />
        </div>

        <div class="mt-4">
            <x-label for="password" value="{{ __('Password') }}" />
            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                     autocomplete="new-password" />
        </div>

        <div class="mt-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                     name="password_confirmation" required autocomplete="new-password" />
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />

                        <div class="ms-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' =>
                                    '<a target="_blank" href="' .
                                    route('terms.show') .
                                    '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                    __('Terms of Service') .
                                    '</a>',
                                'privacy_policy' =>
                                    '<a target="_blank" href="' .
                                    route('policy.show') .
                                    '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                    __('Privacy Policy') .
                                    '</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
        @endif

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-button class="ms-4">
                {{ __('Register') }}
            </x-button>
        </div>
    </form>
    </x-authentication-card>
</x-site-layout>
