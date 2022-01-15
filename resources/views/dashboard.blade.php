<x-app-layout>
    <x-slot name="header">
        <div class="w-full h-auto flex justify-between items-center position-relative">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="float-right flex justify-center items-center w-96 h-10 bg-green-200 rounded-xl position-absolute right-0">
                <p class="font-serif font-bold animate__animated animate__animated "><span class="font-serif font-bold text-red-800">Gautam Kumar</span> loged in just now </p>
            </div>
        </div>
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>

   

</x-app-layout>
