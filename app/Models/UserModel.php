<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user'; 

    public function Insert($name, $age, $number)
    {
        $this->db = DB::table($this->table)->insert([
            'name' => $name,
            'age' => $age,
            'number' => $number
        ]);

        return $this->db;
    }
}
