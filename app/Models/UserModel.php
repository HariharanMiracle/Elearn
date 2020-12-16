<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username', 'password', 'email', 'fname', 'lname', 'contact', 'dob', 'privilege', 'status'];
}