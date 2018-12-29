<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function checkTabActive($fun)
{	
	$ci = &get_instance();
	$f_name = $ci->router->fetch_method();
	//p($fun);
	if(in_array($f_name, $fun))		
  	{
  		return true;
  	}else
  	{
  		return false;
  	}
}

function p($data)
{
  echo "<pre>"; print_r($data); die();
}

if(!function_exists('check_required_value')) {

  function check_required_value($chk_params, $converted_array) {

    foreach ($chk_params as $param) {

          if (array_key_exists($param, $converted_array) && ($converted_array[$param] != '')) {

            $check_error = 0;
          } else 
          {
            $check_error = array('check_error' => 1, 'param' => $param);
            break;
          }
    }
    return $check_error;
  }
}

function createRandomCode() 
{ 
    $chars = "023456789ABCDEFGHIJKLMNOPQRST"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 
    while ($i <= 8) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 
    return $pass; 
}


function formatData($data)
{
    foreach($data as $key => $val)

    {

      if(!is_array($val))

      {

       $data[$key] = urldecode($val);

      }else

      {

       $data[$key] = formatData($val);

      }

    }



     return $data; 
}

class SkipTopFilter extends FilterIterator {
    private $filterNum = 0;
    public function __construct(array $array, $filter) {
        parent::__construct(new ArrayIterator($array));
        $this->filterNum = $filter;
    }
    public function accept() {
        return ($this->getInnerIterator()->key() >= $this->filterNum);
    }
}

function sendResponse($res)
{
  $resp = json_encode($res);
  echo $resp;
  exit();
}
