<?php

namespace Medlib\MarcXML;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Medlib\MarcXML
 */
class MarcXML extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'marcxml'; }
}