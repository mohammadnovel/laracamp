<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class VendorForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('nik', 'numeric', ['attr' => ['class' => 'form-control']])
            ->add('description', 'textarea', ['label' => 'Description', 'attr' => ['placeholder' => 'Description', 'rows'=>10, 'class' => 'textarea-edit']])
            ->add('file', 'text', ['template' => 'layouts.form.dropify', 'label' => 'Image', 'attr' => ['data-allowed-file-extensions' => 'jpg jpeg png']])

            // ->add('type', 'choice', [
            //     'choices' => $this->getDiscount(),
            //     'label' => 'Payment Type',
            //     'empty_value' => 'Choose Payment Type',
            //     'attr' => ['class' => 'form-control select2']
            // ])
            ->add('submit', 'submit', ['label' => 'Submit', 'attr' => ['class' => 'btn btn-success']]);
    }

}
