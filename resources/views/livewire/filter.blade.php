<div class=" flex flex-row justify-evenly">
    <label for="filter" class="text-lg font-bold text-slate-200">Filter</label>
    <input wire:model="search" type="text" id="filter" class="p-2 border border-slate-300 bg-transparent" />
    <button wire:click="refreshPage" class="p-2 bg-blue-500 text-white">Filter</button>
    <button wire:click="resetFilter" class="p-2 bg-red-500 text-white">Reset</button>
</div>