@props([
    'message',
    'letters'
    ])

<div {{ $attributes->class(['text-center flex flex-wrap gap-7 mt-auto']) }}>

    @foreach(explode(' ', $message) as $word)
        <div class="word flex gap-x-2">
            @foreach(str_split($word) as $character)
                <div class="flex flex-col">
                <span
                    class="material-symbols-outlined !text-4xl">{{ $letters[strtolower($character)] ?? $character }}</span>

                    <div class="bg-gray-200 print:border print:border-gray-300 h-12 w-12">
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
