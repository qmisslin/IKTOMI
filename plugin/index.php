<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
	<style>
		@keyframes turn {
		    from { transform: rotate(0deg);}
		    to {transform: rotate(360deg);}
		 }
		#Roue_Arriere{
			animation: turn 5s linear 0s infinite;
		}
		#Roue_Avant{
			animation: turn 5s linear 0s infinite;
		}

	</style>
	<body>
		
		<h1>Bonjour, voici un plugin php pour Iktomi</h1>
		<p>POur le moment, ce plugin affiche simplement du texte, pour pouvoir tester les réléchargement de plugins dans l'application Iktomi</p>
	</body>
</html>