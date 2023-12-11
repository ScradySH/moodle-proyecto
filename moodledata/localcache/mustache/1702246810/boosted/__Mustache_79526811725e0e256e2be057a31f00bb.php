<?php

class __Mustache_79526811725e0e256e2be057a31f00bb extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="page-footer" class="container-fluid is-mobile">
';
        $buffer .= $indent . '  <div class="footer-blocks p-2">
';
        $buffer .= $indent . '      <div class="row">
';
        $buffer .= $indent . '        <div class="col-md footer-block-1">
';
        $buffer .= $indent . '            <h3>';
        $value = $this->resolveValue($context->find('footerblocktitle1'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            <p>';
        $value = $this->resolveValue($context->find('footerblockcontent1'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="col-md footer-block-2">
';
        $buffer .= $indent . '            <h3>';
        $value = $this->resolveValue($context->find('footerblocktitle2'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            <p>';
        $value = $this->resolveValue($context->find('footerblockcontent2'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="col-md footer-block-3">
';
        $buffer .= $indent . '            <h3>';
        $value = $this->resolveValue($context->find('footerblocktitle3'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            <p>';
        $value = $this->resolveValue($context->find('footerblockcontent3'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="col-md footer-block-4">
';
        $buffer .= $indent . '            <h3>';
        $value = $this->resolveValue($context->find('footerblocktitle4'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '            <p>';
        $value = $this->resolveValue($context->find('footerblockcontent4'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '     </div>    
';
        $buffer .= $indent . '  </div>   
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="footer-icons row">
';
        $buffer .= $indent . '    <div class="col text-center">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('socialicons'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="footer-footnote row">
';
        $buffer .= $indent . '      <div class="col text-center">
';
        $buffer .= $indent . '          <p>';
        $value = $this->resolveValue($context->find('footernote'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  <div class="footer-content-debugging row">
';
        $buffer .= $indent . '      <div class="col">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  ';
        $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }
}
