<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            SMART TI
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg-px-8">
            <div class="big-blue overflow-hidden shadow-xl sm-rounded-lg">
                Bienvenido {{Auth::user()->name}}
                
            </div>
        </div>
    </div>
    
    
</x-app-layout>
