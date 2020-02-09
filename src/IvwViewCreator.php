<?php

namespace FelixL7\LaravelIvw;

use Illuminate\View\View;

class IvwViewCreator {
    protected $ivw;

    public function __construct(Ivw $ivw)
    {
        $this->ivw = $ivw;
    }

    public function create(View $view) {
        $view->with('iam_data', $this->ivw->getIamData()->getIamDataJson())
            ->with('enabled', $this->ivw->isEnabled());
    }
}
