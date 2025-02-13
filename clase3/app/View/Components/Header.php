<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $links;
    public $title;
    /**
     * Create a new component instance.
     */
    public function __construct($array, $title)
    {
        $this ->title = $title;
        $this->links = $this->generateLinks($array);
    }

    private function generateLinks($array) {
        $html = '';
        foreach ($array as $element) {
            $html .= "<a href='{$element[1]}' class='text-blue-500 hover:underline mx-2'>{$element[0]}</a>";
        }
        return $html;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header', ['title' => $this->title, 'links' => $this->links]);
    }
}
