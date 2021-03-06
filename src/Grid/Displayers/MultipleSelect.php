<?php

namespace Sumantablog\Admin\Grid\Displayers;

use Sumantablog\Admin\Admin;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Arr;

class MultipleSelect extends AbstractDisplayer
{
    public function display($options = [])
    {
        return Admin::component('admin::grid.inline-edit.multiple-select', [
            'key'      => $this->getKey(),
            'name'     => $this->getPayloadName(),
            'value'    => json_encode($this->getValue()),
            'resource' => $this->getResource(),
            'trigger'  => "ie-trigger-{$this->getClassName()}",
            'target'   => "ie-content-{$this->getClassName()}-{$this->getKey()}",
            'display'  => implode(';', Arr::only($options, $this->getValue())),
            'options'  => $options,
        ]);
    }
}
