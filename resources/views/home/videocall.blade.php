<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lucas, you are being helped by Ansh Gupta</h1>
    <div style="display:flex; justify-content:center;">
    
        <div style="display:flex; ">
            <div style="text-align:center">
                <video autoplay width='200px' height='300px' controls >
                    <source src="{{$video_url}}">
                </video>
                
            </div>
            <div>
                <div style="border-style:dotted;border-width:thin">
                    <h4>Chat</h4>
                    <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    </ul>
                </div>
                <textarea rows=5 cols=50></textarea>
                <button height="100px">Send</button>
            </div>
        </div>
        <br><br>
    </div>
    <form action='/endvideocall' style="text-align:center">
        <button type="submit">End videocall</button>
    </form>
</body>

<script>
    remainingTime = () => {

    }
</script>
</html>