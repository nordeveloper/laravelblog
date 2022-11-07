<?php

namespace App\View\Components;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\View\Component;

class bloglist extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $dbRes = Blog::limit(12);

        if( !empty(request()->slug) ){
            $cat = BlogCategory::where('slug','=',request()->slug)->first();
            $dbRes->where('category_id', '=', $cat->id);
        }

        $result = $dbRes->orderBy('id', 'desc')->get();
        return view('components.bloglist', compact('result'));
    }
}
