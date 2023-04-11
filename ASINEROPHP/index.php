<?php require_once 'include/header.php'?>
<body>
    <h1 style="text-align: Center">REGISTRATION FORM FOR IT CONFERENCE</h1>
    <form method="GET" action="success.php"><br>
    <br>
  <div class="form-group">
    <label for="firstname">Enter First Name</label>
    <input required type="text" class="form-control" id="firstname" name="firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Enter Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
  </div>
  <div class="form-group">
    <label for="birthday">Birth date</label><br>
    <input type="text" class="form-control" id="datepicker" name="birthday"> 
    <p>Animations:<br>
  <select id="anim">
    <option value="show">Show (default)</option>
    <option value="slideDown">Slide down</option>
    <option value="fadeIn">Fade in</option>
    <option value="blind">Blind (UI Effect)</option>
    <option value="bounce">Bounce (UI Effect)</option>
    <option value="clip">Clip (UI Effect)</option>
    <option value="drop">Drop (UI Effect)</option>
    <option value="fold">Fold (UI Effect)</option>
    <option value="slide">Slide (UI Effect)</option>
    <option value>None</option>
  </select>
</p>
  </div>
  
  <div class="form-group">
    <label for="Specialty">Specialty</label><br>
        <select class="form-select" aria-label="Default select example" name="Specialty">
            <option selected>Open this to select options</option>
            <option value="Application Development">Application Development</option>
            <option value="Software Developer/Engineer">Software Developer/Engineer </option>
            <option value="Website Design">Website Design</option>
            <option value="Database Administrator">Database Administrator</option>
            <option value="IT Support">IT Support</option>
        </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input required type="text" class="form-control" id="emailaddress" name="emailaddress">
  </div>
  <div class="form-group">
    <label for="exampleInputContactnumber1">Contact Number</label>
    <input required type="text" class="form-control" id="contact number" name="contactnumber">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require_once 'include/footer.php'?>
