<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputV extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $id = '',
        public string $type = 'text',
        public string $class = '',
        public string $classInput = '',
        public string $label = '',
        public string $name = '',
        public ?string $value = '',
        public string $placeholder = ''
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input-v');
    }
}
