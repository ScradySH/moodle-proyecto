<?php

class __Mustache_d450713a27fd37924dec8ae67278a780 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<table class="table table-striped">
';
        $buffer .= $indent . '  <thead>
';
        $buffer .= $indent . '    <tr>
';
        $buffer .= $indent . '        <th scope="col">';
        $value = $this->resolveValue($context->find('optionslabel'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</th>
';
        $buffer .= $indent . '        <th scope="col">';
        $value = $this->resolveValue($context->find('correctlabel'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</th>
';
        $buffer .= $indent . '        <th scope="col">';
        $value = $this->resolveValue($context->find('answerlabel'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</th>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '  </thead>
';
        $buffer .= $indent . '  <tbody>
';
        $value = $context->find('options');
        $buffer .= $this->section1471f4afdb61bc5462b350bc2195bef0($context, $indent, $value);
        $value = $context->find('score');
        $buffer .= $this->section5e4988c5bf18a1dc8a17d6a3adfb59b1($context, $indent, $value);
        $buffer .= $indent . '  </tbody>
';
        $buffer .= $indent . '</table>
';

        return $buffer;
    }

    private function section525b57a60840afc9cfd7606ea7b38e18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{>mod_h5pactivity/local/result/answer}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_h5pactivity/local/result/answer')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1471f4afdb61bc5462b350bc2195bef0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <tr>
        <td>{{description}}</td>
        <td>{{#correctanswer}}{{>mod_h5pactivity/local/result/answer}}{{/correctanswer}}</td>
        <td>{{#useranswer}}{{>mod_h5pactivity/local/result/answer}}{{/useranswer}}</td>
    </tr>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <tr>
';
                $buffer .= $indent . '        <td>';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '        <td>';
                $value = $context->find('correctanswer');
                $buffer .= $this->section525b57a60840afc9cfd7606ea7b38e18($context, $indent, $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '        <td>';
                $value = $context->find('useranswer');
                $buffer .= $this->section525b57a60840afc9cfd7606ea7b38e18($context, $indent, $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc9c5190b1d32eac21ec70b28458f5f9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'score, mod_h5pactivity';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'score, mod_h5pactivity';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5e4988c5bf18a1dc8a17d6a3adfb59b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <tr class="table-light">
        <td colspan="2" class="d-none d-sm-table-cell border-top-3 border-dark"></td>
        <td class="d-none d-sm-table-cell border-top border-dark">
            <strong>{{#str}}score, mod_h5pactivity{{/str}}: {{score}}</strong>
        </td>
        <td class="d-table-cell d-sm-none text-right border-top border-dark" colspan="3">
            <strong>{{#str}}score, mod_h5pactivity{{/str}}: {{score}}</strong>
        </td>
    </tr>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <tr class="table-light">
';
                $buffer .= $indent . '        <td colspan="2" class="d-none d-sm-table-cell border-top-3 border-dark"></td>
';
                $buffer .= $indent . '        <td class="d-none d-sm-table-cell border-top border-dark">
';
                $buffer .= $indent . '            <strong>';
                $value = $context->find('str');
                $buffer .= $this->sectionBc9c5190b1d32eac21ec70b28458f5f9($context, $indent, $value);
                $buffer .= ': ';
                $value = $this->resolveValue($context->find('score'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong>
';
                $buffer .= $indent . '        </td>
';
                $buffer .= $indent . '        <td class="d-table-cell d-sm-none text-right border-top border-dark" colspan="3">
';
                $buffer .= $indent . '            <strong>';
                $value = $context->find('str');
                $buffer .= $this->sectionBc9c5190b1d32eac21ec70b28458f5f9($context, $indent, $value);
                $buffer .= ': ';
                $value = $this->resolveValue($context->find('score'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</strong>
';
                $buffer .= $indent . '        </td>
';
                $buffer .= $indent . '    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
