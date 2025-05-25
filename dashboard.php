<?php
session_start();
if (!isset($_SESSION["email"])) {
    header("Location:Index.php");
}
?>


<?php include_once 'header.php'; ?>

<?php include_once 'side_nav.php'; ?>


<div class="col-md-10 admin_display_data">
    <h3 style="text-align: center"> Welcome Rohan</h3>
    <img id="loader" src="images/loader.png" width="100px">



    <div class="container">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-6">
            <div class="col">
                <div class="card h-60 rounded-4 shadow-lg gradient1 dash_card">
                    <div class="h-100 pb-3 text-white text-shadow-1">
                        <h4>All Approved Teachers</h4>
                        <h1 >5 </h1>





                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-60 rounded-4 shadow-lg gradient1 dash_card">
                    <div class="h-100 pb-3 text-white text-shadow-1">
                        <h4>All Pending Teachers</h4>

                        <h1>4 </h1>




                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-60 rounded-4 shadow-lg gradient1 dash_card">
                    <div class="h-100 pb-3 text-white text-shadow-1">
                        <h4>All Rejected Teachers</h4>


                        <h1>3 </h1>



                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-60 rounded-4 shadow-lg gradient1 dash_card">
                    <div class="h-100 pb-3 text-white text-shadow-1">
                        <h4>All Approved Students</h4>

                        <h1>5 </h1>




                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-60 rounded-4 shadow-lg gradient1 dash_card">
                    <div class="h-100 pb-3 text-white text-shadow-1 ">
                        <h4>All Pending Students</h4>

                        <h1>6</h1>




                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-60 rounded-4 shadow-lg gradient1 dash_card">
                    <div class="h-100 pb-3 text-white text-shadow-1">
                        <h4>All Rejected Students</h4>

                        <h1>4 </h1>




                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        var page = window.location.href.split("#")[1];
        if (page) {
            $(".admin_display_data").load(page);
        }
    });
</script>

<!-- // $(document).ready(function() {
    //     page = window.location.href.split("#")[1];
    //     //window.history.pushState("Details", "Title", page);
    //     console.log(window.location.href.split("#"));

    //     // console.log(page);

    //     $(".admin_display_data").load(page);
    // }); -->


<!-- <script>
    $(document).ready(function() {
        page = window.location.href.split("#")[1];
        if (page == [1]) {
            // page = window.location.href.split("#")[1];
            $(".admin_display_data").load(page);
        }
        //window.history.pushState("Details", "Title", page);
    });
</script> -->






<?php include_once 'Footer.php'; ?>