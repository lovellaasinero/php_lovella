<?php require_once 'include/header.php'?>
<body>
    <h1 style="text-align: Center">REGISTRATION FORM FOR IT CONFERENCE</h1>
    <form><br>
    <br>
  <div class="form-group">
    <label for="exampleInputName">Enter First Name</label>
    <input type="name" class="form-control" id="exampleInputName"
    id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputLastname1">Enter Last Name</label>
    <input type="last name" class="form-control" id="exampleInputLastname1">
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
    <label for="exampleInputSpecialty1">Specialty</label><br>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this to select options</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
            <option value="5">Five</option>
        </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="Email Address" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputContactnumber1">Contact Number</label>
    <input type="Contact Number" class="form-control" id="exampleInputContactnumber1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php require_once 'include/footer.php'?>
