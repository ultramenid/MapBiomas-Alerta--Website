<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class AboutComponent extends Component
{

     public $contentEN, $contentID;

    public function mount(){
        $data = DB::table('pages')->where('name', 'about')->first();
        if($data){
            $this->contentEN = $data->contentEN;
            $this->contentID = $data->contentID;
        }else{
            $this->contentEN = '';
            $this->contentID = '';
        }
    }

    public function storePage(){
        if($this->manualValidation()){
            DB::table('pages')
            ->updateOrInsert(
                ['name' => 'about'],
                [
                    'contentEN' => $this->contentEN,
                    'contentID' => $this->contentID,
                ]
            );
        //passing to toast
        Toaster::success('Succesfully update page about');
        }
    }

    public function manualValidation(){
        if($this->contentEN == ''){
            Toaster::error('Content english is required');

            return;

        }elseif($this->contentID == ''){
            Toaster::error('Content indonesia is required');
            return;
        }
        return true;
    }
    public function render()
    {
        return view('livewire.about-component');
    }
}
