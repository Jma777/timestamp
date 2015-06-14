<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">

	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<title>Le Timestamp 🕑</title>
</head>
<body>
	<div class="wrapper">
		<header>
			<h1>Le Timestamp</h1>
			<time id="time">----------</time>
		 	<p id="punchline">Le timestamp, c'est l'age de ton père en secondes.</p>
		</header>

		<section class="main-container">
			<article>
				<h3>L'histoire du Timestamp</h3>
				<p>
					Plus sérieusement, ce timestamp est issue de la norme POSIX qui a défini le Jeudi 1er Janvier 1970 en tant que date de début. Elle est aussi plus connue sous l'ère de l'UNIX. Que signifie cette valeur qui s'incrémente ? Simplement le nombre de secondes depuis le Jeudi 1er Janvier 1970. Je sais pas si vous avez cette sensation, mais pour moi le timestamp serait une définition parfaite du temps qui passe nous rappelons alors que chaque seconde est un moment qui passe.
				</p>
				<p>Aufait, vous savez que le timestamp était de <span id="initial-time"></span> secondes quand vous êtes arrivés sur cette page ?</p>
				<p>
					Outre le fait de représenter le temps, le timestamp est aujourd'hui utilisé dans plusieurs algorithme tel que les différents moyens d'authentication par code (ex: l'Authenticator de Blizzard, ou celui de Google) ou alors pour générer un chiffre aléatoire, du fait qu'une machine n'est pour l'instant pas capable de choisir un nombre entre 1 et 3 autre que par le hasard mathématique qui a besoin d'un événement changeant.
				</p>
			</article>
		</section>
	</div>
	<footer>
		<p>Crée un jeudi, à 1434180880</p>
		<a href="#" class="tehjma">Julien Morizot</a>
	</footer>
	<script>

	 	var timestamp 	= Math.round((new Date()).getTime() / 1000),
	 		timestampFutur = timestamp,
	 		timeElement = document.getElementById("time"),
	 		punchline   = document.getElementById("punchline"),
	 		state 		= 1;

	 	document.getElementById("initial-time").innerHTML = timestamp;

	 	timeElement.onclick = function() {
	 		if(state === 1) {
	 			state = 2;
	 			updateTimestamp(2);
	 		} else if(state === 2 ) {
	 			state = 3;
	 			updateTimestamp(3);
	 		} else {
	 			state = 1;
	 			updateTimestamp(1);
	 		}
	 	}

	 	setInterval(function() {
	 		updateTimestamp(state);
	 	}, 1000);

	 	function updateTimestamp(state) {
	 		if(state === 2) {
	 			timeElement.innerHTML = 32503680000 - timestampFutur++;
	 			punchline.innerHTML   = "Ceci est le temps restant avant le Mercredi 1er Janvier de l'an <strong>3000</strong>.";
	 		}
	 		else if(state === 3 ) {
	 			timeElement.innerHTML = '18/05/2033<span class="teh-hour">à 3h33</span>';
	 			punchline.innerHTML   = "Ceci est la date où le timestamp aura atteint les <strong>2'000'000'000</strong>.";
	 		} else {
	 			timeElement.innerHTML = timestamp++;
	 			punchline.innerHTML   = "Le timestamp, c'est l'age de ton père en secondes.";
	 		}
	 	}

	</script>
</body>
</html>