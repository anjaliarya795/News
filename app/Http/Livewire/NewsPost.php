<?php

namespace App\Http\Livewire;
use App\Models\News;
use Livewire\Component;

class NewsPost extends Component
{
    public $news;
    public function mount(){
        $this->news = News::all();
    }
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- Because she competes with no one, no one can compete with her. --}}
                <div class="container">
                    <div class="row">
                        <div class="card">
                            <div class="col-4">
                                <img src="" alt="" class="card-img" style="object-fit:contain;height:200px">
                            </div>
                            <div class="col-8 card-body">
                            @foreach($news as $n)
                                <h3 class="fw-bold d-inline">{{$n->news_title}}</h3>
                                    <span class="float-end small h6">{{date("j F Y",strtotime($n->created_at))}} at {{ date("H:i:s",strtotime($n->created_at))}}</span>
                                    <h6>By {{$n->author}}</h6>
                                    <p class="fw-bold">{{substr($n->news,0,50)}}.......</p>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        blade;
    }
}
