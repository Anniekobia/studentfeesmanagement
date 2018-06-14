<html>
    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
        <title>Register Student</title>
    </head>
    <body>
    @if ($errors->any())
    <div id="errors">
        @foreach ($errors->all() as $error)
        <p>{{ $error }}</p></br>
        @endforeach
    </div>
    @endif
    <div id="divform">
        <h2>Register here</h2>
        <form method="post" action="{{url('/SubmitStudent')}}">
            {{ csrf_field() }}
            <label>Student Number</label></br>
            <input type="number" name="studentnumber"></br>
            <label>Student FullName</label></br>
            <input type="text" name="studentname"></br>
            <label>Date of birth</label></br>
            <input type="date" name="dateofbirth"></br>
            <label>Address</label></br>
            <input type="text" name="address"><br><br>
            <button type="submit">SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><a href="/">Back</a></label>
        </form>
    </div>
    </body>
</html>