<x-layout>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <div class="grid place-content-center h-screen text">
    <h1 class="text-green-600 text-center text-6-1">Log In</h1>
    <form action="/login" method="POST" class="flex-col justify-center my-12">
        @csrf
    <div class="my-2">
        <x-input titulo="Email" type="text" nombre="email"/>
    </div>
    <div class="my-2">
        <x-input titulo="Password" type="password" nombre="password"/>
    </div class="my-2">

        <button type="submit" class="bg-[#0fb1dc] rounded-lg text-1xl">Log In</button>
    </form>
    </div>
</x-layout>
