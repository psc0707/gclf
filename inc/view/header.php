<html>
<head>
	<title>GCLF - <?php echo $pageTitle; ?></title>
	<link href="<?= __BASE_URL__ ?>css/styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<header>
		<div class="links">
			<a href="<?= __BASE_URL__ ?>index.php">Accueil</a>&nbsp;&nbsp;
			<a href="<?= __BASE_URL__ ?>index.php?section=form_categorie">Gérer les catégories</a>&nbsp;&nbsp;
			<a href="<?= __BASE_URL__ ?>index.php?section=form_film">Ajouter un film</a>&nbsp;&nbsp;
		</div>
		<div class="search">
			<form action="<?= __BASE_URL__ ?>index.php" method="get" id="headerSearch">                                
				<input type="hidden" name="section" value="catalogue" />
				<input type="text" class="searchInput" placeholder="Titre, acteur, etc." name="q" value="" />
				<input type="submit" class="searchSubmit" value="Rechercher"/>
			</form>
		</div>
		<div class="clearer"></div>
	</header>