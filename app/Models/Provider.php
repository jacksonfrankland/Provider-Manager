<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function getActiveAttribute($value)
    {
        $basicDetailsProvided = $this->company_name && $this->trading_name && $this->abn;
        $contactProvided = ($this->primary_name && $this->primary_email) || ($this->secondary_name && $this->secondary_email);

        return $basicDetailsProvided && $contactProvided;
    }
}
