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
<h3>Communications Channels</h3>	
In the PMBOK, project complexity is measured as a function of total headcount with a simple formula for calculating communication channels <b>n(n-1)/2</b>.
I thought I recognized the formula as a Gauss factorial. It's not. It's just a sum. I'll show my math to demonstrate that.
<p>
I didn't know what they intended to calculate because the PMBOK didn't describe what the product of the fomula was defining. 
I assumed it could be either all possible combinations of a set or just the unique combinations of a set. 
<p>
In other words it wasn't self evident if it counted Fred-to-Bob and Bob-to-Fred, as seperate instances.
This matters because the formula can only describe a combination or a permutation; not both. 
If the sequence is irrelevant it is a combination. If the sequence is relevant then it's a permutation.  
<p>
To determine the answer to this question I calculated it out for a series of example sets A, AB, ABC, and ABCD representing a series of groups containing 1, 2, 3 and 4 members. 
I am assuming that redundant combinations like AA or BB are not counted as talking to oneself is not communication under the encode-decode model.
<p>
<b>A.</b> There is only one possible combination.
1 x (1-1) ÷2 = 0 (The formula result indicates no communications channels, which is self-explanatory)
<p>
<b>AB.</b> There are two possible combinations (AB, BA) which are redundant in terms of lines of communication.
2 x (2-1) ÷2 = 1 Already the formula results indicate that it discards redundant communications paths.
<p>
<b>ABC.</b> There are 12 possible combinations (AB, AC, BA, BC, CA, CB, ABC, ACB, BAC, BCA, CBA, CAB)
3 x (3-1) ÷2 = 3  The formula only result is 3, which are presumably AB, AC, and BC. These are the unique pairs. 
<p>
<b>ABCD.</b> There are 48 possible combinations (AB, AC, AD, BA, BC, BD, CA, CB, CD, DA, DB, DC, ABC, ABD, ACB, ACD, BAC, BAD, BCA, BCD, CBA, CBD, CAB, CAD, ABCD, ABDC, ACBD, ACDB, ADBC, ADCB, BCDA, BCAD, BDCA, BDAC, BACD, BADC, CDAB, CDBA, CADB, CABD, CBAD, CBDA, DABC, DACB, DCAB, DCBA, DBCA, DBAC)
4 x (4-1) ÷2 = 6 The formula result is 6 which are again presumably the unique pairs: AB, AC, AD, BA, BC, BD, CA, CB, CD, DA, DB, DC.
<p>
<h3>DEDUCTIONS:</h3>
PMI appears to be only counting the unique, one-to-one communications paths. 
The communications channels formula produces a triangular number sequence (0, 1, 3, 6, 10, 15, 21, 28, 36, 45...) 
Without delving into figurate numbers, it is still clear that they intend this result sequence to indicate that complexity grows with project size in a non-linear way, but not exponentially. 
<p>
If taken literally, that would mean that any project with 4 members is always exactly twice as complex as any project with 3 members. 
That point of view also implicitly views one instructor addressing a class of a 12 people as equivalent to 12 one-on-one conversations. 
Whether right or wrong that is a point of view not otherwise explained in the text. 
<p>
<h3>CONCLUSION:</h3>
My interpretation is that these figures are not to be taken literally. 
It is a rule of thumb indicating a compounding level of complexity correlating to project size because of headcount.
    </div>
	
	
 </div>
</div>

 

 
 </html>
 
 