<?php

class __Mustache_a582be0389641a7ec9f5c18360c1d805 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="flex-column h-100 w-100">
';
        $buffer .= $indent . '    <span class="d-none" data-region="courseid" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-hidden="true"></span>
';
        $buffer .= $indent . '    <span class="d-none" data-region="groupid" data-groupid="';
        $value = $this->resolveValue($context->find('groupid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-hidden="true"></span>
';
        $buffer .= $indent . '
';
        $value = $context->find('currentvalue');
        $buffer .= $this->section68957212d9492c80aed38c52ce603948($context, $indent, $value);
        $value = $context->find('currentvalue');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
                $context->pushBlockContext(array(
                    'label' => array($this, 'blockB6038b059e40d17225b81521400b605c'),
                    'placeholder' => array($this, 'blockB6038b059e40d17225b81521400b605c'),
                    'additionalattributes' => array($this, 'blockF538c2ab2d75eeb2962a51dfe4379090'),
                ));
                $buffer .= $parent->renderInternal($context, $indent);
                $context->popBlockContext();
            }
        }
        $buffer .= $indent . '    <input type="hidden" name="search" id="input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"/>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div data-region="searchplaceholder"></div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section83bdca16870727dcba1a19a96ebf1d98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                searchgroups, core
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '                searchgroups, core
';
                $buffer .= $indent . '            ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68957212d9492c80aed38c52ce603948(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{< core/search_input_auto }}
            {{$label}}{{#str}}
                searchgroups, core
            {{/str}}{{/label}}
            {{$value}}{{{currentvalue}}}{{/value}}
            {{$additionalattributes}}
                role="combobox"
                aria-expanded="true"
                aria-controls="groups-result-listbox"
                aria-autocomplete="list"
                data-input-element="input-{{uniqid}}"
            {{/additionalattributes}}
        {{/ core/search_input_auto }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                if ($parent = $this->mustache->loadPartial('core/search_input_auto')) {
                    $context->pushBlockContext(array(
                        'label' => array($this, 'blockB6038b059e40d17225b81521400b605c'),
                        'value' => array($this, 'blockDf55c50bbfa3c76dbe2115223ea0a585'),
                        'additionalattributes' => array($this, 'blockF538c2ab2d75eeb2962a51dfe4379090'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockB6038b059e40d17225b81521400b605c($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->section83bdca16870727dcba1a19a96ebf1d98($context, $indent, $value);
    
        return $buffer;
    }

    public function blockDf55c50bbfa3c76dbe2115223ea0a585($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('currentvalue'), $context);
        $buffer .= ($value === null ? '' : $value);
    
        return $buffer;
    }

    public function blockF538c2ab2d75eeb2962a51dfe4379090($context)
    {
        $indent = $buffer = '';
        $buffer .= '                role="combobox"
';
        $buffer .= $indent . '                aria-expanded="true"
';
        $buffer .= $indent . '                aria-controls="groups-result-listbox"
';
        $buffer .= $indent . '                aria-autocomplete="list"
';
        $buffer .= $indent . '                data-input-element="input-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
    
        return $buffer;
    }
}
