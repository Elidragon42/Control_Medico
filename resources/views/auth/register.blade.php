
<x-guest-layout>
    <form method="POST" action="{{ route('login.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  autofocus />
            @error('name')
            <p class="text-red-600">{{$message}}</p>
            @enderror
        </div>

        <!-- Numero De Empleado -->
        <div class="mt-4">
            <x-input-label for="numero_de_empleado" :value="__('Numero De Empleado')" />
            <x-text-input id="numero_de_empleado" class="block mt-1 w-full" type="number" name="numero_de_empleado" :value="old('numero_de_empleado')"  />
            @error('numero_de_empleado')
            <p class="text-red-600">{{$message}}</p>
            @enderror
        </div>


        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            />
                            @error('password')
            <p class="text-red-600">{{$message}}</p>
            @enderror

            
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirm" :value="__('Confirmar Contraseña')" />

            <x-text-input id="password_confirm" class="block mt-1 w-full"
                            type="password"
                            name="password_confirm"  />
                            @error('password_confirm')
                            <p class="text-red-600">{{$message}}</p>
                            @enderror
            
        </div>

        <!-- Admin Password -->
        <div class="mt-4">
            <x-input-label for="admin_password" :value="__('Contraseña Del Administrador')" />

            <x-text-input id="admin_password" class="block mt-1 w-full"
                            type="password"
                            name="admin_password"  />
                            @error('admin_password')
                            <p class="text-red-600">{{$message}}</p>
                            @enderror
            
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Crear usuario') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

