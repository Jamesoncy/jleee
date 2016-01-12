<?php
class Amortization {
	
	public	$month_term;
	public	$annual_interest_rate;
	public	$monthly_interest_rate;
	public	$financing_price;
	public	$monthly_factor;
	public	$monthly_payment;	
	public $base_rate;
	
	public $sale_price;
	public $annual_interest_percent;
	public $year_term;
	public $down_payment;
	public $power;
    public $denom;
       
	
	public function __contruct(){
		$this->sale_price                      = 0;
		$this->annual_interest_percent         = 0;
		$this->year_term                       = 0;
		$this->down_payment                    = 0;
		$this->this_year_interest_paid         = 0;
		$this->this_year_principal_paid        = 0;
		$this->form_complete                   = false;
		$this->show_progress                   = false;
		$this->monthly_payment                 = false;
		$this->error                           = false;
		$this->base_rate = 0;
	}
	
	public function checkSalePrice($sales){
        $this->sale_price              = ereg_replace( "[^0-9.]", "", $sales);
	}
	
	public function checkAnnualInterestPercent($annual_interest_percent){
		$this->annual_interest_percent = eregi_replace("[^0-9.]", "", $annual_interest_percent);
	}
	
	public function checkYearTerm($year_term){
        $this->year_term               = eregi_replace("[^0-9.]", "", $year_term);
	}
	
	public function checkDownPayment($down_payment){
        $this->down_payment            = eregi_replace("[^0-9.]", "", $down_payment);
	}
	
	public function computeMonthTerm(){
		$this->month_term = $this->year_term*12;
	}
	
	public function power(){
		$this->power = -($this->month_term);
		
	}
	
	public function  computeDenom(){
		 $this->denom = pow((1 + $this->monthly_interest_rate), $this->power);
	}
		
	public function computeAnnualInterestRate(){
		$this->annual_interest_rate = $this->annual_interest_percent  / 100;
	}
	
	public function computeMonthlyInterestRate(){
		$this->monthly_interest_rate = $this->annual_interest_rate / 12;
	}
	
	public function computeFinancingPrice(){
		$this->financing_price = $this->sale_price  -  $this->down_payment;
	}
	
	public function computeMonthlyFactor(){
		$factor      = 0;
        $this->base_rate   = 1 + $this->monthly_interest_rate;
        $denominator = $this->base_rate;
        for ($i=0; $i < ($this->year_term * 12); $i++) {
            $factor += (1 / $denominator);
            $denominator *= $this->base_rate;
        }
        $this->monthly_factor = $factor;
	}
	
	public function computeMonthlyPayment(){
		 $this->monthly_payment = $this->financing_price  / $this->monthly_factor;
	}
	
	public function compute(){
		//note : make sure you computation is asynchronous to make your computation correct
		$this->checkSalePrice($this->sale_price);
		$this->checkAnnualInterestPercent($this->annual_interest_percent);
		$this->checkYearTerm($this->year_term);
		$this->checkDownPayment($this->down_payment);
		$this->computeMonthTerm();
		$this->power();
		$this->computeDenom();
		$this->computeFinancingPrice();
		$this->computeAnnualInterestRate();
		$this->computeMonthlyInterestRate();
		$this->computeMonthlyFactor();
		$this->computeMonthlyPayment();
		
		 if (((float) $this->year_term <= 0) || ((float) $this->sale_price <= 0) || ((float) $this->annual_interest_percent <= 0)) {
            echo "You must enter a <b>Sale Price of Home</b>, <b>Length of Motgage</b> <i>and</i> <b>Annual Interest Rate</b>";
			die();
        }
		
	}
}
?>