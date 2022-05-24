<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class PaymentMethodForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', ['attr' => ['class' => 'form-control']])
            ->add('slug', 'text', ['attr' => ['class' => 'form-control']])
            ->add('description', 'textarea', ['attr' => ['class' => 'form-control']])
            ->add('submit', 'submit', ['label' => 'Submit', 'attr' => ['class' => 'btn btn-success']]);
    }
}
