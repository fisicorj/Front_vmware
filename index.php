<!DOCTYPE html>
<html lang="pt_br">
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
    <script language="JavaScript" type="text/javascript" src="funcs.js"></script>
	<title>B2W DIGITAL | VMWARE ADMIN</title>
    <script type="text/javascript" language="javascript">
<!-- //
function ClearForm(){
    document.form.reset();
}
// -->
</script>
</head>
<body oncontextmenu="return false" onload="ClearForm()">
        <header>
                <div id="logo-wrap">
                    <span class="logo"></span>
                </div>
            </header>
<br><br><br><br>
<h3 class="text-center">Login</h3>
<br><br><br><br>
<div class="form-group d-flex justify-content-center"> </div>
    
    <div class="container ">
    
        <form method="post" action="verif.php" name="form" AUTOCOMPLETE='ON' onSubmit="return valida()"> 
    
            <div class="form-group">
                <div class="   col-md-6 offset-md-3">
                    <label > Usuário </label>
                    <input type="text" name="usu" class="form-control " placeholder=" Usuário " required="" >    
                </div>
            </div>
    
            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label> Senha </label>  
                    <input type="password" name="senha" class="form-control" placeholder="Senha" required="" >
                </div>
            </div>      
    
            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <input type="submit"value="Entrar" class="btn btn-primary" name="">
                </div>
        </form> 
    </div>
</div>
<footer>
    <div id="footer-container" class="section-container">
    <p>&copy; 2018 - <strong><a href="http://www.b2wdigital.com" target="_blank">B2W DIGITAL</a></strong> - INFRACORPB2W</p>
    </div>
</footer>
</body>
</html>