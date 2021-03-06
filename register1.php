<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Welcome to 3go chat </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
       
        
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
              
                <span class="right">
                    <a>
                        <strong></strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Welcome to  <span>3go chat</span></h1>
				<nav class="codrops-demos">
					
					
				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="register.php" method="POST"> 
                                <h1>Register on 3go</h1> 
                                  <p> 
                                    <label for="name" class="uname" data-icon="u" > Your name </label>
                                    <input id="name" name="name" required type="text" />
                                </p>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your username </label>
                                    <input id="username" name="username" required type="text" />
                                </p>
                                <p> 
                                    <label for="username" class="uname" data-icon="e" > Your Email </label>
                                    <input id="username" name="email" required type="text" />
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required type="password"  /> 
                                </p>
                                 <p> 
                                    <label for="password2" class="youpasswd" data-icon="p"> Confirm password </label>
                                    <input id="password2" name="password2" required type="password"  /> 
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit" value="Register" name="submit" /> 
								</p>
                                <p class="change_link">
									Already Registered ?
									<a href="login1.php" class="to_register">Login</a>
								</p>
                            </form>
                        </div>
