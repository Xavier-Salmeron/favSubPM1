<x-layout>
    <!-- He who is contented is rich. - Laozi -->
    <h1>Sign up</h1>
    <form action="/register" method="POST">
        @csrf
        <div>
            <x-input titulo="Name" type="text" nombre="name"/>
        </div>
        <div>
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>
        <div>
            <x-input titulo="Password" type="password" nombre="password"/>
        </div>
        <div>
            <x-input titulo="Birthday" type="date" nombre="birthday"/>
        </div>

        <button type="submit">Submit</button>
    </form>
</x-layout>
