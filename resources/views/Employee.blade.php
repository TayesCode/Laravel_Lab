<!DOCTYPE html>
<html>
<head>
<title>Laravel  Form</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                <h2>Laravel Form </h2>
            </div>
            <div class="card-body">
                <form name="employee" id="employee" method="post" action="{{url('/insertData')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>        
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror form-control">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>        
                    <div class="form-group">
                        <label for="exampleInputEmail1">Age</label>
                        <input type="number" id="age" name="age" class="@error('age') is-invalid @enderror form-control">
                        @error('age')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>        
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact No</label>
                        <input type="number" id="contact_no" name="contact_no" class="@error('contact_no') is-invalid @enderror form-control">
                        @error('contact_no')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>  
</body>
</html>