<?php

namespace App\Http\Livewire;
use App\Models\City;
use Livewire\Component;

class CityList extends Component
{
    public $cities;
    public function mount(){
        $this->cities = City::all();
    }
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- The whole world belongs to you. --}}
                <div class="container">
                    <div class="row">
                        <div class="dropdown">

                            <button type="button" class="btn btn-outline-secondary bg-light float-end dropdown-toggle" data-bs-toggle="dropdown" data-bs-target=""></button>

                            <div class="dropdown-menu">
                                @foreach ($cities as $c)
                                    <a href="" class="dropdown-item">{{$c->city_title}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        blade;
    }
}
