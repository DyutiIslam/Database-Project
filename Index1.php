<?php
try{
	$con=new PDO ("mysql:host=localhost;dbname=ProjectDB", "root ", " ");
if (isset($_POST['signup'])){

    $name  =$_POST['name'];
	
	$email =$_POST['email'];
	
	$pass  =$_POST['pass'];
	
	$date  =$_POST['date'];
	
	$month =$_POST['month'];
	
	$year  =$_POST['year']; 
	
	$year  =$_POST['Gender']; 
	
	$insert = $con->prepare("INSERT INTO users(name,email,pass,date,month,year)
	values(:name,:email,:pass,:date,:month,:year)  ")
	$insert->bindParam(':name',$name);
	$insert->bindParam(':email',$email);
	$insert->bindParam(':pass',$pass);
	$insert->bindParam(':date',$date);
	$insert->bindParam(':month',$month);
	$insert->bindParam(':year',$year);
	$insert->bindParam(':Gender',$Gender);
	$insert->bindParam(':',$name);
	$insert->bindParam(':',$name);
	$insert->execute();
	
	
}
catch(PDOException $e)
{
	echo"error".$e->getMessage();
}
?>
<form method="post"
<input type="text" name="name" placeholder="User Name">
<input type="text" name="email" placeholder="example@example.com">
<input type="text" name="password" placeholder="********">
</form>
<select name="date">
<option value="DATE">DATE</option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option  value="25">25</option>
<option value="26">26/<option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>

</select>
<select name="month">
<option value="MONTH">MONTH</option>
<option value="January">January</option>
<option value="Februaty">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="MAY">MAy</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
</select>
</select>
<select name="year">
<option value="YEAR">YEAR</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
</select>

<select name="gender">
<option value="Gender">Gender</option>
<option value="Mele">Mele</option>
<option value="Femele">Femele</option>
</select>


<input type="Submit" name="signup" value=Signup>