<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class SettingModel extends Model
{
    protected $table = 'setting';
    protected $allowedFields = ['tkey','value'];
}