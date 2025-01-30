<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}



.title{
    text-align: center;
    margin-top: 2rem;
    text-transform: capitalize;  
}

.container .row p {
    text-transform: capitalize;

}
p{
    font-size: 1.1rem;
}
    </style>
</head>
<body class="bg-info">

    <div class="title text-dark">
        <h1 class="p-1">welcome To</h1>
        <h2 class="p">Asset Registration system</h2>
    </div>
    
    <div class="container container-fluid mt-md-2">
            <div class="row">
                <div class="col-md-8">
                   <p class="h2 mt-5"> this is Registration system</p>
                   <p class="h6 mb-4">this system built-in four programming language HTML, CSS, bootstrap, PHP </p>
                   <div class="content">
                    <p class="text-dark ">Modern university registration systems are designed to be secure and scalable, ensuring that they can handle the high volume of users during peak registration
                     periods. They integrate with broader institutional systems, including student records, financial aid, and academic advising platforms, to provide a seamless experience. 
                     These systems often support self-service features, allowing students to make changes to their schedules, drop courses, or add classes without administrative intervention.
                      Moreover, analytics tools embedded within these systems enable universities to track enrollment patterns, predict demand for specific courses, and make data-driven decisions about 
                      resource allocation. Overall, a well-designed registration system is fundamental to the academic success of students and the operational efficiency of educational institutions.</p>
                   </div>

                </div>
                <div class="col-md-4 my-md-5 bg-info rounded shadow-lg">
                    <form action="home.php" method="POST" class="form p-3 ">
                        <h2 class="form-tex text-primary">Login form</h2>
                        <label for="username" class="form-label">Enter Username or Email</label><br>
                        <div class="input-group mb-md-3">
                            <span class="input-group-text"><i class="fa-solid fa-envelope" style="color: blue;"></i></span>
                            <input type="email" class="form-control" name="EMAIL" placeholder="Example@gmail.com"><br>
                        </div>
                        <label for="password" class="form-label">Enter Password</label><br>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-lock" style="color: blue;"></i></span>
                            <input type="password" class="form-control" name="PASSWORD" placeholder="password123"><br>
                        </div>
                            <div class="checking d-flex justify-content-between p-3">
                                <div class="checkbox">
                                    <input type="checkbox" name="checkbox">
                                    <label for="remember">Remember me</label>
                                </div>
                                <div class="forget">
                                    <a href="#" class="text-decoration-none">Forget</a>
                                </div>
                            </div>
                            <input type="submit" name="Login" value="Login"  class="form-control btn btn-primary">                         
                           
                    </form>
                </div>
            </div>
    </div>
    

    <script src="js/bootstrap.min.js"></script>
</body>
</html>