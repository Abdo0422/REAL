<x-guest-layout>
    <style>
        @font-face {
            font-family: FFont;
            src: url('./assets/Ramabhadra.ttf');
        }

        @font-face {
            font-family: SFont;
            src: url('./assets/RedHatDisplay.ttf');
        }

        @font-face {
            font-family: TFont;
            src: url('/assets/Inter.ttf');
        }

        @font-face {
            font-family: QuickBold;
            src: url(/assets/Quicksand-Bold.ttf);
        }

        @font-face {
            font-family: QuickRegular;
            src: url(/assets/Quicksand-Regular.ttf);
        }

        p {
            font-family: kavoon;
            font-size: 30px;
            left: 100px;
        }

        p span {
            color: #5B06E5;
        }

        #register:hover {
            color: #5B06E5 !important;
            font-size: 1.01rem
        }
    </style>
    <x-authentication-carde>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />



        <form method="POST" action="{{ route('register') }}" style="margin-top: 50px">
            @csrf
            <div style="display: flex;
        align-items: center;font-family: RedHatDisplay;">
                <div style="margin-right:200px;">

                    <label style="margin-bottom:10px;font-weight: bold;" for="fnmae"><span
                            style="color:#5B06E5;">Full</span> name</label><br><br>
                    <x-inpute id="name" class="input1" type="text" name="name" :value="old('name')" required
                        autofocus autocomplete="name" /><br><br>

                    <label style="margin-bottom:10px;font-weight: bold;" for="Email"><span
                            style="color:#5B06E5;">E</span>mail</label><br><br>
                    <x-inpute id="email" class="input1" type="email" name="email" :value="old('email')" required
                        autocomplete="username" /><br><br>


                    <label style="margin-bottom:10px;font-weight: bold;" for="number"><span
                            style="color:#5B06E5;">Phone</span> number</label><br><br>
                    <x-inpute id="phone" class="input1" type="number" name="phone" :value="old('phone')" required
                        autocomplete="username" /><br><br>


                    <label style="margin-bottom:10px;font-weight: bold;" for="Adresse"><span
                            style="color:#5B06E5;">A</span>dresse</label><br><br>
                    <x-inpute id="adress" class="input1" type="text" name="adress" :value="old('adress')" required
                        autocomplete="username" /><br><br>
                </div>

                <div style="margin-left:200px; margin-top:20px;">

                    <label style="margin-bottom:10px;font-weight: bold;" for="age"><span
                            style="color:#5B06E5;">A</span>ge</label><br><br>
                    <x-inpute id="age" class="input2" type="text" name="age" :value="old('age')" required
                        autocomplete="username" /><br><br>


                    <label style="margin-bottom:10px;font-weight: bold;" for="password"><span
                            style="color:#5B06E5;">P</span>assword</label><br><br>
                    <x-inpute id="password" class="input2" type="password" name="password" required
                        autocomplete="new-password" /><br><br>



                    <label style="margin-bottom:10px;font-weight: bold;" for="password"><span
                            style="color:#5B06E5;">Confirmer</span> Password</label><br><br>
                    <x-inpute id="password_confirmation" class="input2" type="password" name="password_confirmation"
                        required autocomplete="new-password" /><br><br>

                    <label style="margin-bottom:10px;font-weight: bold;" for="gender"><span
                            style="color:#5B06E5;">G</span>ender</label><br><br>
                    <div className="gender">
                        <input type="radio" name="gender" id="female" /><span> Female</span><br><br>
                        <input type="radio" name="gender" id="male" /><span> Male</span>
                    </div>
                </div>
            </div>
            </div><br><br>


            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
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
            <x-buttone>
                Sign up
            </x-buttone>
            <div style="display: flex;
            justify-content: center; ">
                <a id="register" style="color:#5B06E5;" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>


            </div>
        </form>
    </x-authentication-carde>
</x-guest-layout>
