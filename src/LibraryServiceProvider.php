<?php

namespace Nfgarching\Componets;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

use Livewire\Livewire;


class LibraryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();

        $this->bootComponents();

        // Livewire::component('counter', \Nfgarching\Componets\Livewire\Counter::class);

        $this->loadRoutesFrom(__DIR__ . '/Web.php');

        $this->loadViewsFrom(__DIR__ . '/Views', 'bootstrap');
        $this->publishes([
            __DIR__ . '/Views' => resource_path('views/vendor/bootstrap'),
        ]);
    // $this->publishes([
    //     __DIR__ . '/../app' => app_path('View/Components'),
    // ]);
    // $this->publishes([
    //     __DIR__ . '/../routes' => base_path('routes'),
    // ]);
        $this->publishes([
            __DIR__ . '/../views' => resource_path('views'),
        ]);
    }

    private function bootComponents()
    {
        /*  Laravel Blade Components

            https://laravel.com/docs/11.x/packages#view-components
            https://github.com/dcblogdev/laravel-blade-components
            
        */
        $this->loadViewsFrom(__DIR__ . '/Components', 'bootstrapComponents');
        // $this->publishes([
        //     __DIR__.'/Components' => resource_path('views/vendor/components'),
        // ], 'bootstrapComponents');

        Blade::component('bootstrapComponents::layouts.app', 'app-layout');
        Blade::component('bootstrapComponents::layouts.app', 'layouts.app');
        Blade::component('bootstrapComponents::layouts.app', 'layouts.test');

        Blade::component('bootstrapComponents::button.wire.index',          'button');
        Blade::component('bootstrapComponents::button.html.cancel',         'button.cancel');
        Blade::component('bootstrapComponents::button.wire.index',          'button.click');
        Blade::component('bootstrapComponents::button.dispatch',            'button.dispatch');
        Blade::component('bootstrapComponents::button.group',               'button.group');
        Blade::component('bootstrapComponents::button.html.link',           'button.link');
        Blade::component('bootstrapComponents::button.html.cancel',         'cancel');
        Blade::component('bootstrapComponents::button.html.link',           'link');
        Blade::component('bootstrapComponents::button.html.submit',         'submit');

        Blade::component('bootstrapComponents::card.index',                 'card');

        Blade::component('bootstrapComponents::counter',                    'counter');

        Blade::component('bootstrapComponents::dropdown.index',             'dropdown');
        Blade::component('bootstrapComponents::dropdown.click',             'dropdown.click');
        Blade::component('bootstrapComponents::dropdown.link',              'dropdown.link');
        Blade::component('bootstrapComponents::dropdown.list',              'dropdown.list');
        Blade::component('bootstrapComponents::dropdown.sort',              'dropdown.sort');

        Blade::component('bootstrapComponents::field.desc.index',           'desc');
        Blade::component('bootstrapComponents::field.desc.group',           'desc.group');
        Blade::component('bootstrapComponents::field.desc.list',            'desc.list');

        Blade::component('bootstrapComponents::field.html.default.input',   'field');
        Blade::component('bootstrapComponents::field.html.default.input',   'field.input');
        Blade::component('bootstrapComponents::field.html.default.label',   'field.label');
        Blade::component('bootstrapComponents::field.html.default.group',   'field.group');
        Blade::component('bootstrapComponents::field.html.default.select',  'field.select');
        Blade::component('bootstrapComponents::field.html.default.text',    'field.text');

        Blade::component('bootstrapComponents::field.wire.default.input',   'slim');
        Blade::component('bootstrapComponents::field.wire.default.input',   'slim.input');
        Blade::component('bootstrapComponents::field.wire.default.select',  'slim.select');
        Blade::component('bootstrapComponents::field.wire.default.text',    'slim.text');

        Blade::component('bootstrapComponents::field.wire.float.input',     'wire');
        Blade::component('bootstrapComponents::field.wire.float.input',     'wire.input');
        Blade::component('bootstrapComponents::field.wire.float.select',    'wire.select');
        Blade::component('bootstrapComponents::field.wire.float.text',      'wire.text');

        Blade::component('bootstrapComponents::file.info', 'file.info');

        Blade::component('bootstrapComponents::form.index',                 'form');
        Blade::component('bootstrapComponents::field.html.float.input',     'form.input');
        Blade::component('bootstrapComponents::field.html.float.input',     'input');
        Blade::component('bootstrapComponents::field.html.float.group',     'form.group');
        Blade::component('bootstrapComponents::field.html.float.label',     'form.label');
        Blade::component('bootstrapComponents::field.html.float.text',      'form.text');
        Blade::component('bootstrapComponents::field.html.float.text',      'text');
        // Blade::component('bootstrapComponents::field.checkbox',          'form.checkbox');
        // Blade::component('bootstrapComponents::field.radio',             'form.radio');
        Blade::component('bootstrapComponents::field.html.float.select',    'form.select');
        Blade::component('bootstrapComponents::field.html.float.select',    'select');
        Blade::component('bootstrapComponents::button.html.cancel',         'form.cancel');
        Blade::component('bootstrapComponents::button.html.submit',         'form.submit');

        Blade::component('bootstrapComponents::modal.index',                'modal');
        Blade::component('bootstrapComponents::modal.button',               'modal.button');
        Blade::component('bootstrapComponents::modal.save',                 'modal.save');

        Blade::component('bootstrapComponents::nav.index',                  'nav');
        Blade::component('bootstrapComponents::nav.link',                   'nav.link');
        Blade::component('bootstrapComponents::nav.tabs',                   'nav.tabs');

        Blade::component('bootstrapComponents::sidebar.index',              'sidebar');
        Blade::component('bootstrapComponents::sidebar.link',               'sidebar.link');

        Blade::component('bootstrapComponents::table.index',                'table');
        Blade::component('bootstrapComponents::table.cell',                 'table.cell');
        Blade::component('bootstrapComponents::table.check',                'table.check');
        Blade::component('bootstrapComponents::table.toggle',               'table.toggle');
        Blade::component('bootstrapComponents::table.filter.index',         'table.filter');
        Blade::component('bootstrapComponents::table.filter.dropdown',      'table.filter.dropdown');
        Blade::component('bootstrapComponents::table.filter.search',        'table.filter.search');
        Blade::component('bootstrapComponents::table.filter.select',        'table.filter.select');
        Blade::component('bootstrapComponents::table.head.sort',            'table.head.sort');
        Blade::component('bootstrapComponents::table.head.toggle',          'table.head.toggle');
        Blade::component('bootstrapComponents::table.row.index',            'table.row');
        Blade::component('bootstrapComponents::table.row.line1',            'table.row.line1');
        Blade::component('bootstrapComponents::table.row.line2',            'table.row.line2');

    }

}
