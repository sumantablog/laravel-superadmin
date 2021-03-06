<?php

namespace Sumantablog\Admin\Grid\Displayers;

use Sumantablog\Admin\Admin;

class Textarea extends AbstractDisplayer
{
    public function display($rows = 5)
    {
        return Admin::component('admin::grid.inline-edit.textarea', [
            'key'      => $this->getKey(),
            'value'    => $this->getValue(),
            'display'  => $this->getValue(),
            'name'     => $this->getPayloadName(),
            'resource' => $this->getResource(),
            'trigger'  => "ie-trigger-{$this->getClassName()}",
            'target'   => "ie-content-{$this->getClassName()}-{$this->getKey()}",
            'rows'     => $rows,
        ]);
    }
}
