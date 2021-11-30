<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Book extends Component
{

    /**
     * The book.
     *
     * @var string
     */
    public $livro;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($livro)
    {
        $this->livro = $livro;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.book');
    }
}
