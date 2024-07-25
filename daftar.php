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
    </head>

    <body>
        <!-- NAVBAR START -->
        <?php include('include-navbar.php');?>
        <!-- NAVBAR END -->

        <!-- CONTENT START -->
        <div class="container mb-5 mt-5">

            <h1>Form Pendaftaran Pasien:</h1>
            <hr>
            <form id="myForm" class="mt-5 mb-5" action="daftar-validasi.php" method="post">
                <!-- NIK -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="nik-pasien" class="form-label"><b>NIK:</b></label>
                        <input type="text" class="form-control" name="nik" id="nik-pasien" placeholder="Masukkan NIK">
                    </div>
                </div>
                <!-- Nama Pasien -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="nama-pasien" class="form-label"><b>Nama:</b></label>
                        <input type="text" class="form-control" name="nama" id="nama-pasien" placeholder="Masukkan Nama">
                    </div>
                </div>
                <!-- No Telp -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="no-telp" class="form-label"><b>No. Telepon:</b></label>
                        <input type="text" class="form-control" name="no_telp" id="no-telp" placeholder="Masukkan no telepon">
                    </div>
                </div>
                <!-- Tempat Lahir -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="tempat-lahir" class="form-label"><b>Tempat Lahir:</b></label>
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat-lahir" placeholder="Masukkan Tempat Lahir">
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 mb-3 g-3">
                    <!-- Tanggal ahir -->
                    <div class="col">
                        <label for="tanggal-lahir" class="form-label"><b>Tanggal Lahir:</b></label>
                        <select class="form-select" name="tanggal_lahir" id="tanggal-lahir">
                            <option>~ Tanggal Lahir ~</option>
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                $option_value = sprintf("%02d", $i); // Menambahkan 0 di depan angka tunggal
                                echo "<option value='" . $option_value . "'>" . $option_value . "</option>";
                            }
                            ?>
                        </select>
                    </div>


                    <!-- bulan lahir pasien -->
                    <div class="col">
                        <label for="bulan-lahir" class="form-label"><b>Bulan Lahir:</b></label>
                        <select class="form-select" name="bulan_lahir" id="bulan-lahir" >
                            <option>~ Bulan Lahir ~</option>
                            <?php
                            $bulan = array();
                            $bulan[1] = "Januari";
                            $bulan[2] = "Februari";
                            $bulan[3] = "Maret";
                            $bulan[4] = "April";
                            $bulan[5] = "Mei";
                            $bulan[6] = "Juni";
                            $bulan[7] = "Juli";
                            $bulan[8] = "Agustus";
                            $bulan[9] = "September";
                            $bulan[10] = "Oktober";
                            $bulan[11] = "November";
                            $bulan[12] = "Desember";
                            
                            $total_bulan = count($bulan);
                            
                            for ($angka = 1; $angka <= $total_bulan; $angka++) {
                                $value = $bulan[$angka];
                                $angka = sprintf("%02d", $angka);
                                echo "<option value='" . $angka . "'>" . $value . "</option>";
                            }                    
                            ?>
                        </select>
                    </div>
                    
                    <!-- Tahun Lahir -->
                    <div class="col">
                        <label for="tahun-lahir" class="form-label"><b>Tahun Lahir:</b></label>
                        <select class="form-select" name="tahun_lahir" id="tahun-lahir" >
                            <option>~ Tahun Lahir ~</option>
                            <?php
                            $tahun_sekarang = date("Y");
                            for ($tahun = $tahun_sekarang - 100; $tahun <= $tahun_sekarang; $tahun++) {
                                echo "<option value='" . $tahun . "'>" . $tahun . "</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Alamat -->
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="alamat" class="form-label"><b>Alamat:</b></label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                    </div>
                </div>
                <br>

                <!-- Submit/Cancel -->
                <div class="col d-flex justify-content-center">
                    <input class="btn btn-outline-success m-2" name="submit" type="submit" value="Selanjutnya" onclick="return confirmSubmit()"> 
                    <input class="btn btn-outline-danger m-2" type="reset" value="reset"> 
                </div>
            </form>
            <script>
            // Function to confirm form submission
            function confirmSubmit() {
                if (confirm("Apakah Anda sudah yakin?")) {
                // If user clicks "OK", submit the form
                document.getElementById("myForm").submit();
                } else {
                // If user clicks "Cancel", do nothing
                return false;
                }
            }
            </script>
        </div>
        <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        <?php include('include-footer.php');?>
        <!-- FOOTER END -->
            
        <!-- BOOTSTRAP 5 SCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
        