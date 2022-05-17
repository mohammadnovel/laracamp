<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class LocationForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', ['attr' => ['class' => 'form-control']])
            ->add('latitude', 'text', ['attr' => ['class' => 'form-control']])
            ->add('longitude', 'text', ['attr' => ['class' => 'form-control']])
            ->add('description', 'textarea', ['attr' => ['class' => 'form-control']])
            ->add('submit', 'submit', ['label' => 'Submit', 'attr' => ['class' => 'btn btn-success']]);
    }
}
