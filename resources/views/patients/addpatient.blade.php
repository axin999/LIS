<!DOCTYPE html>
<meta name="csrf-token" content="{{ csrf_token() }}">
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>
 <h1>Patient Index</h1>
 <form method="post">
 @csrf
  <label for="">First Name:</label>
  <input id="firstname" name="firstname" type="text">
  <label for="">Middle Name:</label>
  <input id="middlename" name="middlename" type="text">
  <label for="">Last Name:</label>
  <input id="lastname" name="lastname" type="text">
  <button type="submit">SUBMIT</button>
 </form>
</body>
</html>