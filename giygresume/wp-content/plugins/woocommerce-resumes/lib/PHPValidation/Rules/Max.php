<?php

namespace PHPValidation\Rules;

/**
 * Makes the element require a given maximum.
 *
 * http://jqueryvalidation.org/max-method/
 *
 * `max`
 */
class Max extends Base
{
    public $message = "Please enter a value less than or equal to {0}.";

    /**
     * Makes the element require a given maximum.
     *
     * @param  mixed $value
     * @param  mixed $options
     *
     * @return boolean
     */
    public function validate($value, $options = null, $field = null)
    {
        return $this->validation->optional($value) || $value <= $options;
    }
}
