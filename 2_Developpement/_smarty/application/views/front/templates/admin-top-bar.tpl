<!-- TOP BAR ADMIN -->
<div class="bg-dark">
	<nav class="navbar navbar-expand-lg navbar-dark container">
		<a class="navbar-brand" href="{base_url('dashboard')}"><i class="fas fa-user-cog"></i> {$smarty.session.profil_libelle}</a>
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent2">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a  class="nav-link" href="{base_url('dashboard')}"><i class="fas fa-tachometer-alt mr-2"></i>Tableau de bord</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{base_url('images/back')}"><span class="bn_cube">0</span> Événements</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="{base_url('events/back')}"><span class="bn_cube">524</span> Images</a>
				</li>


			</ul>
		</div>
	</nav>

</div>
