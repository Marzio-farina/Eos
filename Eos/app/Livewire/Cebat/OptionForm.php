<?php

namespace App\Livewire\Cebat;

use Livewire\Component;
use App\Models\Operator;
use Livewire\Attributes\On;

class OptionForm extends Component
{
    public $operatoreSelezionato;
    public $fileSelezionato;
    public $showForm = false;
    public $campi = [];

    public function render(){
        return view('livewire.cebat.option-form');
    }

    #[On('OperatoreSelezionato')]
    public function operatoreSelezionato($operatoreSelezionato){
        $this->operatoreSelezionato = $operatoreSelezionato;
    }

    #[On('optionFormSelected')]
    public function fileSelezionato($fileSelezionato){
        $this->fileSelezionato = $fileSelezionato;
        $this->dispatch('formfileOperatore');
    }
    
    #[On('formfileOperatore')]
    public function showForm(){   
        $this->showForm = true;
        $operator = Operator::find($this->operatoreSelezionato);      
        switch ($this->fileSelezionato) {
            case "unilav_id":
                $this->campi = [
                    ['label' => 'Tipologia', 'value' => $operator->unilav?->tipologia ?? ''],
                    ['label' => 'Scadenza', 'value' => $operator->unilav?->scadenza ?? '']
                ];
                break;
            case "mansione_lavorators_id":                
                $this->campi = [
                    ['label' => 'Tipologia', 'value' => $operator->mansione?->tipologia ?? '']
                ];
                break;
            case "idoneitàSanitaria":
                $this->campi = [
                    ['label' => 'Scadenza', 'value' => $operator->idoneitàSanitaria ?? '']
                ];
                break;
            case "formazioneBase":
                $this->campi = [
                    ['label' => 'Scadenza', 'value' => $operator->formazioneBase ?? '']
                ];
                break;
            case "informazione":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->informazione ?? '']
                ];
                break;
            case "nominaRls":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->nominaRls ?? '']
                ];
                break;
            case "formazioneRls":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneRls ?? '']
                ];
                break;
            case "nominaRspp":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->nominaRspp ?? '']
                ];
                break;
            case "inailRls":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->inailRls ?? '']
                ];
                break;
            case "nominaPreposto":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->nominaPreposto ?? '']
                ];
                break;
            case "formazionePreposto":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazionePreposto ?? '']
                ];
                break;
            case "nominaAntincendio":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->nominaAntincendio ?? '']
                ];
                break;
            case "formazioneAntincendio":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneAntincendio ?? '']
                ];
                break;
            case "nominaPrimoSoccorso":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->nominaPrimoSoccorso ?? '']
                ];
                break;
            case "formazionePrimoSoccorso":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazionePrimoSoccorso ?? '']
                ];
                break;
            case "formazioneEscavatorista":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneEscavatorista ?? '']
                ];
                break;
            case "formazioneGruista":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneGruista ?? '']
                ];
                break;
            case "formazionePes":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazionePes ?? '']
                ];
                break;
            case "nominaPes":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->nominaPes ?? '']
                ];
                break;
            case "formazioneDPI3CAT":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneDPI3CAT ?? '']
                ];
                break;
            case "formazionePonteggiatore":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazionePonteggiatore ?? '']
                ];
                break;
            case "formazioneGas":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneGas ?? '']
                ];
                break;
            case "formazioneAsic":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneAsic ?? '']
                ];
                break;
            case "nominaAsic":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->nominaAsic ?? '']
                ];
                break;
            case "formazioneSegnaleticaLavoratore":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneSegnaleticaLavoratore ?? '']
                ];
                break;
            case "formazioneSegnaleticaPreposto":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneSegnaleticaPreposto ?? '']
                ];
                break;
            case "tesserino":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->tesserino ?? '']
                ];
                break;
            case "verbaleDPI":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->verbaleDPI ?? '']
                ];
                break;
            case "formazioneTrattorista":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneTrattorista ?? '']
                ];
                break;
            case "formazionePle":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazionePle ?? '']
                ];
                break;
            case "formazioneCarrellista":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneCarrellista ?? '']
                ];
                break;
            case "formazionePav":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazionePav ?? '']
                ];
                break;
            case "nominaPei":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->nominaPei ?? '']
                ];
                break;
            case "formazionePei":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazionePei ?? '']
                ];
                break;
            case "formazioneProfiloC":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneProfiloC ?? '']
                ];
                break;
            case "formazioneProfiloD":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneProfiloD ?? '']
                ];
                break;
            case "formazioneProfiloE":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneProfiloE ?? '']
                ];
                break;
            case "formazioneProfiloF":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneProfiloF ?? '']
                ];
                break;
            case "formazioneProfiloG":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneProfiloG ?? '']
                ];
                break;
            case "formazioneProfiloX":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneProfiloX ?? '']
                ];
                break;
            case "formazioneProfiloY":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneProfiloY ?? '']
                ];
                break;
            case "formazioneProfiloZ":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->formazioneProfiloZ ?? '']
                ];
                break;
            case "documentoDiRiconoscimento":
                $this->campi = [
                    ['label' => 'Presenza', 'value' => $operator->documentoDiRiconoscimento ?? '']
                ];
                break;
            default:
                $this->showForm = false;
                $this->campi = [];
                break;
        }
    }

    // public function store(){
    //     Operator::create([
    //         'nome' => $this->nome,
    //         'cognome' => $this->cognome,
    //     ]);
    //     $this->resetForm();
    // }

    // public function update(){
    //     $operator = Operator::find($this->selectedOption);
    //     if ($operator) {
    //         $operator->update([
    //             'nome' => $this->nome,
    //             'cognome' => $this->cognome,
    //         ]);
    //         $this->resetForm();
    //     }
    // }

    public function resetForm()
    {
        $this->showForm = false;
        $this->campi = [];
    }
}

