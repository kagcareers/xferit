<?php
class Department {

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

function all_departments()
{
    return [
        new Department('SAL', 'Sales'),
        new Department('SRV', 'Vehicle Service'),
        new Department('SUP', 'Support Staff'),
        new Department('ACC', 'Accounting'),
        new Department('MAN', 'Management'),
        new Department('EXE', 'Executive'),
    ];
}