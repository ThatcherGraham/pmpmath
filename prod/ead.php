<!DOCTYPE html> 

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PMP | MATH</title>
<link rel="shortcut icon" href="/favicon.ico">
 
<link rel="stylesheet" type="text/css" href="home.css" />

 </head>
 
 <div id="masthead">
 <ul id="nav2">
            <li><a href="http://www.pmpmath.com/faq.php">FAQ</a></li>
            <li><a href="http://www.pmpmath.com/">Home</a></li>
            <li><a href="http://thatchergraham.com/ "target="_blank">Contact</a></li>
			
</ul>
		
            </div>
 
 
 <div id="wrapper">
 <div id="header">
        	<h1><font color="#800000">PMP</font> | MATH</h1>
            <h2>A set of mathmatical proofs for common PMP formulas</h2>
			         </div>  

<div id=center>		
 
 <div id=menu>
 
 <?php include('menu.htm')?>

  </div>
	<div id=content>	
<h3>Estimated Activity Duration</h3>	
The EAD formula O+P+(4L)/6 is much older than PMI. It's a type of PERT estimate which is also called a three-point estimate. 
Like many some pther project management techniques it originated at the US Navy's Special Projects Office in the 1950s. 
If you go back half a century you will see the same basic formula, they just named the variables differently.
The only difference is that the text books then usually described the EAD as the mean of the beta distribution. 
Since that claim is archaic I won't address it.  
<p>
The EAD is a very simple formula. But one of it's variables is treated differently in a way that indicates the purpose of the formula.
<p>
Optimistic x 1<br>
Pessimistic x 1<br>
Most-Likely x 4<br>
<p>
The formula here is just a simple way to determine the average of a set of figures. If you sum a set of integers and then divide by the number of integers you get the average of those integers. 
The EAD uses the same formula but weights the most-likely estimate over both the pessimistic and optimistic estimates. 
<p>
In fact the formula weights the most-likely estimate as four times as probable as either of the other two other estimates or twice as likely as the two combined. 
It is also in a way deciding that the most likely estimate is the mode, by virtue of adding it to the sum four times. Since there are only 3 integers in the set it is also the median. 
<p>
So my question is why assume it's four times as probable?
By changing the weights of the variables the results could be quite different.
Below are some plausible and implausible examples that illustrate the effects of different weighting schemas. 
<p>
<b>Example A:</b> standard method<br>
If O=500, P=1,000, M=800
if EAD=O + P +(4M)/6 =783.33
<p>
<b>Example B:</b> alternate weighting<br>
If O=500, P=1,000, M=800
if EAD=(O + P + 2M)/4 = 775
<p>
<b>Example C:</b> Pessemistic weighting<br>
If O=500, P=1,000, M=800
if EAD=(O + 4P + M)/6 = 883
<p>
<b>Example D:</b> Optimistic weighting<br>
If O=500, P=1,000, M=800
if EAD=(4O + P + M)/6 = 633
<p>
<b>Example E:</b> unweighted<br>
If O=500, P=1,000, M=800
if EAD=(O + P + M)/3 =766.6 
<p>
<b>Example F:</b> more weighting<br>
If O=500, P=1,000, M=800
if EAD=(O + P + 6M)/8 = 787.5
<p>
<b>Example G:</b> even more weighting<br>
If O=500, P=1,000, M=800
if EAD=(O + P + 8M)/10 = 790
<p>
<b>Example H:</b> absurd most-likely weighting<br>
If O=500, P=1,000, M=800
if EAD=(O + P + 100M)/102 = 799
<p>
<b>Example I:</b> absurd optimistic variable<br>
If O=0, P=1,000, M=800
if EAD=(O + P + 4M)/6 = 700
<p>
<b>Example J:</b> absurd pessimistic variable<br>
If O=500, P=10,000, M=800
if EAD=(O + P + 100M)/6 = 2300
<p>
<h3>DEDUCTIONS:</h3>
<p>
Two of the three variables have definitive upper and lower constraints. The optimistic estimate must be greater than zero and the lowest of the three figures.
The most-likely variable must be between the optimistic and pessemistic variables. 
The pesemistic variable must be greater than the other two, but it can be infinitely large.
<p>
It correspondingly evident that adjusting the weight of the most-likely estimate does not effect the EAD signifigantly.
This is because we're still in a  formula framework meant only to determining the mean of a set of positive integers. 
The optimistic and pessimistic figures are end points on a line representing high and low numbers. The mean can only be between these numbers. 
Effectively the 4:6 weighting ratio just forces these three data points to conform to the area under a Gaussian distribution: a bell curve. 
<p>
While this means that the pessimistic estimate has the greatest potential for effect upon the EAD, these adjustments quickly approach absurdity. 
In example "J" I increased the pessemistic variable by an exponential order to demonstrate that this sole variable can produce an EAD which is greater than the most-likely estimate.
This is evidence of a pessimistic bias and a plausible reason to weight the most-likely estimate in the first place. 
<p>
<h3>CONCLUSION:</h3>
<p>
This formula is an industry standard, older than the venerable PMI itself. However, there is no statistical basis for its assumptions. 
The variables are all subjective evaluations, not meansurements so they will not obey the law of regression toward the mean. 
Forcing your data points into a normal distibution assumes that your variable distribution is typical. 
<p>
In a real world situation your most-likely estimate is still only as good as your best guess. 
This formula just averages that with a set of other similar guesses. 
Regardles of how estimates are generated they are supposed to be continually to refined and updated through progressive elaboration.
<p>

    </div>
	
	
 </div>
</div>

 

 
 </html>
 
 