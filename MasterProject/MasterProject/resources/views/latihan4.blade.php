<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>latihan 4</title>
</head>
<body>
    {{-- <table border="1px">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Stok</th>
            <th>Harga barang</th>
        </tr>
        <tr>
            <td>1</td>
            <td>B001</td>
            <td>Keyboard</td>
            <td>14</td>
            <td>300.000</td>
        </tr>
        <tr>
            <td>2</td>
            <td>B002</td>
            <td>Monitor</td>
            <td>9</td>
            <td>3.000.000</td>
        </tr>
        <tr>
            <td>3</td>
            <td>B003</td>
            <td>Mouse</td>
            <td>23</td>
            <td>70.000</td>
        </tr>
    </table> --}}

    <form action="">
        <table border="1px">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="" id="" cols="30" rows="6"></textarea></td>
            </tr>
            <tr>
                <td>Prodi</td>
                <td>:</td>
                <td><select name="" id="">
                    <option value="">TI</option>
                    <option value="">Si</option>
                    <option value="">Sk</option>
                </select>
            </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="" id="">Pria
                    <input type="radio" name="" id="">Wanita
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Kirim">
        <input type="reset" value="Reset">
    </form>
</body>
</html>