<x-layout>

    <form method="POST" action="/ideas/{{$idea->id}}">
        @csrf
        @method('PATCH')
        <div class="cool-span-full">
            <label for="idea" class="block text-sm/6 font-medium text-white">New Ideas</label>
            <div class="mt-2">
                <textarea id="idea" name="description" rows="3" class="block w-full rounded-md bg-white/5 px-3 text-white font-light">{{ $idea->description }}</textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Edit your idea</p>
        </div>

        <div class="mt-6 flex items-center gap-x-2">
            <button type="submit"
                    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>
            <button type="submit"
                    form="delete-form"
                    class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white hover:bg-red-400 focus-visible:outline-offset-2 focus-visible:outline-red-500">Delete</button>
        </div>

    </form>
    <form id="delete-form" method="post" action="/ideas/{{$idea->id}}">
        @method('DELETE')
        @csrf
    </form>

</x-layout>
