<?php

/**
 * This class is for Manage a Bank Detail 
 */
class BankAccount
{
	//create a property named balance.
	public $currentBalance = 0;
	
	//method for get current balance
	function currentBalance(){
		echo $this->currentBalance;
	}

	//method for depositr a money
	function deposite($amt){
		//we cheange the value of property currentBalance
		$this->currentBalance = $this->currentBalance + $amt;
	}

	//method for withdraw a money
	function withdraw($amt){
		if ($this->currentBalance < $amt) {
			echo "<br>No sufficiant Balance...";
		} else {
			$this->currentBalance = $this->currentBalance - $amt;
		}
	}
}

//create a instance of class
$jay = new BankAccount();
$jay->currentBalance();
$jay->deposite(500);
$jay->currentBalance();
$jay->withdraw(200);
$jay->currentBalance();

?>