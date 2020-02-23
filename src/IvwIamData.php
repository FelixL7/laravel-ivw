<?php

namespace FelixL7\LaravelIvw;

class IvwIamData {
    private $st;
    private $cp;
    private $sv;
    private $co;
    private $ps;
    private $sc;

    private $test_mode;

    public function __construct()
    {
        $this->st = config('ivw.st');
        $this->cp = config('ivw.cp');
        $this->sv = config('ivw.sv');
        $this->co = config('ivw.co');

        if(config('ivw.test_mode')) {
            $this->testModeOn();
        } else {
            $this->testModeOff();
        }

        if(config('ivw.use_ps')) {
            $this->setPs(config('ivw.ps'));
        }

        if(config('ivw.use_sc')) {
            $this->setSc(config('ivw.sc'));
        }
    }

    public function getIamDataJson() {
        $data = array('st' => $this->st);

        if($this->test_mode) {
            $data = array_merge($data, array('xp' => $this->cp));
        } else {
            $data = array_merge($data, array('cp' => $this->cp));
        }

        $data = array_merge($data, array(
            'sv' => $this->sv,
            'co' => $this->co
        ));

        if(!is_null($this->ps)) {
            $data = array_merge($data, array('ps' => $this->ps));
        }

        if(!is_null($this->sc)) {
            $data = array_merge($data, array('sc' => $this->sc));
        }

        return $data;
    }

    public function testModeOn() {
        $this->test_mode = true;
    }

    public function testModeOff() {
        $this->test_mode = false;
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

    /**
     * Get the value of ps
     */
    public function getPs()
    {
        return $this->ps;
    }

    /**
     * Set the value of ps
     *
     * @return  self
     */
    public function setPs($ps)
    {
        $this->ps = $ps;

        return $this;
    }

    /**
     * Get the value of sc
     */
    public function getSc()
    {
        return $this->sc;
    }

    /**
     * Set the value of sc
     *
     * @return  self
     */
    public function setSc($sc)
    {
        $this->sc = $sc;

        return $this;
    }
}
