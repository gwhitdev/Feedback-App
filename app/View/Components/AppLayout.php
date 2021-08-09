<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Image;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public $myimages;
    public $text;
    
    public function __construct()
    {
        $this->myimages = $this->getImages();
        $this->text = 'Test';
    }
    public function getImages()
    {
        return Image::all();
    }
    public function render()
    {
        return view('layouts.app',['text'=>$this->text,'myimages'=>$this->myimages]);   
    }
}
