<?php

namespace App\View\Components;

use App\Models\Task;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Table extends Component
{
    public string $dates;
    public string $tbody;

    /**
     * Create a new component instance.
     */
    public function __construct($dates)
    {
        $this -> dates = $dates;
        $this -> tbody = $this -> generateTable($this->dates);
    }

    private function generateTable($dates) {
        $tbody = '';
        foreach ($dates->items() as $row) {
            $tbody .= '
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">'. $row->name.'</td>
                    <td class="px-6 py-4">' . $row->description . '</td>
                    <td class="px-6 py-4">' . $row->completed . '</td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                    </td>
                </tr>
            ';
        }
        return $tbody;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table', ['table' => $this -> tbody]);
    }
}
