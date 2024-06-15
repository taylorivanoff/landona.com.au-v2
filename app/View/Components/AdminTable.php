<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminTable extends Component
{
    public $columns;
    public $rows;
    public $routePrefix;

    public function __construct($columns, $rows, $routePrefix)
    {
        $this->columns = $columns;
        $this->rows = $rows;
        $this->routePrefix = $routePrefix;
    }

    public function render()
    {
        return view('components.admin-table');
    }
}
