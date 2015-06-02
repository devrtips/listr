<?php

namespace Devrtips\Listr\Builder\FilterOption;

use Devrtips\Listr\Builder\Html\Textbox;

class StringContains extends AbstractFilterOption
{

    protected function initInputs()
    {
        $input = new Textbox('text', $this->entity, $this->filter, $this->parameters);

        return [$input];
    }

}
