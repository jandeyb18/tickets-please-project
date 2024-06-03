<x-layout>
        @auth   

        <form action="/logout" method="POST">
        @csrf
                <button type="submit" class="font-bold text-xl">Logout</button>
        </form>
        
        @endauth
        {{-- <h3 class="text-red-500">hello watatii</h3> --}}
</x-layout>