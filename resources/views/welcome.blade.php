<x-layout>
    @forelse ($tasks as $task)
        <h1>{{ $task }}</h1>
    @empty
        <p>There are no active tasks.</p>
    @endforelse

</x-layout>
