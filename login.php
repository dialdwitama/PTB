<?php
// Pada halaman login, set session atau cookie saat pengguna berhasil login
session_start();
$_SESSION["login"] = true; // atau setcookie("login", true);

?>

<html>
    <head>
    <meta charset="UTF-8">
        <link rel="icon" href="img/kemdikbud.png">
        <title>SI PTB</title>
    
        <style type="text/css">
            .background{
                background-color: #028abf !important;
            }

            *{
                font-family: Arial, Helvetica, sans-serif;
            }

            body {
                background-image: url('img/nature.jpg');
			    background-repeat: no-repeat;
			    background-size: cover;
            }

            .container {
                display: flex;
                width: 300px;
                background-color: white;
                padding: 40px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
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
                padding: 10px 0;
                font-size: 16px;
                color: #000000;
                margin-bottom: 30px;
                border: none;
                border-bottom: 2px solid #028abf;
                outline: none;
                background-color: transparent;
            }

            .form-group label {
                position: absolute;
                top: 0;
                left: 0;
                font-size: 16px;
                color: grey;
                pointer-events: none;
                transition: all 0.5s ease;
            }

            .form-group input:focus ~ label,
            .form-group input:valid ~ label {
                top: -20px;
                left: 0;
                color: grey;
                font-size: 12px;
            }

            .form-group button {
                border: none;
                font-size: 14px;
                cursor: pointer;
                text-align: center;
                margin-top: 20px;
            }

        </style>
        </head>

        <body>

        <div class="container">
            <div class="row">
            
                <!--akhir colomn kedua-->
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

                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <img src="img/LLDIKTI4-Logo2bc.png">
                            <!--<h3 class="panel-title">Login Sistem</h3>-->
                        </div>
                        <div class="panel-body">
                            
                            <form class="form-horizontal" action="proses_login.php" method="post">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="text" name="user" class="form-control input-sm"
                                        placeholder="" required="" autocomplete="off"/>
                                        <label>Username</label>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="password" name="pwd" class="form-control input-sm"
                                        placeholder="" required="" autocomplete="off"/>
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" name="login" value="login"
                                                class="background"><span class="fa fa-unlock-alt"></span>
                                            Login 
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>

                </div>
                    <?php } ?>
            </div>
        </div>
                </body>
