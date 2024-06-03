<x-layout>

    <form action="/login" method="POST">
        @csrf

        <div class="text-center text-red-600">
            <h3>Login Here</h3>
        </div>

        <div class="max-w-xl mx-auto">

            <div>
                <div class="mt-5">
                    <label for="email">Email</label>
                </div>

                <div>
                    <input type="email" name="email" id="email" class="w-[400px] border border-2 rounded-lg bg-transparent py-2 px-2"  value="{{ old('email') }}" required>
                </div>
                @error('email')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <div class="mt-5">
                    <label for="password">Password</label>
                </div>

                <div>
                    <input type="password" name="password" id="password" class="w-[400px] border border-2 rounded-lg bg-transparent py-2 px-2" :value="old('name')" required>
                </div>
                @error('password')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="py-2 px-3 bg-blue-300">Register</button>
        </div>
        
    </form>

</x-layout>