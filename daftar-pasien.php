<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- TITLE -->
        <title>RS BSI Margonda | Daftar Data Pasien</title>

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
        <div class="container-fluid justify-content-between align-self-center">
            <div class="container mt-5 mb-5">
                <div class="row mb-3">
                    <div class="col-3">
                        <h3>Daftar Nama Pasien:</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID Pasien</th>
                                    <th scope="col">Nama Pasien</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Ali Akbar</td>
                                    <td>Depok</td>
                                    <td>12/30/1998</td>
                                    <td>Jl. Pahlawan No.13, Kec.Bojong gede, Kab.Bogor</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ilham Tjahyadi</td>
                                    <td>Depok</td>
                                    <td>12/30/1990</td>
                                    <td>Jl. Juanda No.16, Kota Depok</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTENT END -->
            
        <!-- FOOTER START -->
        <?php include('include-footer.php');?>
        <!-- FOOTER END -->
            
        <!-- BOOTSTRAP 5 SCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
        