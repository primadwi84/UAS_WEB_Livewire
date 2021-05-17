<?php

namespace App\Http\Livewire;
use App\Models\Place;
use Livewire\Component;


class Places extends Component
{
    public $places, $Desa, $Kabupaten, $Provinsi, $Sehat, $Sakit, $Dirawat, $Sembuh, $Zona, $place_id;
    public $isModal;

    public function render()
    {
        $this->places = Place::orderBy('created_at','DESC')->get();
        return view('livewire.places');
    }

    public function create()
    {
        $this->resetFields();
        $this->openModal();
    }

    public function resetFields()
    {
        $this->Desa='';
        $this->Kabupaten='';
        $this->Provinsi='';
        $this->Sehat='';
        $this->Sakit='';
        $this->Dirawat='';
        $this->Sembuh='';
        $this->Zona='';
        $this->place_id='';
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function closeModal()
    {
        $this->isModal = false;
    }
    
    public function store()
    {
        $this->validate([
            'Desa' => 'required|string',
            'Kabupaten' => 'required|string',
            'Provinsi' => 'required|string',
            'Sehat' => 'required|integer',
            'Sakit' => 'required|integer',
            'Dirawat' => 'required|integer',
            'Sembuh' => 'required|integer',
            'Zona' => 'required|string'
        ]);

        Place::updateOrCreate(
            ['id' => $this->place_id], 
            [
             'Desa'=>$this->Desa,
             'Kabupaten'=>$this->Kabupaten,
             'Provinsi'=>$this->Provinsi,
             'Sehat'=>$this->Sehat,
             'Sakit'=> $this->Sakit,
             'Dirawat'=> $this->Dirawat,
             'Sembuh'=> $this->Sembuh,
             'Zona'=> $this->Zona,

            ]
            );

            session()->flash('message', $this->place_id ? $this-> Desa .' Ditambahkan':$this->Desa . 'Dirubah');
            $this -> resetFields();
            $this -> closeModal();
    }

    public function edit($id)
    {
        $place = Place::find($id);
        $this->place_id = $id;
        $this->Desa =$place->Desa;
        $this->Kabupaten =$place->Kabupaten;
        $this->Provinsi =$place->Provinsi;
        $this->Sehat =$place->Sehat;
        $this->Sakit=$place->Sakit;
        $this->Dirawat=$place->Dirawat;
        $this->Sembuh=$place->Sembuh;
        $this->Zona=$place->Zona;

        $this->openModal();

    }

    public function delete($id)
    {
        $place = Place::find($id);
        $place-> delete();
      session()->flash('message', $place->Desa . ' Dihapus');

    }
}
