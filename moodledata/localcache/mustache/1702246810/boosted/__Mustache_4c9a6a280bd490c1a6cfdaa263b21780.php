<?php

class __Mustache_4c9a6a280bd490c1a6cfdaa263b21780 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<h3 class="w-100">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('description'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</h3>
';

        return $buffer;
    }
}
