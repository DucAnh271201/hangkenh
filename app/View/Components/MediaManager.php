<?php

namespace App\View\Components;

use App\Models\File;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class MediaManager extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
    )
    {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $files = File::query()->orderBy('id', 'DESC');
        $files = $files->paginate(18);
        return view('components.media-manager', [
            'files' => $files,
            'isInPage' => false
        ]);
    }
}
