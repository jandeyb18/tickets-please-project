<x-layout>

    <div class="max-w-xl mx-auto">

        <h3 class="text-red-400 text-center mb-10">register</h3>

        <form action="/register" method="POST">
            @csrf
            <div>
                <div class="mt-5">
                    <label for="name">Name</label>
                </div>

                <div>
                    <input type="text" name="name" id="name" class="w-[400px] border border-2 rounded-lg bg-transparent py-2 px-2" value="{{ old('name') }}" required>
                </div>
                @error('name')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div> 

            <div>
                <div class="mt-5">
                    <label for="email">Email</label>
                </div>

                <div>
                    <input type="email" name="email" id="email" class="w-[400px] border border-2 rounded-lg bg-transparent py-2 px-2" value="{{ old('email') }}" required>
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
                    <input type="password" name="password" id="password" class="w-[400px] border border-2 rounded-lg bg-transparent py-2 px-2" required>
                </div>
                @error('password')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <div class="mt-5">
                    <label for="password_confirmation">Confirm Password</label>
                </div>

                <div>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-[400px] border border-2 rounded-lg bg-transparent py-2 px-2" required>
                </div>
                @error('password')
                    <p class="text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="py-2 px-3 bg-blue-300">Register</button>

        </form>

    </div>

</x-layout>