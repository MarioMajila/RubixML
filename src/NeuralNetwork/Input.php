<?php

namespace Rubix\Engine\NeuralNetwork;

class Input extends Neuron
{
    /**
     * The input value.
     *
     * @var float
     */
    protected $value = 0.0;

    /**
     * The output of the neuron.
     *
     * @return float
     */
    public function output() : float
    {
        return $this->value;
    }

    /**
     * Prime the input with a given value.
     *
     * @param  float  $value
     * @return void
     */
    public function prime(float $value) : void
    {
        $this->value = $value;
    }
}