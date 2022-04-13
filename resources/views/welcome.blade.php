<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.submit {
    position: absolute;
    top: 95%;
    width: 100%;
    padding: 5px 2px;
    border: none;
    background-color:#FF0000;
    font-size: 20px;
    color: #fff;
  }
    .title {
    color: #fff;
    text-align:center;
    position: absolute;
    left: 50%;
    top: 10%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;
    background: #FF0000;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.table{
    position: absolute;
    top: 30%;
    padding: 30px 25px;
    width: 98%;
    

}
.Tambahdata{
    position: absolute;
    top: 25%;
}
th,td{
    padding: 5px;
}

    </style>
</head>
<body>
<div class="title">
			<h1 class='title'>Welcome {{ auth()->user()->username }}</h1>
		</div>
        <div>
            <a href='/create' class="Tambahdata">Tambah Data</a>
        </div>
        <table class='table' border='10'>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NoHp</th>
                <th>Sekolah</th>
                <th>Edit</th>
            </tr>
            @foreach($datasiswa as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->Nama}}</td>
                <td>{{$item->NoHp}}</td>
                <td>{{$item->Sekolah}}</td>
                <td><a href="{{url('edit',$item->id)}}">Edit</a> | 
                <a href="/deletedata/{{$item->id}}">Delete    </a></td>
            </tr>
            @endforeach
        </table>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class='submit'>Log out</button>
        </form>
</body>
</html>