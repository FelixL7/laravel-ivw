<?php

namespace FelixL7\LaravelIvw;

class IvwIamData {
    private $st;
    private $cp;
    private $sv;
    private $co;

    public function __construct($st, $cp, $sv, $co)
    {
        $this->st = $st;
        $this->cp = $cp;
        $this->sv = $sv;
        $this->co = $co;
    }

    public function getIamDataJson() {
        return json_encode(array(
            'st' => $this->st,
            'cp' => $this->cp,
            'sv' => $this->sv,
            'co' => $this->co
        ));
    }

    /**
     * Get the value of st
     */
    public function getSt()
    {
        return $this->st;
    }

    /**
     * Set the value of st
     *
     * @return  self
     */
    public function setSt($st)
    {
        $this->st = $st;

        return $this;
    }

    /**
     * Get the value of cp
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set the value of cp
     *
     * @return  self
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get the value of sv
     */
    public function getSv()
    {
        return $this->sv;
    }

    /**
     * Set the value of sv
     *
     * @return  self
     */
    public function setSv($sv)
    {
        $this->sv = $sv;

        return $this;
    }

    /**
     * Get the value of co
     */
    public function getCo()
    {
        return $this->co;
    }

    /**
     * Set the value of co
     *
     * @return  self
     */
    public function setCo($co)
    {
        $this->co = $co;

        return $this;
    }
}
