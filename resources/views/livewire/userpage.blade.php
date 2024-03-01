<article>
    <livewire:filter />

    @if (isset($users) && count($users) > 0)
    <ul>
        @foreach ($users as $user)
        <li>{{ $user->name }}</li>
        @endforeach
    </ul>
    @else
    <p>No results found</p>
    @endif
</article>