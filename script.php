<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="https://kit.fontawesome.com/dc16081fd9.js" crossorigin="anonymous"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>
<script src="js/wareplanJS.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#barang').DataTable({
            "lengthMenu": [5, 10, 15, 20],
            "pageLength": [5]
        });
    });
    $(document).ready(function() {
        $('#history').DataTable({
            "order": [
                [0, "desc"]
            ],
            "lengthMenu": [5, 10, 15, 20],
            "pageLength": [5]
        });
    });
</script>