<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Form;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
                Form::component('bsText', 'components.form.text', ['name', 'value'=>null, 'attributes']);
                Form::component('bsTextArea', 'components.form.textarea', ['name', 'value'=>null, 'attributes']);
                Form::component('bsBtn', 'components.form.submit', ['name', 'value', 'attributes']);
                Form::component('hidden', 'components.form.hidden', ['name', 'value'=>null, 'attributes']);
                    
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
