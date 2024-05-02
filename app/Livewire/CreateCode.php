<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class CreateCode extends Component
{
    public string $message;

    protected array $symbols = [
        'eco',
        'rocket_launch',
        'waving_hand',
        'home',
        'star',
        'key',
        'bolt',
        'done_all',
        'token',
        'hide_source',
        'keyboard_command_key',
        'unfold_more_double',
        'rebase',
        'page_info',
        'heart_check',
        'arrows_outward',
        'event_list',
        'menu',
        'delete',
        'add',
        'settings',
        'filter_list',
        'settings_accessibility',
        'backspace',
        'change_circle',
        'grass',

    ];

    #[Computed(persist: true)]
    public function letters(): array
    {
        shuffle($this->symbols);

        return collect(range('a', 'z'))
            ->combine($this->symbols)
            ->toArray();
    }
    public function render()
    {
        return view('livewire.create-code');
    }
}
