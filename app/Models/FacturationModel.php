<?php namespace App\Models;

use CodeIgniter\Model;
class FacturationModel extends Model
{
	protected $table = 'invoice';
	protected $allowedFields = [ 'idInvoice', 'Name', 'Address', 'Kind_Company_Name', 'RFC', 'Invoicecol', 'Description', 'Phone', 'IdSale', 'IdUser];
	

	
}