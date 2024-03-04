<div class="flex flex-col justify-evenly">
    <div class="flex flex-row justify-evenly mb-6">
        <label for="filter" class="text-lg font-bold text-slate-200">Filter</label>
        <input wire:model="search" wire:keydown="refreshPage" type="text" id="filter" class="p-2 border border-slate-300 bg-transparent text-slate-200" />
        <button wire:click="refreshPage" class="p-2 bg-amber-600 text-white">Filter</button>
        <button wire:click="resetFilter" class="p-2 bg-red-500 text-white">Reset</button>
    </div>



    @if (isset($users) && $users->count())
    <div class="w-full flex flex-row flex-wrap justify-evenly">

        @foreach ($users as $user)
        <div class="text-slate-200 w-1/4 bg-gradient-to-tl from-slate-400 to-slate-600 mx-6 mb-10 text-center h-10">{{ $user->name }}</div>
        @endforeach
    </div>
    {{ $users->links() }}
    @else
    <div class="text-slate-200 w-3/4 mx-auto bg-gradient-to-tl from-slate-400 to-slate-600 text-center h-10">No users found</div>
    @endif
</div>