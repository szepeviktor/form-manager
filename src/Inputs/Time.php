<?php
declare(strict_types = 1);

namespace FormManager\Inputs;

/**
 * Class representing a HTML input[type="time"] element
 */
class Time extends Input
{
    const INTR_VALIDATORS = [
        'time',
    ];

    const ATTR_VALIDATORS = [
        // 'step',
        'max',
        'min',
    ];
    
    public function __construct(string $label = null, iterable $attributes = [])
    {
        parent::__construct('input', $attributes);
        $this->setAttribute('type', 'time');

        if (isset($label)) {
            $this->setLabel($label);
        }
    }
}