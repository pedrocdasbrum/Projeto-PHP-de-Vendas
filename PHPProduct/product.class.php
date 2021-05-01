<?php
  class Product
  {
    private $name;
    private $value;
    private $amount;

    public function Product ()
    {}

    public function getName ()
    {
      return $this->name;
    }

    public function setName ($name)
    {
      return $this->name = $name;
    }

    public function getValue ()
    {
      return $this->value;
    }

    public function setValue ($value)
    {
      return $this->value = $value;
    }

    public function getAmount ()
    {
      return $this->amount;
    }

    public function setAmount ($amount)
    {
      return $this->amount = $amount;
    }

    public function finalValue ()
    {
      return $this->value * $this->amount;
    }

    public function discount ()
    {
      return ($this->finalValue() - ($this->finalValue() * 0.10));
    }

    public function interest ()
    {
      return ($this->finalValue() - ($this->finalValue() * 0.025));
    }
  }
 ?>
