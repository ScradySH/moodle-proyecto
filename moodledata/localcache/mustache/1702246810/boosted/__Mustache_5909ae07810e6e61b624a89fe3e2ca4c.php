<?php

class __Mustache_5909ae07810e6e61b624a89fe3e2ca4c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="container-fluid w-100 my-0 p-0">
';
        $buffer .= $indent . '    <div class="row w-100 py-3 px-1 m-0 p-md-3">
';
        if ($partial = $this->mustache->loadPartial('mod_h5pactivity/local/result/header')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->find('content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('hasoptions');
        $buffer .= $this->sectionD876e18d43792879d7894e49bb376682($context, $indent, $value);
        $value = $context->find('track');
        if (empty($value)) {
            
            $buffer .= $indent . '            <div class="alert alert-warning w-100" role="alert">
';
            $buffer .= $indent . '              ';
            $value = $context->find('str');
            $buffer .= $this->sectionDa772b8fb2bad547c6d95379b53060ee($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionD876e18d43792879d7894e49bb376682(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{>mod_h5pactivity/local/result/options}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_h5pactivity/local/result/options')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa772b8fb2bad547c6d95379b53060ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'no_compatible_track, mod_h5pactivity, {{interactiontype}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'no_compatible_track, mod_h5pactivity, ';
                $value = $this->resolveValue($context->find('interactiontype'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
