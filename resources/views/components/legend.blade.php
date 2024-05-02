@props(['letters'])

<div class="flex flex-wrap mb-10 mt-auto">
    @foreach($letters as $letter => $symbol)
        <div class="flex flex-col items-center border border-white/10 print:border-gray-400 p-1 my-2">
            <span class="mb-2">{{ ucwords($letter) }}</span>
            <span class="material-symbols-outlined">{{ $symbol }}</span>
        </div>
    @endforeach
</div>
