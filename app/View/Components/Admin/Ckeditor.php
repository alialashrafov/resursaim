<?php

namespace App\View\Components\Admin;

use Illuminate\View\Component;

class Ckeditor extends Component
{
    public $name;
    public $title;
    public $value;

    public function __construct($name = "", $title = "", $value = "")
    {
        $this->title = $title;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.admin.ckeditor');
    }
}
