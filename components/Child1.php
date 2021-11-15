<?php

namespace Test\Helloworld\Components;

use System\Classes\BaseComponent;

use Test\Helloworld\Models\Child1 as Child1Model;

class Child1 extends BaseComponent
{
    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        // dd($this);
        $this->page['name'] = $this->name;
        $this->page['hwChild1All'] = $this->loadHwChild1All();
    }

    protected function loadHwChild1All()
    {
        return Child1Model::getAll();
    }
}
