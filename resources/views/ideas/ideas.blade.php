<x-layout>
    @if($ideas->count())
    <div class="mt-6 text-white">

        <h2 class="font-bold">Your Ideas</h2>

        <ul class="mt-6">
            @foreach($ideas as $idea)
                <div class="card bg-primary text-primary-content w-96">
                    <div class="card-body">
                        <h2 class="card-title">Card title!</h2>
                        <p><a href="/ideas/{{$idea->id}}" class="text-sm"> {{ $idea->description}}</a></p>
                        <div class="card-actions justify-end">
                            <button class="btn">Edit</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </ul>
    </div>
    @else
        <p class="mt-6 font-bold text-white">No Ideas. <a href="ideas/create" class="hover: underline">Create a new one then.</a></p>
    @endif
</x-layout>
