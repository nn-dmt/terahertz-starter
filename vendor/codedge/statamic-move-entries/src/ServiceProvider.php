<?php

declare(strict_types=1);

namespace Codedge\MoveEntries;

use Codedge\MoveEntries\Actions\MoveEntriesToCollection;
use Statamic\Providers\AddonServiceProvider;

final class ServiceProvider extends AddonServiceProvider
{
    protected $actions = [
        MoveEntriesToCollection::class
    ];

    public function boot()
    {
        parent::boot();

        $this->loadTranslationsFrom( __DIR__ . '/../resources/lang', 'move-entries' );
    }
}
