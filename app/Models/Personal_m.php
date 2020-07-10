<?php
namespace App\Models;
use CodeIgniter\Model;
class Personal_m extends Model
{
	protected $table ="tb_Personal";
	protected $primaryKey ="id";
	protected $allowedFields =["fullname", "Phone", "Email", "Password"];
}