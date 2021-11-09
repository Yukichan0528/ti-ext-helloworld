<?php

namespace Test\Helloworld\Components;

use System\Classes\BaseComponent;

class Child1 extends BaseComponent
{
    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        // dd($this);
        $this->page['name'] = $this->name;
    }
}
