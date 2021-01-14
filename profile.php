<?php
include 'includes/header.html';
include 'login/login_functions/database.php';
if (isset($_POST['save'])){
    $city       = $_POST['city'];
    $job        = $_POST['job_section'];
    $gender     = $_POST['gender'];
    $career     = $_POST['career_level'];
    $exp        = $_POST['experience'];
    $time       = $_POST['time'];
    $contact    = $_POST['contact'];
    $details    = $_POST['details'];

    $query = "INSERT INTO profile (city,job,gender,current_level,exp,type_time,email,details) VALUES ('$city','$job','$gender','$career','$exp','$time','$contact','$details')";
    db_connect($query);
}
?>

<form action="profile.php" method="post" class="row g-3">
 <!--   <div class="col-md-6">
        <label  class="form-label">Company Name</label>
        <input type="text" class="form-control" name="c_name" >
    </div> -->
    <br>
    <div class="col-md-6">
        <select id="inputState" class="form-select" name = "city">
            <option value=" "           >Choose Your City ?</option>
            <option value="cairo"    >Cairo</option>
            <option value="alex"     >Alex</option>
            <option value="aswan"    >Aswan</option>
            <option value="asyut"    >Asyut</option>
            <option value="mansoura" >Mansoura</option>
            <option value="luxor"    >Luxor</option>
            <option value="sohag"    >Sohag</option>
            <option value="giza"     >Giza</option>
            <option value="faiyum"   >Faiyum</option>
            <option value="port said">Port Said</option>
            <option value="damietta" >Damietta</option>
            <option value="sharqia"  >Sharqia</option>
            <option value="monufya"  >Monufya</option>
            <option value="suez"     >Suez</option>
            <option value="charbia"  >Charbia</option>
            <option value="dakahlia" >Dakahlia</option>
        </select>

    </div>

    <div class="col-6">
        <!-- <label for="inputState" class="form-label">. Job</label>-->
        <select id="inputState" class="form-select" name = "job_section">
            <option value=" "           >Whats Your Job ?</option>
            <option value="programming" >Programming and Development</option>
            <option value="marketing"   >E-Marketing</option>
            <option value="video"       >Video Editing</option>
            <option value="design"      >Design</option>
            <option value="audios"      >Audios</option>
            <option value="writing"     >Writing and Translating</option>
        </select>
    </div>

    <div class="col-md-6">
        <select id="inputState" class="form-select" name = "gender">
            <option value=" "           >Gender ?</option>
            <option value="male"    >Male</option>
            <option value="female"     >Female</option>
        </select>
    </div>

    <div class="col-md-6">
        <select id="inputState" class="form-select" name = "career_level">
            <option value=" "           >Whats Your Current Career Level ?</option>
            <option value="student"    >Student</option>
            <option value="entry_level"     >Entry Level</option>
            <option value="manager"     >Manager</option>
        </select>
    </div>

    <div class="col-md-6">
        <select id="inputState" class="form-select" name = "experience">
            <option value=" "           > How MAny Years Of EXP. ?</option>
            <option value="1"    >0-1</option>
            <option value="2"     >1-2</option>
            <option value="3"     >2-3</option>
            <option value="4"     >4-5</option>
        </select>
    </div>


    <div class="col-md-6">
        <select id="inputState" class="form-select" name = "time">
            <option value=" "           >What Types Of Job ?</option>
            <option value="full_time"    >Full Time</option>
            <option value="part_time"     >Part Time</option>
        </select>
    </div>


    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Email contact" aria-label="Recipient's username" aria-describedby="basic-addon2" name="contact">
        <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>

    <div class="input-group">
        <span class="input-group-text">About Your Skills !</span>
        <textarea class="form-control" aria-label="With textarea" name="details"></textarea>
    </div>

    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-primary" name="save" value="save"> Update Your Profile </button>
    </div>
</form>






<?php
include 'includes/footer.html';
?>
