<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $table = 'users';
    protected $fillable = ['id', 'email', 'password', 'created', 'updated'];
    const CREATED_AT = 'created';
    const UPDATED_AT = 'updated';
}