<x-layout>
    <form method="POST" action="/ideas">
        @csrf
        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">New Ideas</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white/5 px-3 text-white font-light @error('description') textarea-error @enderror"></textarea>

                <x-error name="description"/>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Write a few ideas to save for later.</p>
        </div>

        <div class="mt-6 items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>
</x-layout>
