<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{


    public function __construct(
        public string $id,
        public ?string $title = '',
        public ?string $body = '',
        public ?string $buttonType = 'submit',
        public ?string $buttonCancelText = 'Cancel',
        public ?string $buttonConfirmLabel = 'Create new report',
        public ?string $buttonConfirmIcon = ''
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}
