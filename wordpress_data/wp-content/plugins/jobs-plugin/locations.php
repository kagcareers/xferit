<?php
class Location {

    private $shorthand;
    private $name;

    function __construct($shorthand, $name)
    {
        $this->shorthand = $shorthand;
        $this->name = $name;
    }

    function shorthand()
    {
        return $this->shorthand;
    }

    function name()
    {
        return $this->name;
    }
}

// At time of writing this list can be added to or removed from at will.
// If a dealership is removed, Existing job postings for that location will remain and must be removed separately.
function all_locations()
{
    return [
        new Location('KAG', 'Kaizen Automotive Group'),
      new Location('CMP', 'CMP Automotive'),
      new Location('SHAW', 'Shaw GMC'),
      new Location('SF', 'Strathmore Ford'),
      new Location('CHH', 'Country Hills Hyundai'),
      new Location('CHN', 'Country Hills Nissan'),
      new Location('UFL', 'Universal Ford Fleet'),
      new Location('OGM', 'Okotoks GM'),
      new Location('SGM', 'Summit GM'),
      new Location('GNC', 'Genesis North Calgary'),
      new Location('SASC', 'Sunridge Automotive'),

      new Location('WGM', 'Woodbine GM'),
      new Location('SFL', 'Summit Fleet'),

      new Location('CVK', 'Chula Vista Kia'),
      new Location('CVF', 'Chula Vista Ford'),
      new Location('CVH', 'Chula Vista Honda'),
      new Location('IVGM', 'Imperial Valley GM'),
      new Location('IVHO', 'Imperial Valley Honday'),
      new Location('IVHY', 'Imperial Valley Hyundai'),

      new Location('STU', 'Summit Trucks Utah'),
    ];
}