
        <?php $title = "Inscription";?>
        <!-- Masthead-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>
         <?= isset($title)
            ? $title . WEBSITE_NAME
            : WEBSITE_NAME. ',Simple, Rapide et Efficace!';
        ?>
        </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body id="page-top">
         <?php include('partials/_nav.php'); ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100 well">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center well ">
                    <div class="col-lg-8 align-self-end">
                    <fieldset>   <legend> <h1 class="text-white font-weight-bold text-center">Devenez Dès à présent membre!</h1></legend>
                        <hr class="divider" />
                    </div >
                <?php include 'partials/_errors.php';?>

                    <form data-parsley-validate method="post" class="well col-md-6" autocomplete="off">
                        <!--Name field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="name" required="required" value="<?= get_input('name') ?>"placeholder="Your Name *">                        
                        </div>

                           <!--Pseudo field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="pseudo" >Pseudo:</label>
                            <input type="text" name="pseudo" data-parsley-minlength="3" class="form-control" id="pseudo" required="required" value="<?= get_input('pseudo') ?>"placeholder="Your Pseudo *">
                        </div>

                           <!--Email field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="email" >Email:</label>
                            <input type="email" name="email" data-parsley-trigger="keypress" class="form-control" id="email" required="required" value="<?= get_input('email') ?>" placeholder="Your Email *">
                        </div>

                           <!--Password field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="password" >Password:</label>
                            <input type="password" name="password" class="form-control" id="password" required="required" placeholder="Your Password *">
                        </div>

                           <!--password_confirm field-->
                        <div class="form-groupe">
                            <label class="control-label text-white font-weight-bold" for="password_confirm" >Confirm Password:</label>
                            <input type="password" name="password_confirm" class="form-control" id="password_confirm" required="required" placeholder="Confirm Your Password *">
                        </div>
                         
                        <input type="submit" name="register" class="btn btn-primary mt-3" value="Valid">
                     
                    </form>
                    </fieldset>
                 
                </div>
            </div>
        </header>
    </body>
          
       

  
        <!-- Services-->
       
        <!-- Portfolio-->

      
        <!-- Call to action-->
       
        <!-- Contact-->
        <?php include('partials/_footer.php'); ?>

