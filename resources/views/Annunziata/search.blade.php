<html>
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <title>Search Results</title>
</head>
<body>
@if($total==null AND $specific!=null)
    <table>
        <tr>
            <th>Record Id</th>
            <th>Student Number</th>
            <th>Date of Payment</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>{{$specific->id}}</td>
            <td>{{$specific->student_number}}</td>
            <td>{{$specific->date_of_payment}}</td>
            <td>{{$specific->amount}}</td>
        </tr>
    </table>
@elseif($specific==null AND $total!=null)
    <p><b>TOTAL FEES:</b>{{$total}}</p>
@endif
<p><a href="/">Back</a></p>
</body>
</html>