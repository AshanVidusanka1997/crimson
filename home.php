<?php
include "header.php";
?>



<?php
if (isset($_GET['url'])) {
    if ($_GET['url'] == "driver") {
        include_once './driver.php';
    }
    if ($_GET['url'] == "view_p") {
        include_once './view_pend.php';
    }
    if ($_GET['url'] == "view_fleet") {
        include_once './view_freed.php';
    }
    if ($_GET['url'] == "new") {
        include_once './new.php';
    }
    if ($_GET['url'] == "polyline") {
        include_once './polyline.php';
    }
}
?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php
include_once './footer.php';
?>

</body>
</html>
<script src="js/jquery.js"></script>
<script src="js/fileinput.js"></script>
<script>
    $("#file-3").fileinput({
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-sm",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
    });
</script>
<script src="js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/app.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>


<script src="js/comman.js"></script>

<script>
    $("body").addClass("sidebar-collapse");



</script>    


<?php
include 'login.php';
?>
