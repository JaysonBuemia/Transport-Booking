<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code</title>
</head>
<body>
    <form class="code-container">
        <label for="code">Open message for code
        </label>
        <input type="text" id="code" name="code" maxlength="6"pattern=\d{6} />

        <button href="map.html">Submit</button>
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

.code-container {
  width: 300px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
  margin-top: 100px;
}

.code-container label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.code-container input {
  width: 278px;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.code-container button {
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.code-container button:hover {
  background-color: #0056b3;
  cursor: pointer;
}
</style>
