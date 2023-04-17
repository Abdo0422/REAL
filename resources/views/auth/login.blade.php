<x-guest-layout>
    <style>
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
    <x-authentication-cardl>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label style="margin-bottom:10px;font-weight: bold; font-size:18px" for="Email"><span
                        style="color:#5B06E5;">E</span>mail</label><br>
                <x-linput id="email" class="block mt-1 w-full  @error('email') is-invalid @enderror" type="email"
                    name="email" required autofocus autocomplete="username" /><br><br>

            </div>

            <div class="mt-4">
                <label style="margin-bottom:10px;font-weight: bold;font-size:18px"for="password"><span
                        style="color:#5B06E5;">Pass</span>word</label><br>
                <x-linput id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>
            <div style="display: flex;
            justify-content: right; ">
                @if (Route::has('password.request'))
                    <a id="register" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif


            </div>
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div><br><br>
            <x-buttonl class="ml-4">
                {{ __('Sign in') }}
            </x-buttonl>

        </form>


        <div>
 <hr size="8" width=400px; height=100px color="black" style=" position:absolute;bottom: 42%;
 right: 40%;">
            <div style="display: flex;
            align-items: center;position:absolute;bottom: 0;
           left:37%;top:60%;border:#D0D5DD solid 1px;height:50px;padding:10px 10px 10px 10px; width:180px;font-family: Inter;border-radius: 8px;">
<img src="../assets/twitter.png" width="30px" height="30px" alt='fb' style="padding-right:10px">
                <a href="#"><button><i className="fa-brands fa-twitter"></i>Sign
                        in with Twitter</button></a>
            </div>
            <div style="display: flex;
            align-items: center;position:absolute;bottom: 0;
           left:52%;top:60%;border: #1877F2 solid 1px;height:50px;padding:10px 10px 10px 10px;width:200px;font-family: Inter;border-radius: 8px;background-color: #1877F2;color:white">
<img src="../assets/facebook.svg" width="30px" height="30px" alt='fb' style="padding-right:10px">
                <a href="#"><button style="text-align:left;">Sign in with Facebook</button></a>
            </div>

        </div>
    </x-authentication-cardl>
</x-guest-layout>
