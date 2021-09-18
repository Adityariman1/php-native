<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Nama Barang </td>
                    <td> : </td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Harga Barang </td>
                    <td> : </td>
                    <td><input type="number" name="harga"></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan</td>
                    <td> : </td>
                    <td><input type="number" name="jumlah"></td>
                </tr>
                <tr>
                    <td>Jenis Pembayaran</td>
                    <td> : </td>
                    <td><select name="pembayaran" id="">
                        <option value="cash">Cash</option>
                        <option value="m-banking">M-Banking</option>
                        <option value="Gopay">Gopay</option>
                        <option value="pickup">Pickup</option>
                    </select></td>
                </tr>
                <tr>
                    <td></td><td></td>
                    <td><input type="submit" name="submit" value="Simpan"></td>
                </tr>
            </form>
        </table>
        <?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $pembayaran = $_POST['pembayaran'];

    class gofud
    {
        public $nama;
        public $harga;
        public $jumlah;
        public $pembayaran;
        public $total = $this->harga * $this->jumlah;

        public function __construct($a, $b, $c, $d, $e)
        {
            $this->nama = $a;
            $this->harga = $b;
            $this->jumlah = $c;
            $this->pembayaran = $d;
            $this->total = $e;
        }
    }
    class pembayaran extends gofud
    {
        
        
        public function bayar()
        {
            
            if ($total >= 250000) {
                $diskon = (($total * 15) / 100);
            } else {
                $diskon = (($total * 10) / 100);
            }
            return $diskon;
        }
    }
}

$gofud = new pembayaran ($nama, $harga, $jumlah, $pembayaran);
echo "Nama : " . $gofud->nama . "<br>";
echo "Harga : " . $gofud->harga . "<br>";
echo "Jumlah Pesanan : " . $gofud->jumlah . "<br>";
echo "Jenis Pembayaran : " . $gofud->pembayaran . "<br>";
echo "Total :" . $gofud->bayar();

 

?>
    </fieldset>
</body>
</html>
