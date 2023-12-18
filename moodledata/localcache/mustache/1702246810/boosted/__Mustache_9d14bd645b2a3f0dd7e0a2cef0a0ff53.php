<?php

class __Mustache_9d14bd645b2a3f0dd7e0a2cef0a0ff53 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<table class="admintable generaltable" id="h5ptools">
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '    <tr>
';
        $buffer .= $indent . '        <th>';
        $value = $context->find('str');
        $buffer .= $this->sectionEb2c717df8ed20fd7ecb34cfd7eece7d($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        <th class="text-center">';
        $value = $context->find('str');
        $buffer .= $this->section1526efd151c2f96f7780cc4ff930abe7($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        <th>';
        $value = $context->find('str');
        $buffer .= $this->section3b2242e50349fccfb8bae9c098efdfc5($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        $value = $context->find('tools');
        $buffer .= $this->section99d2edcbca1eeab9e78f0eff0fc761be($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';

        return $buffer;
    }

    private function sectionEb2c717df8ed20fd7ecb34cfd7eece7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' feature, h5p ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' feature, h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1526efd151c2f96f7780cc4ff930abe7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' status, h5p ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' status, h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b2242e50349fccfb8bae9c098efdfc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' description, h5p ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' description, h5p ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d6bba38aaf3221aac2f1b724859088e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' settings ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' settings ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc6e640334de11030b537efb70f1c2a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div>{{{ status_action }}}</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div>';
                $value = $this->resolveValue($context->find('status_action'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99d2edcbca1eeab9e78f0eff0fc761be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr class="">
            <td><a href="{{{ link }}}" title="{{#str}} settings {{/str}}">{{{ tool }}}</a></td>
            <td class="text-center">
                <div class="{{{ status_class }}}">{{{ status }}}</div>
                {{#status_action}}<div>{{{ status_action }}}</div>{{/status_action}}
            </td>
            <td>{{{ tool_description }}}</td>
        </tr>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <tr class="">
';
                $buffer .= $indent . '            <td><a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section5d6bba38aaf3221aac2f1b724859088e($context, $indent, $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('tool'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></td>
';
                $buffer .= $indent . '            <td class="text-center">
';
                $buffer .= $indent . '                <div class="';
                $value = $this->resolveValue($context->find('status_class'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('status'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                ';
                $value = $context->find('status_action');
                $buffer .= $this->sectionAc6e640334de11030b537efb70f1c2a7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>';
                $value = $this->resolveValue($context->find('tool_description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
