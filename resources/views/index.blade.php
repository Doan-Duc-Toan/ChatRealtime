<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat Application</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<body>
    <div class="app">
        <header>
            <h1>Chat Application</h1>
            <input type="text" name="username" id="username" placeholder="Enter Username...">
        </header>
        <div id="messages">
             
        </div>
        <form id="message_form" action="">
              <input type="text" name="message" id="message_input" placeholder="Message...">
              <button type="submit" id="message_send">Send</button>
        </form>
    </div>
    @vite(['resources/js/app.js'])
    <script src="{{asset('home.js')}}"></script>
</body>

</html>
