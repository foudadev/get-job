<?php
include 'includes/header.html';
// include 'login/login_functions/database.php';
 include 'includes/navbar.html';
// Connection Information
$servername = "localhost";
$username = "user";//sql username
$password = "Password123#@!";//sql password
$dbname = "jobs";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


?>
<html>

   <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="includes/posts.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  < <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
    <!------ Include the above in your HEAD tag ---------->
    <?php
    /*
$sql = "SELECT c_name,c_details FROM dashboard";
$result = mysqli_query($conn, $sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>

    <div class="container">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-body">
                    <section class="post-heading">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object photo-profile" src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g" width="40" height="40" alt="...">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="anchor-username"><h4 class="media-heading">Bayu Darmantra</h4></a>
                                        <a href="#" class="anchor-time">51 mins</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <a href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
                            </div>
                        </div>
                    </section>
                    <section class="post-body">
                        <p> <?php echo $row['c_details'];?></p>
                    </section>
                    <section class="post-footer">
                        <hr>
                        <div class="post-footer-option container">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i> Like</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Comment</a></li>
                                <li><a href="#"><i class="glyphicon glyphicon-share-alt"></i> Share</a></li>
                            </ul>
                        </div>
                        <div class="post-footer-comment-wrapper">
                            <div class="comment-form">

                            </div>
                            <div class="comment">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object photo-profile" src="http://0.gravatar.com/avatar/38d618563e55e6082adf4c8f8c13f3e4?s=40&d=mm&r=g" width="32" height="32" alt="...">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="#" class="anchor-username"><h4 class="media-heading">Media heading</h4></a>
                                        <a href="#" class="anchor-time">51 mins</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
        <?php }}
    */


    ?>
</html>
<?php
include 'includes/footer.html';
?>
