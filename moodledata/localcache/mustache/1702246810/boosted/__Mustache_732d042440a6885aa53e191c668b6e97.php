<?php

class __Mustache_732d042440a6885aa53e191c668b6e97 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div class="core_contentbank_viewcontent">
';
        if ($partial = $this->mustache->loadPartial('core_contentbank/viewcontent/toolbarview')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '    <div class="mt-1 mb-1" data-region="viewcontent-content">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('contenthtml'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
