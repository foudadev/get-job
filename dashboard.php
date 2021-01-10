<?php
include 'includes/header.html';
include 'includes/navbar.html';
include 'login/login_functions/database.php';

    if (isset($_POST['upload'])){
        $c_name      =   $_POST['c_name'];
        $city        =   $_POST['city'];
        $job_section =   $_POST['job_section'];
        $c_contact   =   $_POST['c_contact'];
        $c_details   =   $_POST['c_details'];

        $query = "INSERT INTO dashboard (c_name,city,job_section,c_mail,c_details) VALUES ('$c_name', '$city', '$job_section','$c_contact','$c_details')";
        db_connect($query);
    }
?>


<form action="dashboard.php" method="post" class="row g-3">
    <div class="col-md-6">
        <label  class="form-label">Company Name</label>
        <input type="text" class="form-control" name="c_name" >
    </div>
    <div class="col-6">
        <select id="inputState" class="form-select" name = "city">
            <option value=" "           >Choose Your City ?</option>
            <option value="cairo" >Cairo</option>
            <option value="alex" >Alex</option>
            <option value="aswan" >Aswan</option>
            <option value="asyut" >Asyut</option>
        </select>

    </div>

    <div class="col-md-12">
        <!-- <label for="inputState" class="form-label">. Job</label>-->
        <select id="inputState" class="form-select" name = "job_section">
            <option value=" "           >Choose Job You Want ?</option>
            <option value="programming" >Programming and Development</option>
            <option value="marketing"   >E-Marketing</option>
            <option value="video"       >Video Editing</option>
            <option value="design"      >Design</option>
            <option value="audios"      >Audios</option>
            <option value="writing"     >Writing and Translating</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Email contact" aria-label="Recipient's username" aria-describedby="basic-addon2" name="c_contact">
        <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>

    <div class="input-group">
        <span class="input-group-text">About Your CO.</span>
        <textarea class="form-control" aria-label="With textarea" name="c_details"></textarea>
    </div>

    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-primary" name="upload" value="upload"> Upload Job </button>
    </div>
</form>

<?php
include 'includes/footer.html';
?>
