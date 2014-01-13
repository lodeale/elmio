<?php 
/**
 * validate
 */
class Validate
{
    private $_passed = false,
            $_errors = array(),
            $_db = null;

    public function __construct(){
        $this->_db = DB::getInstance();
    }

    public function check($source, $items = array()){
        foreach($items as $item => $rules){
            foreach($rules as $rule => $rule_value){

                $value = trim($source[$item]);

                if ($rule === 'required' and empty($value)) {
                    $this->addError("{$item} is required");
                }else if(!empty($value)){
                    switch($rule){
                        case 'min':
                            if(strlen($value) < $rule_value){
                                $this->addError("{$item} tiene que ser como minimo {$rule_value}");
                            }            
                        break; 
                        case 'max':
                            if(strlen($value) > $rule_value){
                                $this->addError("{$item} tiene que ser como maximo {$rule_value}");
                            }            
                        break;
                        case 'matches':
                            if($value != $source[$rule_value]){
                                $this->addError("{$rule_value} no es igual a {$item}");
                            }
                        break;
                        case 'unique':
                            $check = $this->_db->get($rule_value, array($item, '=', $value));
                            if ($check->count()) {
                                $this->addError("{$item} ya Existe");
                            }
                        break;

                    }                
                }
            }
        }

        if (empty($this->_errors)) {
            $this->_passed = true;
        }

        return $this;
    }

    private function addError($error){
        $this->_errors[] = $error;
    }

    public function errors(){
        return $this->_errors;
    }

    public function passed(){
        return $this->_passed;
    }
}
