<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class GalleryForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('image', 'text', ['template' => 'layouts.form.dropify', 'label' => 'Image', 'attr' => ['data-allowed-file-extensions' => 'jpg jpeg png']])
            ->add('description', 'textarea', ['label' => 'Description', 'attr' => ['rows'=>10, 'class' => 'textarea-edit']])
            ->add('submit', 'submit', ['label' => 'Submit', 'attr' => ['class' => 'btn btn-success']]);
    }
}
