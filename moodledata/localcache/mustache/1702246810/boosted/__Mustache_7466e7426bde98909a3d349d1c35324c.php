<?php

class __Mustache_7466e7426bde98909a3d349d1c35324c extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<span class="d-none" data-region="groupid" data-groupid="';
        $value = $this->resolveValue($context->find('group'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-hidden="true"></span>
';
        $buffer .= $indent . '<div class="align-items-center d-flex">
';
        $buffer .= $indent . '    <div class="d-block pr-3 text-truncate">
';
        $buffer .= $indent . '        <span class="d-block small">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('label'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '        <span class="p-0 font-weight-bold">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('selectedgroup'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '
';
        $buffer .= $indent . '        </span>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
