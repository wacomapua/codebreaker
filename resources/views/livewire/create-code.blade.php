<div class="mt-8 items-center flex flex-col gap-10 flex-1">
    <form action="" class="print:hidden">
        <textarea wire:model.live="message" id="" cols="30" rows="10"
                  class="bg-white/10 text-white py-2 px-3 rounded-lg"
        ></textarea>
        <div class="mt-2 flex justify-end">
            <button @click="window.print()" class="bg-blue-500 px-2 py-1 shadow-lg rounded-md">Print</button>
        </div>
    </form>
    <x-code :message="$message" :letters="$this->letters"/>
    <x-legend :letters="$this->letters"/>
</div>


