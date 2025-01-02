<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PresencesTable extends Component
{
    public $presences;

    public function __construct($presences)
    {
        $this->presences = $presences;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.presences-table');
    }
}
