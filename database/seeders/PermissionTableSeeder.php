<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $permissions = [
            'role.view',
            'role.create',
            'role.update',
            'role.delete',
            'permission.view',
            'permission.create',
            'permission.update',
            'permission.delete',
            'user.view',
            'user.create',
            'user.update',
            'user.delete',
            'article.view',
            'article.create',
            'article.update',
            'article.delete',
            'location.view',
            'location.create',
            'location.update',
            'location.delete',
            'tour.view',
            'tour.create',
            'tour.update',
            'tour.delete',
            'tour-category.view',
            'tour-category.create',
            'tour-category.update',
            'tour-category.delete',
            'tour-image.view',
            'tour-image.create',
            'tour-image.update',
            'tour-image.delete',
            'vendor-request.view',
            'vendor-request.create',
            'vendor-request.update',
            'vendor-request.delete',
            'payment-method.view',
            'payment-method.create',
            'payment-method.update',
            'payment-method.delete',
            'checkout.view',
            'checkout.create',
            'checkout.update',
            'checkout.delete'
         ];
      
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
