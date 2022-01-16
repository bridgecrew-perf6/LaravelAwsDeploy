<x-app-layout>
    <x-slot name="header">
        <div class=" contain w-full h-auto flex justify-between items-center ">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="chat-image remove animate__animated float-right flex justify-between items-center w-96 h-10 bg-green-200 rounded-xl  right-0">
                <img src="{{ asset('ChatImage/chat-dynamic-gradient.png') }}" alt="" class="h-10 w-10 float-left rounded-full  ">
                <p class="font-serif font-bold float-left user"><span class="font-serif font-bold text-red-800">Gautam Kumar</span> logged in just now </p>
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
