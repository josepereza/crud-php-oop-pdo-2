<?php
class DbConfig 
{	
		
	protected $connection;
	
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new PDO("mysql:host=localhost;dbname=test","root","12345Seis" );
			
			
		}	
		
		return $this->connection;
	}
}
?>
