<!-- Fixed navbar -->
<style type="text/css">
    .background{
        background-color: #1E90FF !important;
    }
</style>
<nav style="background: #028abf" class="navbar navbar-inverse navbar-fixed-top">

    <div class="container">
        <div class="navbar-header">
            <button style="background: #028abf" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span  class="icon-bar"></span>
            </button>

            <a style="background: #028abf" class="navbar-brand" href="?page=utama">Sistem Informasi PTB LLDIKTI4</a>
        </div>
        <div style="background: #028abf" id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="background: #028abf">
                <li><a href="?page=utama" style="background: #028abf">Home</a></li>
                
                <?php if(!isset($_SESSION['username'])) { ?>
                <li>
                    <a style="background: #028abf" class="" href="login.php">Login</a>
                </li>
                <?php } ?>

                <?php if(isset($_SESSION['level']) && $_SESSION['level']==1) { ?>
                <li class="dropdown">
                    <a style="background: #028abf" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola Data <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="?page=arsip&actions=tampil">PTS Bermasalah</a></li>
                        <li><a href="?page=peminjaman&actions=tampil">Rekapitulasi Monev</a></li>
                    </ul>
                </li>
                <li><ul><a></a></li></ul>
                <?php } ?>
                    <?php if (isset($_SESSION['username'])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>