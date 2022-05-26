<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class DiscountForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', ['attr' => ['class' => 'form-control']])
            ->add('code', 'text', ['attr' => ['class' => 'form-control']])
            ->add('description', 'textarea', ['attr' => ['class' => 'form-control']])
            ->add('type', 'choice', [
                'choices' => $this->getDiscount(),
                'label' => 'Payment Type',
                'empty_value' => 'Choose Payment Type',
                'attr' => ['class' => 'form-control select2']
            ])
            ->add('submit', 'submit', ['label' => 'Submit', 'attr' => ['class' => 'btn btn-success']]);
    }

    public function getDiscount()
    {
        return config('status.payment_method');
    }
}
