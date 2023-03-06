<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="stylesswitcher.js">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <title>JJ</title>
    <script src="stylesswitcher.js"></script>
</head>
<body>
    <main>
        
        <header>
            <nav>
                <ul>
                    <li><a href="#Contact">CONTACT</a></li>
                    <li><a href="#Sports">SPORTS</a></li>
                    <li><a href="#About">ABOUT</a></li>
                    <li><a href="#Home">HOME</a></li>
                    <li style="float:left"><a  href="#Home">
                              <img src="img/logo.png" width="25px" height="25px" overflow="hidden" margin-top="-6px" margin-left="10px"></a></li>
                  </ul> 
            </nav>
        </header>

 <div id="contact">
    <div class="container">
      <div class="row">
      
          <br>
          <h1 class = "post-comments">Post Your Comments Here</h1>
		  
		  <div class = "errors">
            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>
			</div>

            <form action="/lab3/ci4/public/comments" method="post">
                <?= csrf_field() ?>

        <section class="forms">
           <form method="post" action="insert.php">
                <h2 class="sports-h2-tag">COMMENT HERE</h2>
                <input type="text" class="form-control" placeholder="Username" id="Username" name="Username"><br>
                <input type="email" class="form-control" placeholder="email" id="email" name="email"><br>
                <textarea name="feedback" class="form-control" id="feedback" placeholder="feedback"></textarea><br>
                <button type="submit" class="btn">Send Feedback</button>
           </form>
        </section>
				
        </div>

      </div>

    </div>

</div>
 


    
    