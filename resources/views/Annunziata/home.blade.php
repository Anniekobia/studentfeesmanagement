<html>
    <head>
        <title>Home</title>
    </head>
    <body>
    <div id="divform">
        <p>Click here to register a new <a href="/Register">Student</a></p>
        <p>Click here to record <a href="/Pay">Fees</a> payment</p>
        <form method="post" action="{{url('/SearchResult')}}">
            {{ csrf_field() }}
            <label>Enter admission number to view students fee payment record</label>
            <input type="number" placeholder="Search" name="search">
            <button type="submit" name="action" value="one">GO</button><br>
            <label>View total amount of fees paid by students</label>
            <button type="submit" name="action" value="all">GO</button>
        </form>
    </div>
    </body>
</html>