<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Bootstrap template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="ikdev1.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<script type="text/javascript">
  			class Objet{
	etat=0;
	constructor(id,designation,quantite,volume,categorie){
		this.id=id;
		this.designation=designation;
		this.quantite=quantite;
		this.volume=volume;
		this.categorie=categorie;
	}
	choisirQuantite(quantite){
		if(quantite>0){
			this.quantite=quantite;
		}
		else{
			document.writeln("Choisir un nombre superieur à 0");
		}
	}
	static selectionnerObjet(obj){
		objChoisis.push(obj);
	}
	static calculVolume(objChoisis){
		let volume=0;
		for(let element of objChoisis){
			volume+=(element.volume*element.quantite);
		}
		document.write(volume);
	}
}
	let obj1 = new Objet(1,"Chaise de petit déjeuner / tabourets",1,0.4,"cuisine");
	let obj2 = new Objet(2,"Table de petit déjeuner",1,0.8,"cuisine");
	let obj3 = new Objet(3,"Siège de banc",1,0.6,"cuisine");
	let objChoisis=[obj1,obj2,obj3];
	let obj4 =new Objet(4,"Poubelle à pédale",1,0.2,"cuisine");
	Objet.selectionnerObjet(obj4);
	obj1.choisirQuantite(5);
	obj2.choisirQuantite(1);
	obj3.choisirQuantite(6);
	obj4.choisirQuantite(10);
	// Objet.calculVolume(objChoisis);
	//let obj1 =new Objet(,,,,);

  	</script>
    <div class="container">
    	<div class="row">
    		<div class="col-md-4">Rechercher un objet</div>
    		<div class="col-md-4"></div>
    	</div>
    	<div class="row">
    		<div class="col-md-4">Sélectionner une piece </div>
    		<div class="col-md-8">Sélectionner les objets que vous avez à déménager</div>
    	</div>
    	<div class="row">
    		<div class="col-md-4">
    			<table>
    				<tr><td>Buanderie</td></tr>
    				<tr><td>Bureau</td></tr>
    				<tr><td>Cartons</td></tr>
    				<tr><td>Chambre</td></tr>
    				<tr><td>Cuisine</td></tr>
    				<tr><td>Entrée</td></tr>
    				<tr><td>Garage</td></tr>
    				<tr><td>Jardin</td></tr>
    			</table>
    		</div>
    		<div class="col-md-8">
    			<script type="text/javascript">
    				for (var e of objChoisis) {
    					document.writeln(e.designation);
    				}
    			</script>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-12">
    			<label>VOLUME TOTAL ESTIME</label>
    			<input type="button" name="" value="VALIDER">
    			<input type="button" name="" value="REMETTRE A ZERO">
    			<script>
    			
    			</script>
    		</div>
    	</div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>