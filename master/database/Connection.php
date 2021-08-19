<?php 
class Connection{

	protected $isConn;
	protected $datab;
	protected $transaction;

public function __construct($username="epiz_29378044", $password ="fzxEeCH1H4", $host="sql209.epizy.com", $dbname="epiz_29378044_epiz_29378044_", $options = []){
		
		$this->isConn = TRUE;
		try{
			$this->datab = new PDO("mysql:host={$host};  dbname={$dbname}; charset=utf8", $username, $password, $options);
			$this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->transaction = $this->datab;
			$this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		}catch(PDOException $e){
			throw new Exception($e->getMessage());			
		}

	}
 

	public function Disconnect(){
		$this->datab = NULL;
		$this->isConn = FALSE;
	}


	


}
 ?>