<script src="<?= BASEURL; ?>/js/jquery/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.min.js"></script>
<!-- Data table js -->
<script src="<?= BASEURL; ?>/js/dataTables/jquery.dataTables.min.js"></script>
<script src="<?= BASEURL; ?>/js/dataTables/dataTables.bootstrap4.min.js"></script>
<!-- Particles js -->
<script src="<?= BASEURL; ?>/js/particles/particles.min.js"></script>
<script src="<?= BASEURL; ?>/js/particles/app.js"></script>
<!-- CRUD -->
<script src="<?= BASEURL; ?>/js/data/students.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.dataTables').DataTable()
        $('.alert').fadeIn().delay(6000).fadeOut()
        $('[data-toggle="tooltip"]').tooltip()
        $('.loading_bg').fadeToggle(2000)

    })
</script>

</body>
</html>