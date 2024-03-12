<?php

namespace Slowlyo\OwlAdminer;

use Illuminate\Support\Facades\Route;
use Slowlyo\OwlAdmin\Renderers\TextControl;
use Slowlyo\OwlAdmin\Extend\ServiceProvider;

class OwlAdminerServiceProvider extends ServiceProvider
{
    protected $menu = [
        [
            'title' => 'Adminer',
            'url'   => '/adminer',
            'icon'  => 'simple-icons:adminer',
        ],
    ];

    public function settingForm()
    {
        return $this->baseSettingForm()->body([
            TextControl::make()->name('value')->label('Value')->required(true),
        ]);
    }
}
