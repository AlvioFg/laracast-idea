<x-layout>
    @if($ideas->count())
    <div class="mt-6 text-white">

        <h2 class="font-bold">Your Ideas</h2>

        <ul class="mt-6">
            @foreach($ideas as $idea)
                <li>
                <a href="/ideas/{{$idea->id}}" class="text-sm"> {{ $idea->description}}</a>
                </li>
            @endforeach
        </ul>
    </div>
    @else
        <p class="mt-6 font-bold text-white">No Ideas. <a href="ideas/create" class="hover: underline">Create a new one then.</a></p>
    @endif
</x-layout>
