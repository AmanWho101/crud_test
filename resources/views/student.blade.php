<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <title>Laravel 9 ajax crud</title>
</head>
<body>
    <div class="container">
      <label class="form-input-label" for="">
        <h1><span class="badge badge-info">Add Student</span></h1>
        </label>
        <div class="card">
          <div class="card-body">
            {!! Form::model($student, [ 'method' => 'POST','route' => ['student.store'] ]) !!}
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'name']) !!}
          
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
          
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
              {!! Form::close() !!}
          </div>
        </div>
        <div>
          <div>
            <div>

            </div>
          </div>
        </div>
        <label for="">
          <h1><span class="badge badge-pill badge-info">List of Student</span></h1>
        </label>
        
        <div class="card">
          <div class="card-body">
            
            <table class="table table-striped data-table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>@php($i=1) 
                  @foreach ($student as $stud)
                  <tr>
                         
                      
                      <th scope="col">{{$i}}</th>
                      <th scope="col">{{$stud->name}}</th>
                      <th scope="col">{{$stud->email}}</th>
                      <th scope="col">{{$stud->created_at}}</th>
                      <th scope="col"><div class="btn-group" role="group">
                          <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          
                          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            {!! Form::model($student, [ 'method' => 'delete','route' => ['student.destroy', $stud->id] ]) !!}
                            {{Form::button('<i class="fa fa-trash"></i> Delete', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
                            {!! Form::close() !!}
                            {!! Form::model($student, [ 'method' => 'GET','route' => ['student.edit', $stud->id] ]) !!}
                            {{Form::button('<i class="fa fa-trash"></i> Edit', ['class' => 'btn btn-danger', 'type' => 'submit'])}}
                            {!! Form::close() !!}
                          </div>
                        </div></th>                   
                    </tr>
                    @php($i++)
                  @endforeach
                  
                  
                  
                
              </tbody>
            </table>
          </div>
        </div>
    
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    
</script>
</html>