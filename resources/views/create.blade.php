<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.table{
    position: absolute;
    left: 30%;
    top: 30%;
    padding: 20px50px;
    width: 300px;
}
.table1{
    position: absolute;
    left: 30%;
    top: 35%;
    padding: 20px50px;
    width: 300px;
}
.table2{
    position: absolute;
    left: 30%;
    top: 40%;
    padding: 20px50px;
    width: 300px;
}
.create{
    position: absolute;
    left: 30%;
    top: 45%;
}
</style>
</head>
<body>
    <h1>Create Data Siswa</h1>
    <div>
        <form action="/simpandata" method="post" >
            @csrf
            <div class='table'>
                <input type="text" id="Nama" name="Nama" placeholder='Nama Siswa' >
            </div>
            <div class='table1'>
                <input type="number" id="NoHp" name="NoHp" placeholder='Nomor Telepon Siswa' >
            </div>
            <div class='table2'>
                <input type="text" id="Sekola" name="Sekolah" placeholder='Asal Sekolah' >
            </div>
            <div>
                <button type="submit" class="create">Simpan Data</button>
            </div>
        </form>
    </div>
</body>
</html>