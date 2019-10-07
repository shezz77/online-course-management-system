<!DOCTYPE html>
<html>

<?php
@include_once './../include/head.php';
?>

<body>

<?php
@include_once './../include/header.php';
@include_once './../include/sidebar.php';

?>
<marquee id="marquee"  onmouseover="this.stop();" onmouseout="this.start();"> </marquee>
<div>
    <div class="child1">
        <img src="../images/child1.jpg" alt="child1" width=550px;height=400px;/>
    </div>
</div>


<div>
    <div class="school2">

        <img src="../images/school2.jpg" alt="child1" width=550px;height=400px;/>
    </div>

</div>

<marquee id="marquee" onmouseover="this.stop();" onmouseout="this.start();"> </marquee>

<div>
    <div class="picbox">
        <div class="picbox1">
            <img src="../images/library.jpg" alt="library" width=300px;height=100px;/>
            <div><a href="library.html">Library</a></div>
        </div>

        <div class="picbox1">
            <img src="../images/canten.jpg" alt="canten" width=300px;height=100px;/>
            <div><a href="facilities.html">Facilities</a></div>
        </div>

    </div>

    <div style="clear:both"><br></div>


    <?php
    @include_once './../include/footer.php';
    ?>

</body>
</html>
