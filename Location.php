<?php

namespace Modules\Location;

class Location
{
    private $locate;

    public function __construct($locale = 'en')
    {
        $this->locate = $locale;
    }

    public function getLocation()
    {
        return $this->locate;
    }
}
