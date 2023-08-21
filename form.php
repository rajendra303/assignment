<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
<style>
.main{
	max-width: 500px;
	margin: 0 auto;
	padding: 20px;
	background-color: #f4f4f4;
	border-radius: 10px;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
h1{
	text-align: center;
	margin-bottom: 20px;
}

lable{
	font-weight: bold;
}
input[type="email"],input[type="tel"],input[type="text"],textarea {
	width: 100%;
	padding: 10px;
	margin-bottom: 15px;
	border: 1px solid #ccc;
	border-radius: 5px;
}

input[type="submit"] {
    background-color: #007bff;
    color: white;
    border:none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
}
input[type="submit"]:hover{
	background-color: #0056b3;
}
div{
	margin-bottom: 15px;
}
</style>



</head>
<body>
<section>
<div class="main">
	<form action="conn.php" method="post">
		<h1>Form</h1>
		  
		    <label for="fullname"> Full Name:</label><br>
            <input type="text" id="fullname" name="fullname" placeholder="Enter your name" required><br>
        
            <label for="phone"> Phone Number:</label><br>
            <input type="tel" id="phone" name="phone" placeholder="91*******" pattern="[0-9]{10}"><br>

        
            <label for="email"> Email:</label><br>
            <input type="email" id="email" name="email" placeholder="Enter your email" required><br>
        

            <label for="subject"> Subject:</label><br>
            <input type="text" id="subject" name="subject" placeholder="Enter your subject" required><br>
        

            
            <label for="message"> Message:</label><br>
            <textarea name="message"id="message" name="message"  rows="7" cols="25" maxlength="300" placeholder="Write your Message" required></textarea><br>
        
            <input type="submit" name="submit">
	</form>
</div>
</section>
</body>
</html>