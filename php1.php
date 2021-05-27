 <!DOCTYPE html>
<html lang="fr"> 
<head>
    <title>Photos by Giuliani</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css1.css"/>
</head>
<body>
    <?php
		
		if(isset($_POST['nombre'])) {
		
			$nombre = $_POST['nombre'];
			$texte = $_POST['texte'];
			
			if ($nombre==3	)
				{echo "VRAI";}
				else	
				{echo "FAUX, la bonne réponse était 3";}
		}
    ?>
</body>
</html>