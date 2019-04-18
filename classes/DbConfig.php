<?php
class DbConfig 
{	
		
	protected $connection;
	
	public function __construct()
	{
		if (!isset($this->connection)) {
			
			$this->connection = new PDO("mysql:host=localhost;dbname=test","root","3266root" );
			
			
		}	
		
		return $this->connection;
	}
}
?>
