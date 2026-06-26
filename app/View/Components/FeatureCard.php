<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FeatureCard extends Component
{
    public $title;
    public $description;
    public $icon;
    public $route;

    public function __construct($title, $description, $icon, $route)
    {
        $this->title = $title;
        $this->description = $description;
        $this->icon = $icon;
        $this->route = $route;
    }

    public function render(): View|Closure|string
    {
        return view('components.feature-card');
    }
}