<?php

namespace Sortarad\Needledrop;

use Statamic\Providers\AddonServiceProvider;
use Sortarad\Needledrop;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
        Needledrop\Tags\NeedleDropTags::class,
    ];

    protected $modifiers = [
        Needledrop\Modifiers\NeedleDropModifier::class,
    ];

    protected $viewNamespace = 'needledrop';
}
