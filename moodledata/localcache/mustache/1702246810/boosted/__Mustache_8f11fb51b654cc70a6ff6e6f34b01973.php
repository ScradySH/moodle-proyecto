<?php

class __Mustache_8f11fb51b654cc70a6ff6e6f34b01973 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('search');
        $buffer .= $this->section8fe644bacfd33cf53861315ae76d17e0($context, $indent, $value);
        $value = $context->find('categories');
        $buffer .= $this->sectionF8511e999e93c19bda0f637e4f457866($context, $indent, $value);
        $value = $context->find('js');
        $buffer .= $this->section825fd39c9edcfe88fe693e86956db0b7($context, $indent, $value);

        return $buffer;
    }

    private function section285c710aa5c0b97434419ae9ab6a3dc8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' searchactivitiesbyname, course ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' searchactivitiesbyname, course ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4bcd7a40ec2b3d3300680e2238c071e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'search, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFabd409becd8ef33beb7b5951adf622b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' value="{{query}}" autofocus ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' value="';
                $value = $this->resolveValue($context->find('query'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" autofocus ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1d7da475b7a672eb83253a28b86e42f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'submitsearch, course ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'submitsearch, course ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa5c8624f37c19e7f7753e7c68fa1ff0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' searchresults, course, {{searchresultsnumber}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' searchresults, course, ';
                $value = $this->resolveValue($context->find('searchresultsnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d7dca0126f7d08f5e2b1dcd03ed662e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="pt-1 pb-1">
            <span role="alert">{{#str}} searchresults, course, {{searchresultsnumber}} {{/str}}</span>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="pt-1 pb-1">
';
                $buffer .= $indent . '            <span role="alert">';
                $value = $context->find('str');
                $buffer .= $this->sectionCa5c8624f37c19e7f7753e7c68fa1ff0($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8fe644bacfd33cf53861315ae76d17e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <form class="row">
        <div class="input-group pt-4 pb-1 col-md-6">
            <label for="search">
                <span class="sr-only">{{#str}} searchactivitiesbyname, course {{/str}}</span>
            </label>
            <input type="text" name="search" id="search" class="form-control rounded-left" autocomplete="off"
                   placeholder="{{#str}}search, core {{/str}}" {{#query}} value="{{query}}" autofocus {{/query}}
            >
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary rounded-right" type="button">
                    <i class="icon fa fa-search fa-fw m-0" aria-hidden="true"></i>
                    <span class="sr-only">{{#str}}submitsearch, course {{/str}}</span>
                </button>
          </div>
        </div>
    </form>
    {{#query}}
        <div class="pt-1 pb-1">
            <span role="alert">{{#str}} searchresults, course, {{searchresultsnumber}} {{/str}}</span>
        </div>
    {{/query}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <form class="row">
';
                $buffer .= $indent . '        <div class="input-group pt-4 pb-1 col-md-6">
';
                $buffer .= $indent . '            <label for="search">
';
                $buffer .= $indent . '                <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section285c710aa5c0b97434419ae9ab6a3dc8($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '            <input type="text" name="search" id="search" class="form-control rounded-left" autocomplete="off"
';
                $buffer .= $indent . '                   placeholder="';
                $value = $context->find('str');
                $buffer .= $this->sectionE4bcd7a40ec2b3d3300680e2238c071e($context, $indent, $value);
                $buffer .= '" ';
                $value = $context->find('query');
                $buffer .= $this->sectionFabd409becd8ef33beb7b5951adf622b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '            <div class="input-group-append">
';
                $buffer .= $indent . '                <button type="submit" class="btn btn-outline-secondary rounded-right" type="button">
';
                $buffer .= $indent . '                    <i class="icon fa fa-search fa-fw m-0" aria-hidden="true"></i>
';
                $buffer .= $indent . '                    <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionB1d7da475b7a672eb83253a28b86e42f($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </form>
';
                $value = $context->find('query');
                $buffer .= $this->section1d7dca0126f7d08f5e2b1dcd03ed662e($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf66a89e8770b6501760de0357e6c10e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'module, course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'module, course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d467361e24f295e678029f34443814c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'recommend, course';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'recommend, course';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9efbf58aac35471aff30f385c71166ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'recommendcheckbox, course, {{name}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'recommendcheckbox, course, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6c044fe8710d3502dd5cb9686c32f3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="checked"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked="checked"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a0ef0230b0ba87f16d957e0444bea14(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <td class="col-5 c1 colselect">
                    <input class="activity-recommend-checkbox" type="checkbox" aria-label="{{#str}}recommendcheckbox, course, {{name}}{{/str}}" data-area="{{componentname}}" data-id="{{id}}" {{#recommended}}checked="checked"{{/recommended}}  />
                    </td>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <td class="col-5 c1 colselect">
';
                $buffer .= $indent . '                    <input class="activity-recommend-checkbox" type="checkbox" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section9efbf58aac35471aff30f385c71166ac($context, $indent, $value);
                $buffer .= '" data-area="';
                $value = $this->resolveValue($context->find('componentname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('recommended');
                $buffer .= $this->sectionE6c044fe8710d3502dd5cb9686c32f3f($context, $indent, $value);
                $buffer .= '  />
';
                $buffer .= $indent . '                    </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB954fffc39742ac47b4753592962e43b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <tr class="d-flex">
                    <td class="col-7 c0"><span>{{{icon}}}</span>{{name}}</td>
                    {{#id}}
                    <td class="col-5 c1 colselect">
                    <input class="activity-recommend-checkbox" type="checkbox" aria-label="{{#str}}recommendcheckbox, course, {{name}}{{/str}}" data-area="{{componentname}}" data-id="{{id}}" {{#recommended}}checked="checked"{{/recommended}}  />
                    </td>
                    {{/id}}
                    {{^id}}
                    <td class="col-5"></td>
                    {{/id}}
                </tr>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <tr class="d-flex">
';
                $buffer .= $indent . '                    <td class="col-7 c0"><span>';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $value = $context->find('id');
                $buffer .= $this->section1a0ef0230b0ba87f16d957e0444bea14($context, $indent, $value);
                $value = $context->find('id');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <td class="col-5"></td>
';
                }
                $buffer .= $indent . '                </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4b5cfe659c82312e5995e62c263cebb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <h3 class="pt-4">{{categoryname}}</h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr class="d-flex">
                    <th scope="col" class="col-7 c0">{{#str}}module, course{{/str}}</th>
                    <th scope="col" class="col-5 c1">{{#str}}recommend, course{{/str}}</th>
                </tr>
            </thead>
            <tbody>
                {{#categorydata}}
                <tr class="d-flex">
                    <td class="col-7 c0"><span>{{{icon}}}</span>{{name}}</td>
                    {{#id}}
                    <td class="col-5 c1 colselect">
                    <input class="activity-recommend-checkbox" type="checkbox" aria-label="{{#str}}recommendcheckbox, course, {{name}}{{/str}}" data-area="{{componentname}}" data-id="{{id}}" {{#recommended}}checked="checked"{{/recommended}}  />
                    </td>
                    {{/id}}
                    {{^id}}
                    <td class="col-5"></td>
                    {{/id}}
                </tr>
                {{/categorydata}}
            </tbody>
        </table>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <h3 class="pt-4">';
                $value = $this->resolveValue($context->find('categoryname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3>
';
                $buffer .= $indent . '        <table class="table table-striped table-hover">
';
                $buffer .= $indent . '            <thead>
';
                $buffer .= $indent . '                <tr class="d-flex">
';
                $buffer .= $indent . '                    <th scope="col" class="col-7 c0">';
                $value = $context->find('str');
                $buffer .= $this->sectionEf66a89e8770b6501760de0357e6c10e($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                    <th scope="col" class="col-5 c1">';
                $value = $context->find('str');
                $buffer .= $this->section1d467361e24f295e678029f34443814c($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                </tr>
';
                $buffer .= $indent . '            </thead>
';
                $buffer .= $indent . '            <tbody>
';
                $value = $context->find('categorydata');
                $buffer .= $this->sectionB954fffc39742ac47b4753592962e43b($context, $indent, $value);
                $buffer .= $indent . '            </tbody>
';
                $buffer .= $indent . '        </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8511e999e93c19bda0f637e4f457866(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#hascategorydata}}
        <h3 class="pt-4">{{categoryname}}</h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr class="d-flex">
                    <th scope="col" class="col-7 c0">{{#str}}module, course{{/str}}</th>
                    <th scope="col" class="col-5 c1">{{#str}}recommend, course{{/str}}</th>
                </tr>
            </thead>
            <tbody>
                {{#categorydata}}
                <tr class="d-flex">
                    <td class="col-7 c0"><span>{{{icon}}}</span>{{name}}</td>
                    {{#id}}
                    <td class="col-5 c1 colselect">
                    <input class="activity-recommend-checkbox" type="checkbox" aria-label="{{#str}}recommendcheckbox, course, {{name}}{{/str}}" data-area="{{componentname}}" data-id="{{id}}" {{#recommended}}checked="checked"{{/recommended}}  />
                    </td>
                    {{/id}}
                    {{^id}}
                    <td class="col-5"></td>
                    {{/id}}
                </tr>
                {{/categorydata}}
            </tbody>
        </table>
    {{/hascategorydata}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('hascategorydata');
                $buffer .= $this->sectionC4b5cfe659c82312e5995e62c263cebb($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section825fd39c9edcfe88fe693e86956db0b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'core_course/recommendations\',
], function(Recommendations) {
    Recommendations.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'core_course/recommendations\',
';
                $buffer .= $indent . '], function(Recommendations) {
';
                $buffer .= $indent . '    Recommendations.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
