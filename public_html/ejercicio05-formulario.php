<html>
<head></head>
<body>

<form action="ejercicio05-procesar.php" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="oculto"/>
  Name: <input type="text" name="name"/><br>
  E-mail: <input type="text" name="email"/><br>
  Password: <input type="password" name="pass"/><br>
  Description: <textarea rows="4" cols="50" name="desc"></textarea><br>
  Pets: <select multiple name="pet[]">
		  <option value="dog">Dog</option>
		  <option value="cat">Cat</option>
		  <option value="tiger">Tiger</option>
	</select><br>
  City: <select name="city">
		  <option value="zgz">Zaragoza</option>
		  <option value="bcn">Barcelona</option>
		  <option value="mad">Madrid</option>
	</select><br>
  Coder: <input type="radio" name="coder" value="java"/> Java
  			<input type="radio" name="coder" value="php"/>PHP<br>
  Languages:<br>
  			<input type="checkbox" name="languages[]" value="en"/>English<br>
  			<input type="checkbox" name="languages[]" value="es"/>Spanish<br>
			<input type="checkbox" name="languages[]" value="cat"/>Catala<br>
			<input type="checkbox" name="languages[]" value="gal"/>Gallego<br>
			<input type="checkbox" name="languages[]" value="eus"/>Euskera<br>
  Photo: <input type="file" name="photo"/><br>
  <input type="submit" value="submit"/>
  <input type="reset" value="reset"/>
  </form> 
</body>
</html>
