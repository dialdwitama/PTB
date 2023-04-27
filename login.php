<?php
// Pada halaman login, set session atau cookie saat pengguna berhasil login
session_start();
$_SESSION["login"] = true; // atau setcookie("login", true);

?>

<html>
    <head>
    <meta charset="UTF-8">
        <link rel="icon" href="img/kemdikbud.png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>SI PTB</title>
    
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

            .background{
                background-color: #028abf !important;
            }

            *{
                font-family: Arial, Helvetica, sans-serif;
            }

            body {
                /*background-image: url('img/nett.jpg');*/
			    background-repeat: no-repeat;
			    background-size: cover;
            }

            .container{
               display: flex;
               justify-content: center;
               align-items: center;
               height: 100vh;
            }

            #kolom1 {
                height: 625px;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                
            }

            #kolom2 {
                display: grid;
                height: 625px;
                place-items: center;
                background-color: #E0ECF1;
                color: #028abf;
            }

            #kolom1 img {
                width: 90%;
                margin: 10px;
            }

            #kolom2 img {
                width: 100%;
                padding: 20px;
                
                
            }

            #kolom1 h6 {
                padding: 0;
                font-family: 'Poppins', sans-serif;
                font-size: 16px;
            }

            #kolom2 h5 {
                font-family: 'Poppins', sans-serif;
                font-size: 16px;
            }

            .panel {
                width: 350px;
                background-color: white;
                padding: 30px;
                position: absolute;
                top: 50%; /* Mengubah nilai top menjadi 50% */
                left: 25%; /* Mengubah nilai left menjadi 50% */
                transform: translate(-50%, -50%);
                text-align: center;
                display: flex; /* Menambahkan display flex */
                flex-direction: column; /* Mengatur flex direction menjadi column */
                justify-content: center; /* Mengatur justify content menjadi center */
                align-items: center; /* Mengatur align items menjadi center */
}

        
            .panel img {
                width: 50%;
                margin-bottom: 50px;
            }

            .panel h3{
                text-align: center;
                margin-bottom: 30px;
                color:  #028abf;
                font-size: 16px;
            }

            .form-group {
                position: relative;
                
            }

            .form-group input {
                width: 100%;
                padding: 10px 20px;
                font-size: 16px;
                color: #000000;
                margin-bottom: 30px;
                border: none;
                border-bottom: 2px solid #028abf;
                outline: none;
                background-color: transparent;
                font-family: 'Poppins', sans-serif;
                margin-top: 17px;
            }

            .form-group label {
                position: absolute;
                top: 0;
                left: 0;
                font-size: 16px;
                color: grey;
                pointer-events: none;
                transition: all 0.5s ease;
                font-family: 'Poppins', sans-serif;
            }

            .form-group input:focus ~ label,
            .form-group input:valid ~ label {
                top: -20px;
                left: 0;
                color: grey;
                font-size: 12px;
                font-family: 'Poppins', sans-serif;
            }

            .form-group button {
                border: none;
                font-size: 14px;
                cursor: pointer;
                text-align: center;
                margin-top: 20px;
                font-family: 'Poppins', sans-serif;
                
            }


            .background {
                background-color: #028abf;
                color: #ffffff;
                padding: 10px 125px;
                cursor: pointer;
            }

            .home {
                white-space: nowrap;
                color: #ffffff;
                background-color: #5EBC4E;
                padding: 10px 85px;
                border-radius: 0;
            }

        </style>
        </head>

        <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 p-3 bg-white text-black" id="kolom1">
                    
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <img src="img/LLDIKTI4-Logo2bc.png">
                        <h6>Silahkan login terlebih dahulu</h6>
                    </div>
                        <form class="form-horizontal" action="proses_login.php" method="post">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" name="user" class="form-control input-sm"
                                     required="" autocomplete="off"/>
                                    <label>Username</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="password" name="pwd" class="form-control input-sm"
                                     required="" autocomplete="off"/>
                                    <label>Password</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" name="login" value="login"
                                      class="background">
                                        Login
                                    </button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="button" class="home" id="home-page">Halaman Depan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    </div>
                
                <div class="col-sm-6 p-3" id="kolom2">
                    <img src="img/bg3.png">
                    <h5>Sistem Informasi Perguruan Tinggi Bermasalah</h5>
                </div>

                    <div class="col-sm-3 col-xs-12">
                    <!--Jika terjadi login error tampilkan pesan ini-->
                    <?php if(isset($_GET['error']) ) {?>
                    <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
                    <?php }?>

                    <?php if (isset($_SESSION['username'])) { ?>
                    <div class="alert alert-info">
                        <strong>Welcome <?=$_SESSION['nama']?></strong>
                    </div>
                    <?php
                } else { ?>
                </div>
                    <?php } ?>
            </div>

            <script>
                document.getElementById('home-page').addEventListener('click', function() {
                    window.location.href = 'index.php';
                });
            </script>
        </div>
                </body>
