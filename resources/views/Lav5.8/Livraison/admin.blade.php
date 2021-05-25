@extends('Livraison.layouts.main')
@section('title','Administration de la livraison des pizzas')
@section('content')

	<div class="container">
		<div class="row">

			{{--			utilisateur--}}
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Utilisateurs</h3>
					</div>
					<div class="panel-body">
						<form>

								<div class="form-group">
									<label for="nom">Nom : </label>
									<input type="text" class="form-control" id="nom" name="NOM" placeholder="Nom ...">
								</div>
								<div class="form-group">
									<label for="prenom">Prénom :</label>
									<input type="password" class="form-control" id="prenom" name="PRENOM" placeholder="Prénom ...">
								</div>



								<div class="form-group">
									<label for="adresse">Adresse : </label>
									<input type="text" class="form-control" id="adresse" name="ADRESSE" placeholder="Adresse ...">
								</div>

							   <div class="form-group">
									<label for="solde">Solde : </label>
									<input type="text" class="form-control" id="solde" name="compte" placeholder="Montant du Solde ...">
								</div>
								<div class="form-group">
									<label for="telephone">Telephone :</label>
									<input type="tel" class="form-control" id="telephone" name="TELEPHONE" placeholder="Telephone ...">
								</div>

							<div class="form-group">
									<label for="email">Email :</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email ...">
								</div>

							     <div class="form-group">
									<label for="utilisateur">Nom d'utilisateur :</label>
									<input type="text" class="form-control" id="utilisateur" name="name" placeholder="Utilisateur ...">
								</div>


							      <div class="form-group">
									<label for="utilisateur">Mot de Passe :</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe ...">
								</div>


							<div class="form-group">
								<label for="role">Role : </label>
								<select  class="form-control" name="ID_ROLE" id="role">
									<option value="">Admin</option>
									<option value="">Utilisateur</option>
								</select>

							</div>



							<div class="form-group">
								<label for="photo">Image</label>
								<input type="file" id="photo" class="form-control">
							</div>

							<button type="submit" class="btn btn-default">Envoyer</button>
							<button type="reset" class="btn btn-warning">Annuler</button>
						</form>
					</div>

		</div>


				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Les ingredients pour chaque pizza</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="nompizza">Nom de Pizza</label>
								<select name="NOMPIZZA" class="form-control" id="nompizza">
									<option value="">Pizza</option>
								</select>
							</div>

							<div class="form-group">
								<label for="ingredients">Ingredients</label>
								<select name="ID" class="form-control" id="ingredients">
									<option value="">Ingredients</option>
								</select>

							</div>



							<button type="submit" class="btn btn-default">Ajouter</button>
							<button type="reset" class="btn btn-warning">Annuler</button>
						</form>
					</div>
				</div>
			</div>

			{{--			role--}}
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Roles</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="role">Role</label>
								<input type="text" name="ROLE" class="form-control" id="role" placeholder="Role ...">
							</div>

							<button type="submit" class="btn btn-default">Ajouter</button>
							<button type="reset" class="btn btn-warning">Annuler</button>
						</form>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Pays</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="pays">Pays</label>
								<input type="text" name="PAYS" class="form-control" id="pays" placeholder="Pays ...">
							</div>

							<button type="submit" class="btn btn-default">Ajouter</button>
							<button type="reset" class="btn btn-warning">Annuler</button>
						</form>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Ville</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="ville">Ville</label>
								<input type="text" name="VILLE" class="form-control" id="ville" placeholder="Ville ...">
							</div>

							<button type="submit" class="btn btn-default">Ajouter</button>
							<button type="reset" class="btn btn-warning">Annuler</button>
						</form>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Ingredients</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="ingredients">Ingredients</label>
								<input type="text" name="INGREDIENTS" class="form-control" id="ingredients" placeholder="Ingredients ...">
							</div>

							<button type="submit" class="btn btn-default">Ajouter</button>
							<button type="reset" class="btn btn-warning">Annuler</button>
						</form>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Tarifs</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="taille">Taille</label>
								<input type="text" name="TAILLE" class="form-control" id="taille" placeholder="Taille ...">
							</div>

							<div class="form-group">
								<label for="coefficient">Coefficient</label>
								<input type="text" name="COEFFICIENT" class="form-control" id="coefficient" placeholder="Coefficient ...">
							</div>

							<button type="submit" class="btn btn-default">Ajouter</button>
							<button type="reset" class="btn btn-warning">Annuler</button>
						</form>
					</div>
				</div>


				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Vehicule</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="immatriculation">Numéro d'immatriculation</label>
								<input type="text" name="IMMATRICULATION" class="form-control" id="immatriculation" placeholder="Immatriculation ...">
							</div>

							<div class="form-group">
								<label for="marque">Marque</label>
								<input type="text" name="MARQUE" class="form-control" id="marque" placeholder="Marque ...">
							</div>

							<div class="form-group">
								<label for="type">Type</label>
								<select class="form-control" name="TYPE" id="type">
									<option value="vehicule">Vehicule</option>
									<option value="moto">Moto</option>
								</select>
							</div>

							<div class="form-group">
								<label for="photo">Image</label>
								<input type="file" class="form-control" name="IMAGES" id="photo">
							</div>

							<button type="submit" class="btn btn-default">Ajouter</button>
							<button type="reset" class="btn btn-warning">Annuler</button>
						</form>
					</div>
				</div>


				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Pizza</h3>
					</div>
					<div class="panel-body">
						<form>
							<div class="form-group">
								<label for="nompizza">Nom de Pizza</label>
								<input type="text" name="NOMPIZZA" class="form-control" id="nompizza" placeholder="Nom de Pizza ...">
							</div>

							<div class="form-group">
								<label for="prix">Prix</label>
								<input type="text" name="PRIX" class="form-control" id="prix" placeholder="Prix ...">
							</div>


							<div class="form-group">
								<label for="photo">Image</label>
								<input type="file" class="form-control" name="IMAGESPIZZA" id="photo">
							</div>

							<button type="submit" class="btn btn-default">Ajouter</button>
							<button type="reset" class="btn btn-warning">Annuler</button>
						</form>
					</div>
				</div>


			</div>
		</div>
	</div>

@endsection
