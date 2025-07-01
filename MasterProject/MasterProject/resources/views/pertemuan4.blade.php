<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pertemuan 4</title>
    <style>
        table {
            border: 1px solid black;
            border-collapse: collapse;
            margin: 10px auto;
        }
        th {
            border: 1px solid black;
            padding: 5px;
        }
        td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }

        #table2 {
            margin-top: 10px;
        }

        h2 {
            margin: 10px auto;
        }
    </style>
</head>
<body>
    <table border="1px">
       <tr>
        <th>no</th>
        <th>nama</th>
        <th>alamat</th>
       </tr>
       
       </tr>
    </table>

    <div class="center-div">
        <h2>table 2</h2>
    </div>
    <table border="1px" id="table2">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
           </tr>
           <tr>
            <td>1</td>
            <td>22</td>
            <td>testing1</td>
            <td>jambi</td>
           </tr>
           <tr>
            <td>2</td>
            <td>55</td>
            <td>testing 3</td>
            <td>jambi</td>
           </tr>
           <tr>
            <td>3</td>
            <td>44</td>
            <td>testing 2</td>
            <td>jambi</td>
           </tr>
           <tr>
            <td>4</td>
            <td>11</td>
            <td>testig</td>
            <td>jambi</td>
    </table>

    <form action="">
        <div>
            <label for="name">Nama : </label>
            <input type="text" name="name" id="name" placeholder="name">
        </div>
       <div>
        <label for="">jenis kelamin : </label>
        <input type="radio" name="jk">
        <label for="">Pria</label>
        <input type="radio" name="jk">
        <label for="">Wanita</label>
       </div>
        <div>
            <label for="">Mata Kuliah : </label>
            <input type="checkbox" name="Web1" id="">
            <label for="Web1">Pemrograman Web</label>
            <input type="checkbox" name="Pem-dasar" id="">
            <label for="Pem-dasar">Pemrograman dasar</label>
            <input type="checkbox" name="pbo" id="">
            <label for="pbo">PBO</label>
        </div>

        <div>
            <label for="">Jurusan</label>
            <select name="data" id="data1">
                <option value="">Pilih Jurusan</option>
                <option value="Teknik Informatika">TI</option>
                <option value="Sistem Informasi">SI</option>
                <option value="Sistem Komputer">SK</option>
            </select>
        </div>

        <div>
            <textarea name="textarea1" id="" cols="50" rows="1"></textarea>
        </div>

        <div>
            <input type="reset" value="Clear">
            <input type="submit" value="Simpan">
        </div>
    </form>
</body>

</html>

