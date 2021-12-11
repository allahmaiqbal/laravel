<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="{{ route('homeRoute') }}">Home</a></li>
 
  <li><a href="{{ route('contactRoute') }}">Contact</a></li>
  <li><a href="{{ route('aboutRoute') }}">About</a></li>
</ul>

<div class="container">
    @yield('content')
</div>

</body>
</html>


