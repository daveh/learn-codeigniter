<?php

namespace App\Models;

use App\Libraries\Token;

class RememberedLoginModel extends \CodeIgniter\Model
{
    protected $table = 'remembered_login';
    
    protected $allowedFields = ['token_hash', 'user_id', 'expires_at'];
    
    public function rememberUserLogin($user_id)
    {
        $token = new Token;
        
        $token_hash = $token->getHash();
        
        $expiry = time() + 864000;
        
        $data = [
            'token_hash' => $token_hash,
            'user_id'    => $user_id,
            'expires_at' => date('Y-m-d H:i:s', $expiry)
        ];
        
        $this->insert($data);
    }
}









