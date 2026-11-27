<x-layout>
        <div class="mt-6 text-white">

            <h2 class="font-bold">Your Ideas</h2>

            <div class="mt-6"> {{ $idea->description }}</div>

            <div class="mt-6 items-center justify-end gap-x-6">
                <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline-offset-2 focus-visible:outline-indigo-500"><a href="{{$idea->id}}/edit">Edit</a></button>
            </div>
        </div>
</x-layout>
