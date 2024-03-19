<x-layout>
    <!-- He who is contented is rich. - Laozi -->
    <h1 class="text-4xl mt-12 mb-10">Sign up</h1>
    <form action="/register" method="POST">
        @csrf
            <x-input titulo="Name" type="text" nombre="name"/>

            <x-input titulo="Email" type="text" nombre="email"/>

            <x-input titulo="Password" type="password" nombre="password"/>

            <x-input titulo="Birthday" type="date" nombre="birthday"/>

        <button type="submit" class="border border-black rounded-lg px-3 py">Submit</button>
    </form>
</x-layout>
