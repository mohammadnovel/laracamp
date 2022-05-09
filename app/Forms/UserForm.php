<?php

namespace App\Forms;

use App\Models\Company;
use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('company_id', 'choice', [
                'choices' => $this->getCompanies(),
                'empty_value' => 'Choose Company',
                'label' => 'Company', 'attr' => ['class' => 'form-control select2']
            ])
            ->add('name', 'text', ['attr' => ['class' => 'form-control']])
            ->add('email', 'text', ['attr' => ['class' => 'form-control']])
            ->add('phone', 'text', ['attr' => ['class' => 'form-control']])
            ->add('address', 'text', ['attr' => ['class' => 'form-control']])
            ->add('password', 'text', ['attr' => ['class' => 'form-control']])
            ->add('type', 'choice', [
                'choices' => $this->getUserType(),
                'label' => 'User Type',
                'empty_value' => 'Choose User Type',
                'attr' => ['class' => 'form-control select2']
            ])
            ->add('submit', 'submit', ['label' => 'Submit', 'attr' => ['class' => 'btn btn-success']]);
    }

    public function getUserType()
    {
        return config('status.type');
    }

    public function getCompanies()
    {
        $companies = Company::get();
        $data = [];
        foreach ($companies as $company) {
            $data[$company->id] = $company->name;
        }
        return $data;
    }
}
