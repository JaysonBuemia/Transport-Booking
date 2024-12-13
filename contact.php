<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Add Contact</title>
</head>
<body>
    <div class="contact-container">
        <form action="#" method="POST">
          <span></span>
          <label for="contactNumber">Contact Number:</label>
          <input id="contactNumber" name="contactNumber" type="tel" 
            placeholder="+123-456-7890" required minlength="11" maxlength="15" />
          <button href="validate.php">Submit</button>
        </form>
      </div>
</body>
</html>

<style>
*{
  padding: none;
  font-family: 'Courier New', sans-serif;
}
.text {
  justify-content: center;
  align-items: center;
  background-color: black;
}
.contact-container {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
  margin-top: 100px;
}

.contact-container label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.contact-container input {
  width: 278px;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.contact-container button {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.contact-container button:hover {
  background-color: #0056b3;
  cursor: pointer;
}
</style>
