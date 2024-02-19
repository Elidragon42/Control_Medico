<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Login Form -->
    <form method="POST" action="{{ route('login.login') }}">
        @csrf


        @if(session('error'))
        <div class="text-red-600">
            {{ session('error') }}
        </div>
    @endif
        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="numero_de_empleado" :value="__('Numero de empleado')" />

            <x-text-input id="numero_de_empleado" class="block mt-1 w-full" type="number" name="numero_de_empleado"
                :value="old('numero_de_empleado')" autofocus />
            @error('numero_de_empleado')
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="">
            <x-input-label class="pt-5" for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" />
            @error('password')
            
                <p class="text-red-600">{{ $message }}</p>
            @enderror
        </div>
        <!-- Submit Button -->

        <div class="flex items-center content-between mt-4">

            <x-primary-button>
                {{ __('Iniciar Sesion') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
