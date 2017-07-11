<?php
namespace App\Acme\Forms;
abstract class Form
{
  protected $form=[];
  public function getForm($form='form'){
        return $this->{$form};
  }
}
