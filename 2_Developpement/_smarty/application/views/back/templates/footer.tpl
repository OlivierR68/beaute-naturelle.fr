</main>
<footer class="py-4 bg-light mt-auto">
	<div class="container-fluid">
		<div class="d-flex align-items-center justify-content-between small">
			<div class="text-muted">Tous droits réservés &copy; beauté-naturelle.fr {date("Y")}</div>
			<div>
				<a href="{site_url('pages/politique')}">Politique de confidentialités</a>
				&middot;
				<a href="{site_url('pages/mentions')}">Mentions légales</a>
			</div>
		</div>
	</div>
</footer>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{base_url('assets/js/scripts.js')}"></script>
{literal}
<script>
	$('#confirm-delete').on('show.bs.modal', function(e) {
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

	});
</script>
{/literal}
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="{base_url('assets/demo/datatables-demo.js')}"></script>
</body>
</html>
