<html>
    <head>
        <title>Pay Fees</title>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
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
        <h2>Record Payment</h2>
        <form method="post" action="{{url('/SubmitPayment')}}">
            {{ csrf_field() }}
            <label>Student Number</label></br>
            <input type="number" name="studentnumber"></br
            <label>Date of Payment</label></br>
            <input type="date" name="dateofpayment"></br>
            <label>Amount</label></br>
            <input type="number" name="amount"><br><br>
            <button type="submit">SUBMIT</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><a href="/">Back</a></label>
        </form>
    </div>
    </body>
</html>