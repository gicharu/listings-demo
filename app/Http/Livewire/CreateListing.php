<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateListing extends Component
{
    public $name;
    public $description;
    public $address;
    public $bedrooms;
    public $baths;
    public $price;
    public $rating;
    public $listing_type;
    public $listing_status;

    public function submit()
    {
        $validatedData = $this->validate();
    }

        public function render()
    {
        return view('livewire.create-listing');
    }
}
