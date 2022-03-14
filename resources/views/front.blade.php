<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .human-brain:hover{
            transform:rotate(360deg)
        }
        .calender{
          opacity: 0.3;
          position: fixed;
          top: 0;
          left: 0;
          color:white;
          
        }
        .date{
            opacity: 1;
            background-color:#389BFE;
        }

    </style>
</head>
<body class="bg-black">
    <img class="w-full h-screen human-brain" src="{{ asset('brains/brain_PNG38-removebg-preview.png') }}" alt="">
    <div class="calender h-screen w-full bg-black flex justify-evenly ">
       <button class="date h-20 w-20 flex justify-center items-center bg-black text-white font-bold font-serif border border-white">1</button>
    </div>
</body>
</html>