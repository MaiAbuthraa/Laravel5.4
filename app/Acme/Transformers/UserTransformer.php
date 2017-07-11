<?php namespace App\Acme\Transformers;


use App\Model\User;
class UserTransformer extends Transformer
{
    public function transform( $item)
    {

        return [
            'name' => $item->name,
            'email' => $item->email,
        ];
    }
}
