<!DOCTYPE html>
<html lang="pt_br">
<?php

session_start();

        // se usuario nao registrado, redireciona p/ validacao
        //
        //         if(!isset($_SESSION['usu']))
        //
        //                         header("Location: index.php?op=err");
?>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta charset="UTF-8">
	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<!-- jQuery (necessario para os plugins Javascript do Bootstrap)-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<title>B2W DIGITAL | VMWARE ADMIN</title>

</head>
<body oncontextmenu="return false">
<script type="text/javascript">
$(document).ready(function(){
    $(".tip-top").tooltip({
        placement : 'top'
    });
    $(".tip-right").tooltip({
        placement : 'right'
    });
    $(".tip-bottom").tooltip({
        placement : 'bottom'
    });
    $(".tip-left").tooltip({
        placement : 'left'
    });
});
</script>
<header>
        <div id="logo-wrap">
            <span class="logo"></span>
        </div>
        <form method="post" action="logout.php" name="frmsair"> 
        <div class="form-group">
                <div div class=text-right>
                    <input type="submit"value="Sair" class="btn btn-primary" name="">
                </div>
    </header>
    </br></br></br>
<h3 class="text-center">VMWARE ESXi - Hosts </h3>
</br></br></br></br>
<div class="i-am-centered">
<div class="row justify-content-center">
	<div class="col-sm-">
<div class="container btn-group-vertical">
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.168.200.205" href="http://10.168.200.205" target="_blank">BWBITESX01</a>
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.168.200.204" href="http://10.168.200.204" target="_blank">BWBITESX04</a>
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.168.200.207" href="https://10.168.200.207/ui/#/login" target="_blank">BWBITESX03</a>
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.168.200.202" href="http://10.168.200.202" target="_blank">BWBITESX05</a>
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.147.200.199" href="http://10.147.200.199" target="_blank">BWSEDESX01</a>
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.156.200.202" href="http://10.156.200.202" target="_blank">BWSERESX01</a>
</div>
</div>
<div class="col-sm-">
<div class="container btn-group-vertical">
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.21.1.55" href="http://10.21.1.55" target="_blank">BWVMUOL01 </a>
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.21.1.61" href="http://10.21.1.61" target="_blank">BWVMUOL02 </a>
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.21.1.59" href="http://10.21.1.59" target="_blank">BWVMUOL03 </a>
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.21.1.60" href="http://10.21.1.60" target="_blank">BWVMUOL04</a>
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.21.1.58" href="http://10.21.1.58" target="_blank">BWVMUOL05</a>
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.146.200.199" href="http://10.146.200.199" target="_blank">BWOSCSX01</a>
	<a class="btn btn-success btn-lg" data-toggle="tooltip" class="tip-top" title="10.170.200.199" href="http://10.170.200.199" target="_blank">BWITVESX01</a>
</div>
</div>
</div>
</div>
<footer>
    <div id="footer-container" class="section-container">
    <p>&copy; 2018 - <strong><a href="http://www.b2wdigital.com" target="_blank">B2W DIGITAL</a></strong> - INFRACORPB2W</p>
    </div>
</footer>
</body>
</html>