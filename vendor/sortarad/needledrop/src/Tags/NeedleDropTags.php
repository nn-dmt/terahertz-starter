<?php

namespace Sortarad\Needledrop\Tags;

use Statamic\Tags\Tags;

class NeedleDropTags extends Tags
{
    protected static $handle = 'needledrop';

    /**
     * The {{ needledrop:assets }} tag.
     *
     * @return string|array
     */
    public function assets()
    {
        return view('needledrop::assets');
    }
}
