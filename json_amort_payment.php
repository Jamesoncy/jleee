<?php
	require_once('./json.php');
	require_once('./cls_amortization.php');
		
	

	
	$data = $_POST['data'];
	$terms = $data['terms'];
	$downPayment = $data['downpayment'];
	$errs="";
	if ($terms > 30 || $downPayment < 5000){
		$errs="Could not process.";
		exit();
	}
						
	
	$area = $data['area'];
	$annual_interest_percent = 7;
	$price = $data['price'];
	$sale_price = (int)$area * (int)$price;
	
	$reqDownpayment = (int)$sale_price * 0.20;
	
	$reqDownpaymentBalance = $sale_price - $reqDownpayment;
	
	$balanceAmort = 0;
	// if($reqDownpaymentBalance >= $reqDownpayment){
		// $balanceAmort = $reqDownpayment
	// }
	
	$amortization = new Amortization();
	$amortization->year_term = $terms;
	$amortization->annual_interest_percent = $annual_interest_percent;
	$amortization->sale_price =  $sale_price;
	$amortization->down_payment = $downPayment;
	$amortization->compute();
	$pmi_per_month = 0;
	$withPmi = 0;
	if ($amortization->down_payment < ($amortization->sale_price * (20/100))) {
		$pmi_per_month = 55 * ($amortization->financing_price / 100000);
		$withPmi = 1;
	}
	
	$monthlyPayment = $amortization->monthly_payment + $pmi_per_month;
	$assessed_price          = ($amortization->sale_price * .85);
	$residential_yearly_tax  = ($assessed_price / 1000) * 14;
	$residential_monthly_tax = $residential_yearly_tax / 12;
	$totalMonltyPayment = $amortization->monthly_payment + $pmi_per_month + $residential_monthly_tax;
	
	
	//table computation
	$table = '';
	 // Set some base variables
        $principal     = $amortization->financing_price;
        $current_month = 1;
        $current_year  = 1;
        // This basically, re-figures out the monthly payment, again.
        $power = -($amortization->month_term);
        $denom = pow((1 + $amortization->monthly_interest_rate), $power);
        $monthly_payment = $principal * ($amortization->monthly_interest_rate / (1 - $denom));
        
        $table .= "<br><br><a name=\"amortization\"></a>Amortization For Monthly Payment: <b>P " . number_format($monthly_payment, "2", ".", ",") . "</b> over " . $amortization->year_term . " years<br>\n";
        $table .= "<table cellpadding=\"5\" cellspacing=\"0\" bgcolor=\"#eeeeee\" border=\"1\" width=\"100%\">\n";
        
        // This LEGEND will get reprinted every 12 months
        $legend =  "\t<tr valign=\"top\" bgcolor=\"#cccccc\">\n";
        $legend .= "\t\t<td align=\"right\"><b>Month</b></td>\n";
        $legend .= "\t\t<td align=\"right\"><b>Interest Paid</b></td>\n";
        $legend .= "\t\t<td align=\"right\"><b>Principal Paid</b></td>\n";
        $legend .= "\t\t<td align=\"right\"><b>Remaing Balance</b></td>\n";
        $legend .= "\t</tr>\n";
        
        $this_year_interest_paid = 0;      
		$this_year_principal_paid = 0;   		
        // Loop through and get the current month's payments for 
        // the length of the loan 
        while ($current_month <= $amortization->month_term) {        
            $interest_paid     = $principal * $amortization->monthly_interest_rate;
            $principal_paid    = $amortization->monthly_payment - $interest_paid;
            $remaining_balance = $principal - $principal_paid;
            
            $this_year_interest_paid  = $this_year_interest_paid + $interest_paid;
            $this_year_principal_paid = $this_year_principal_paid + $principal_paid;
            
            $table .="<tr valign=\"top\" bgcolor=\"#eeeeee\">";
            $table .="<td align=\"right\">" . $current_month . "</td>";
            $table .="<td align=\"right\">P " . number_format($interest_paid, "2", ".", ",") . "</td>";
            $table .="<td align=\"right\">P " . number_format($principal_paid, "2", ".", ",") . "</td>";
            $table .="<td align=\"right\">P " . number_format($remaining_balance, "2", ".", ",") . "</td>";
            $table .="</tr>";
    
            ($current_month % 12) ? $show_legend = FALSE : $show_legend = TRUE;
    
            if ($show_legend) {
                $table .="<tr valign=\"top\" bgcolor=\"#ffffcc\">";
				$table .="<td colspan=\"4\"><b>Totals for year " . $current_year . "</td>";
                $table .="</tr>";
                
                $total_spent_this_year = $this_year_interest_paid + $this_year_principal_paid;
                $table .="<tr valign=\"top\" bgcolor=\"#ffffcc\">";
                $table .="<td>&nbsp;</td>";
                $table .="<td colspan=\"3\">";
                $table .="You will spend P " . number_format($total_spent_this_year, "2", ".", ",") . " on your house in year " . $current_year . "<br>";
                $table .="P " . number_format($this_year_interest_paid, "2", ".", ",") . " will go towards INTEREST<br>";
                $table .="P " . number_format($this_year_principal_paid, "2", ".", ",") . " will go towards PRINCIPAL<br>";
                $table .="</td>";
                $table .="</tr>";
    
                $table .="<tr valign=\"top\" bgcolor=\"#ffffff\">";
                $table .="<td colspan=\"4\">&nbsp;<br><br></td>";
                $table .="</tr>";
                
                $current_year++;
                $this_year_interest_paid  = 0;
                $this_year_principal_paid = 0;
                
                if (($current_month + 6) < $amortization->month_term) {
                    $table .= $legend;
                }
            }
    
            $principal = $remaining_balance;
            $current_month++;
        }
        $table .="</table>";

	
	
	$retobj = array(
		'cost' => number_format($amortization->sale_price,2,'.',','),
		'total_amort' => number_format($totalMonltyPayment,2,'.',','),
		'month_payment' => number_format($amortization->monthly_payment,2,'.',','),
		'month_payment_pmi' => number_format($monthlyPayment,2,'.',','),
		'amount_finance' => number_format($amortization->financing_price,2,'.',','),
		'with_pmi' => $withPmi,
		'ComputationTable' => $table,
		'try' => $errs,
	);
	
	
	
	
	
	$json = new Services_JSON();
	echo $json->encode($retobj);
	
	
?>