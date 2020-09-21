<?php

class Conexao {

	private $host = 'sql204.byetcluster.com';
	private $dbname = 'epiz_26726149_rechelab';
	private $user = 'epiz_26726149';
	private $pass = 'HeeQg0qqT7K';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>