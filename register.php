<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <style>
         h1{
            text-align : center;
            padding:50px;
        }

        .Pendaftaran{
            align-items : center;
            justify-content : center;
            margin-left: 530px;
            padding : 40px;
            background-color : #344C64;
            width: 200px;
            height: 300px;
            border-radius: 20px ;
            font-size:18px;
            padding-bottom:20px;
            border : 2px solid black;
            border-style: solid;
            transform:translateY(-20px);
            color: white;

        }
        button{
            border-radius:5px;
        }
        
        body{
            background-color: #40A578;
        }
    </style>
</head>
<body>
    <h1>Pendaftaran</h1>

<form action="handler_register.php" method="post">
<div class="Pendaftaran">
  
    <div>
        <label for="">Nama :</label>
        <input type="text"  placeholder="masukan nama anda" name="nama">
    </div><br>
    <div>
        <label for="">ID :</label>
        <input type="id" placeholder=" ID pengguna" name="id">
    </div><br>
    <div>
        <label for="">E-mail :</label>
        <input type="email" placeholder="Email anda" name="email">
    </div><br>
    <div>
        <label for="">Pasword :</label>
        <input type="pasword" placeholder= "masukan pasword" name="pasword">
    </div><br>
    <button type="submit" name=>register</button>

</div>
</form>


</body>

</html>