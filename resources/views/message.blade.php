<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('/css/message.css')}}">
    <script src=" https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <title>Document</title>
</head>
<body>
    <form action="" id="usermessage">
        @csrf
        <div class="message-box">
            <div class="message">
                <input type="text" name="usermessage" id="usermessage" placeholder="Enter your message">
                <button type="submit" ><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
        </div>
    </form>
    <script>
$(document).ready(function(){
 
    $("button").click(function(s){
        s.preventDefault();

        $.ajax({
        headers:'X-CSRF-TOKEN',
        url: "insert",
	    method:"POST",
        data:$("#usermessage").serialize(),
        
        success: function(){
	console.log("Data Inserted sucessfully");
	// $('#id of element where to post message of sucess').load('#id of element where to post message of sucess');
},

error:function(e){
	console.log(e);
    
}

    });
});
                 
});

</script>

</body>
</html>