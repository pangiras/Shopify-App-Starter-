<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Status extends Component
{   
    /**
    * Positive Or Nagative.
    *
    * @var string
    */
   public $type;

   /**
    * Title.
    *
    * @var string
    */
   public $title;

   /**
    * Growth Number.
    *
    * @var string
    */
   public $number;

   /**
    * Growth.
    *
    * @var string
    */
   public $growth;

   /**
    * Create the component instance.
    *
    * @param  string  $type
    * @param  string  $title
    * @param  string  $number
    * @param  string  $growth
    * @return void
    */
   public function __construct($type,$title,$number,$growth)
   {
       $this->type = $type;
       $this->title = $title;
       $this->number = $number;
       $this->growth = $growth;
   }

   /**
    * Get the view / contents that represent the component.
    *
    * @return \Illuminate\View\View|string
    */
   public function render()
   {
       return view('components.status');
   }
}
