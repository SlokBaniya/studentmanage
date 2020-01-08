@include('navbar')
@if(\Session::has('msg'))
    <div class = 'alert alert-success'>
        <p>{{ \Session::get('msg') }}</p>
    </div></br>
    @endif 
    <div class="row justify-content-center">
    <div class="col-md-9">
    
    <div class="container-fluid mt-4">
   

     
 <div class="card mb-9">
  <img src="http://www.thestudentassembly.org.uk/wp-content/uploads/2018/01/students-and-family-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> 
    <div class="row header-container justify-content-center"> View Student Details</h5></div>

    <table class="table">
  <thead class="thead-light">
    <tr>
      
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  @foreach($students as $students)
    <tr>
      
      <td>{{ $students->cne}}</td>
      <td>{{ $students->firstName}}</td>
      <td>{{ $students->secondName}}</td>
      <td>{{ $students->age}}</td>
      <td>{{ $students->speciality}}</td>
      <td>
        <!-- <a href="#" class="btn btn-sm btn-info">Show</a> -->
        <a href="{{ url('/edit/'.$students->id)}}" class="btn btn-sm btn-warning">Edit</a>
        <a href="{{url('/delete/'.$students->id)}}" class="btn btn-sm btn-danger">Delete</a>
      </td>
      

    </tr>
    @endforeach
      </tbody>
</table>

</div>
</div>
</div>
</div>
     
           
        </div>