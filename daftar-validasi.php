<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- TITLE -->
        <title>RS BSI Margonda | Pendaftaran Pasien</title>

        <link rel="icon" href="icons/bsi.png" />

        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
            integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />

        <!-- Bootstrap 5 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />

        <!-- Native CSS -->
        <link rel="stylesheet" href="css/style.css" />

        <!-- Script -->
        <script type="text/javascript">
            function terkirim() {
                alert('Terkirim');
            }
        </script>
    </head>

    <body>
        <!-- NAVBAR START -->
        <?php include('include-navbar.php');?>
        <!-- NAVBAR END -->

        <!-- CONTENT START -->
        <div class="container mb-5 mt-5 border p-4">
            <h3>Validasi Pendaftaran</h3>
            <hr>
            <br>
                <?php 
                    $nik = $_POST['nik'];
                    $nama = $_POST['nama'];
                    $notelp = $_POST['no_telp'];
                    $tempatlahir = $_POST['tempat_lahir'];
                    $tgl = $_POST['tanggal_lahir'];
                    $bln = $_POST['bulan_lahir'];
                    $thn = $_POST['tahun_lahir'];
                    $tanggallahir = $tgl . '-' . $bln . '-' . $thn;
                    $alamat = $_POST['alamat'];
                ?>
            
            <ul>
                <li>
                    <p>NIK : <?php echo $nik;?></p>
                </li>
                <li>
                    <p>Nama : <?php echo $nama;?></p>
                </li>
                <li>
                    <p>No. Telp : <?php echo $notelp;?></p>
                </li>
                <li>
                    <p>Tempat Lahir : <?php echo $tempatlahir;?></p>
                </li>
                <li>
                    <p>Tanggal Lahir : <?php echo $tanggallahir;?></p>
                </li>
                <li>
                    <p>Alamat : <?php echo $alamat;?></p>
                </li>
            </ul>
        </div>
        <!-- Submit/Cancel -->
        <div class="col d-flex justify-content-center">
            <input class="btn btn-outline-success m-2" name="submit" type="submit" value="Kirim" onclick="terkirim()"> 
            <button class="btn btn-outline-danger m-2" onclick="history.back()">Kembali</button>
            <button class="btn border border-dark m-2"><a class="ntv-link link-dark" href="index.php">Beranda</a></button>
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        <?php include('include-footer.php');?>
        <!-- FOOTER END -->
            
        <!-- BOOTSTRAP 5 SCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
        