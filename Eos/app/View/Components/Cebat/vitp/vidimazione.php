<?php

namespace App\View\Components\Cebat\vitp;

use Closure;
use App\Models\Unilav;
use App\Models\Operator;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class vidimazione extends Component
{
    public $Operatori;
    public $Unilavs;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->Operatori = Operator::all();
        $this->Unilavs = Unilav::all();
        return view('components.cebat.vitp.vidimazione', compact('Unilavs','Operatori'));
    }

    
}
