<?php

namespace FelixL7\LaravelIvw;

class Ivw {

    private $iam_data;
    private $enabled;

    public function __construct(IvwIamData $iam_data)
    {
        $this->iam_data = $iam_data;

        $this->enabled = true;
    }

    public function getIamData() {
        return $this->iam_data;
    }

    public function setIvwIamData(IvwIamData $iam_data) {
        $this->iam_data = $iam_data;

        return $this;
    }

    /**
     * Get the value of enabled
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set the value of enabled
     *
     * @return  self
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function enable() {
        $this->enabled = true;
    }

    public function disable() {
        $this->enabled = false;
    }
}
