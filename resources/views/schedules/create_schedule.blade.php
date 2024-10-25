<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create!</h1>
    <div>

        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach
        </ul>


        @endif
    </div>

    <form method="post" action="{{ route('schedule.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="">Name</label>
            <input type="text" name="Pet_Name" placeholder="Pet Name">
        </div>

        <div>
            <label for="">Date to Feed</label>
            <input type="text" name="Date_to_Feed" placeholder="00/00/0000">
        </div>

        <div>
            <label for="">Feed Time</label>
            <input type="text" name="Feed_Time" placeholder="00:00">
        </div>

        <div>
            <label for="">Feeding Amount</label>
            <input type="text" name="Feeding_Amount" placeholder="0">
        </div>

        <div>
            <input type="submit" value="Submit a New Feed">
        </div>

    </form>

</body>
</html>