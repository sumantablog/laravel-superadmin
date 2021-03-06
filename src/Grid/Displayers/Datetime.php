<?php

namespace Sumantablog\Admin\Grid\Displayers;

use Sumantablog\Admin\Admin;

class Datetime extends AbstractDisplayer
{
    public function display($format = '')
    {
        return Admin::component('admin::grid.inline-edit.datetime', [
            'key'      => $this->getKey(),
            'value'    => $this->getValue(),
            'display'  => $this->getValue(),
            'name'     => $this->getPayloadName(),
            'resource' => $this->getResource(),
            'trigger'  => "ie-trigger-{$this->getClassName()}",
            'target'   => "ie-content-{$this->getClassName()}-{$this->getKey()}",

            'format'   => $format,
            'locale'   => config('app.locale'),
        ]);
    }
}
