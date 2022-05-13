<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ArticleForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', ['attr' => ['class' => 'form-control']])
            ->add('short_description', 'text', ['attr' => ['class' => 'form-control']])
            ->add('description', 'textarea', ['label' => 'Description', 'attr' => ['placeholder' => 'Description', 'rows'=>10, 'class' => 'textarea-edit']])
            ->add('image', 'text', ['template' => 'layouts.form.dropify', 'label' => 'Image', 'attr' => ['data-allowed-file-extensions' => 'jpg jpeg png']])
            ->add('thumbnail', 'text', ['template' => 'layouts.form.dropify', 'label' => 'Thumbnail', 'attr' => ['data-allowed-file-extensions' => 'jpg jpeg png']])
            ->add('publish_at', 'text', ['template' => 'layouts.form.datetime-picker', 'label' => 'Publish Date'])
            ->add('submit', 'submit', ['label' => 'Submit', 'attr' => ['class' => 'btn btn-success']]);
    }
}
