<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    <style>
input[type=text], select {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  
  display: inline-block;
  border: 3px solid #555;
  border-radius: 4px;
  box-sizing: border-box;
}

button[type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #45a049;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  text-align: center;
  padding: 20px;
}
        </style>
    </head>
    <body class="antialiased">
        <div>
    <form action="{{ route('postapi') }}" method="POST">
        @csrf
     <h1>POST API endpoint that accepts 3 parameters</h1>
     <label for="fname">Name:</label>
     <input type="text" id="fname" name="name" required><br><br>
     <label for="lname">Email:</label>
     <input type="text" id="lname" name="email" required><br><br>
     <button type="submit">Submit</button>
    </form>
    <br><br><br><hr>  
    <form action="{{ route('getapi') }}" method="GET">
        @csrf
     <h1>GET API endpoint that returns all of the users</h1>
     <label for="fname">Name:</label>
     <input type="text" id="fname" name="name" required><br><br>
     <label for="lname">Email:</label>
     <input type="text" id="lname" name="email" required><br><br>
     <label for="fname">Country:</label>
     <input type="text" id="fname" name="country" required><br><br>
     <label for="lname">City:</label>
     <input type="text" id="lname" name="city" required><br><br>
     <button type="submit">Submit</button>
    </form>
    <br><br><br><hr>   
    <form action="{{ route('getid') }}" method="GET">
        @csrf
     <h1>GET API endpoint that returns a user by ID </h1>
     <label for="fname">ID:</label>
     <input type="text" id="fname" name="id" required><br><br>

     <button type="submit">Submit</button>
    </form>
        </div>
    </body>
    </html>
