<!-- Fixed navbar -->
<style type="text/css">
    .background{
        background-color: #028abf !important;
    }
</style>
  <div class="container">
        <div class="navbar-header-">
              <?php if (isset($_SESSION['username'])) { ?>
                  <p align="right">Anda masuk sebagai <strong><?=$_SESSION['username']?></strong> | <?=$_SESSION['ket']?></p>
            <?php  } else {

            }?>

        </div>
    </div>
