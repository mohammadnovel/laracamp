<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Models\Location;
use App\Models\TourCategory;

class TourForm extends Form
{
    public function buildForm()
    {
        $this
            
            ->add('title', 'text', ['attr' => ['class' => 'form-control']])
            ->add('description', 'textarea', ['label' => 'Description', 'attr' => ['placeholder' => 'Description', 'rows'=>10, 'class' => 'textarea-edit']])
            ->add('address', 'text', ['attr' => ['class' => 'form-control'], 'rules' => 'required'])
            ->add('location_id', 'choice', [
                'choices' => $this->getLocation(),
                'label' => 'Location',
                'empty_value' => 'Pilih Lokasi',
                'attr' => ['class' => 'form-control select2', 'data-type' => 'sender']
            ])
            ->add('category_id', 'choice', [
                'choices' => $this->getCategory(),
                'label' => 'Tour Category',
                'empty_value' => 'Pilih Kategori',
                'attr' => ['class' => 'form-control select2', 'data-type' => 'sender']
            ])
            ->add('price', 'number', ['attr' => ['class' => 'form-control'], 'label' => 'Harga Tour'])
            ->add('video', 'text', ['attr' => ['class' => 'form-control'], 'label' => 'Youtube URL'])
            ->add('submit', 'submit', ['label' => 'Submit', 'attr' => ['class' => 'btn btn-success']]);
    }

    public function getLocation()
    {
        $locations = Location::get();
        $data = [];
        foreach ($locations as $key => $value) {
            $data[$value->id] = $value->name;
        }
        return $data;
    }

    public function getCategory()
    {
        $categories = TourCategory::get();
        $data = [];
        foreach ($categories as $key => $value) {
            $data[$value->id] = $value->name;
        }
        return $data;
    }
}
