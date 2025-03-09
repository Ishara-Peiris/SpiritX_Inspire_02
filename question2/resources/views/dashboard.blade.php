<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    
                </div>
                <a class="btn btn-primary w-100 d-flex align-items-center justify-content-center" href="{{ url('/play') }}" style="text-align: center; padding: 10px; border-radius: 5px;">
    <i class="mdi mdi-laptop me-2"></i>
    <span class="menu-title"> View ALL Players</span>
</a>
            </div>
        </div>
    </div>
</x-app-layout>
