<?php

namespace App\Http\Livewire;
use App\Models\State;
use Livewire\Component;


class StateList extends Component
{
public $states;
    public function mount(){
        $this->states = State::all();
    }

    public function render()
    {
        return <<<'blade'
            <div>
                {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
                <div class="container">
                    <div class="row">
                        <div class="dropdown">

                            <button type="button" class="btn btn-outline-secondary bg-light float-end dropdown-toggle" data-bs-toggle="dropdown" data-bs-target="">Browse news</button>

                            <div class="dropdown-menu">
                            @foreach ($states as $item)
                                <a href="" class="dropdown-item">{{$item->state_title}}
                                @livewire('city-list')
                                </a>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        blade;
    }
}
