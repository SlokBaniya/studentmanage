@include('navbar')

<div class="row justify-content-center">
<div class="col-md-7">
<div class="container-fluid mt-4">

     

   <div class="card mb-3">
  <img src="http://www.thestudentassembly.org.uk/wp-content/uploads/2018/01/students-and-family-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
    <div class="row header-container justify-content-center">
    Insert Student Details</h5>
    </div>
    
    <form action ="{{ url('/update/'.$student->id)}}" method="post">
            @csrf
                    <div class="form-group">
                        <label>CNE</label>
                        <input name="cne" value="{{ $student->cne}}" type="text" class="form-control" placeholder="Enter your cne" required>
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input name="firstName" value="{{ $student->firstName}}" type="text" class="form-control"  placeholder="Enter your First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input name="secondName" value="{{ $student->secondName}}" type="text" class="form-control"  placeholder="Enter your Last Name" required>
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input name="age"  value="{{ $student->age}}" type="text" class="form-control"  placeholder="Enter your Age" required>
                    </div>
                    <div class="form-group">
                        <label>Speciality</label>
                        <input name="speciality" value="{{ $student->speciality}}" type="text" class="form-control"  placeholder="Enter your speciality" required>
                    </div>
                    <input type="submit" class="btn btn-info" value="Update">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </form>
  </div>
</div>
</div>
     
           
        </div>