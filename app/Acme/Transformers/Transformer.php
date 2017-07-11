<?php
namespace App\Acme\Transformers;
abstract class Transformer
{
  /*
  *
  *
  */
  public function collection(array $items=[]){
    if(!empty($items)){
        return array_map([$this,'transform'],$items);
    }
  }
  /*
  *
  *
  */
  public abstract function transform($item);

}
