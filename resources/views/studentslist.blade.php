<div class="card mb-3">
  <img src="https://s3-ap-southeast-1.amazonaws.com/riichme/blogs/thumbnail/931/5a318e53efe97d3663aeaa63a6291388.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
   
    
<table class="table">
  <thead class="thead-light">
    <tr>
      
      <th scope="col">ONE</th>
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
        <!-- <a href="#" class="btn btn-sm btn-danger">Delete</a> -->
      </td>
      

    </tr>
    @endforeach
      </tbody>
</table>


  </div>
</div>



