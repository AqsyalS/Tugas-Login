<html>
<head>
 <title>Registrasi</title>
 <style>
   body {
    margin: 0;
    padding: 0;
    background: url(image/keybord.jpg);
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
}
    .form {
    width: 400px;
    height: 420px;
    background: rgb(0, 0, 0, 0.5);
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    box-sizing: border-box;
    padding: 70px 30px;
    }
    .input {
    padding: 1%;
    color: #FF0000;
    font-size: 14pt;
    float: left;
    width: 80%;
    margin-bottom: 1%;
    }
    .submit {
      width: 280px;
    outline: none;
    height: 40px;
    padding: 5px 2px;
    border: none;
    background-color:#FF0000;
    font-size: 20px;
    color: #fff;
}
.submit1{
  padding: 1%;
  color: #FF0000;
}
    .welcome {
    color: #FF0000;
    font-size: 20pt;
    font-weight: 900;
    font-family: Centaur;
    }
  </style>

</head>
<body>

<div class="form">
<span class="welcome">Registrasi</span>
 <form action="/register" method="post">
     @csrf
  <input class="input" type="text" name="username" placeholder="Username"><br>
  <input class="input" type="password" name="password" placeholder="Password"><br>
  <input class="submit" type="submit" value="Daftar" name="simpan">
  <br><br>
  <a href="/login" class="submit1">Login</a>
<br><br>
<br><br><br>
<br><br>

 </form>
</div>

</body>
</html>
