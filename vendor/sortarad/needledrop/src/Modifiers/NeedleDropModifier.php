<?php

namespace Sortarad\Needledrop\Modifiers;

use Statamic\Modifiers\Modifier;

class NeedleDropModifier extends Modifier
{
    protected static $handle = 'needledrop';

    /**
     * Modify a value.
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        $sound = collect($value)->filter(function($item) {
            return $item->isAudio();
        })->map(function($item) {
            return $item->url();
        })->values()->first();

        if (! $sound) {
            return null;
        }

        return sprintf( 'data-needledrop="%s"', $sound );
    }
}
