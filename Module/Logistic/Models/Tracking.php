<?php

namespace Logistic\Models;

class Tracking
{
    protected $number;

    protected $detail = [];

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return array
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param array $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }
}
