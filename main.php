<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}

div {
	width=: 140px;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 100px;
}
</style>
<body>
<div>
  <form action="insert.php" method="post"></br>
    <label for="fname">Y Name</label>
    <input type="text" id="fname" name="first_name" placeholder="Your name.."> </br></br>
</br>
    <label for="lname">Case ID:</label>
    <input type="text" id="lname" name="last_name" placeholder="enter case id ..."> </br></br>
 </br> 	<label for="lname">Phone</label>
    <input type="number" id="lname" name="email" placeholder="enter your number....."> </br></br>
  </br>  <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>