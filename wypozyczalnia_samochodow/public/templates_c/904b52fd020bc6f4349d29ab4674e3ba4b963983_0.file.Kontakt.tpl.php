<?php
/* Smarty version 3.1.33, created on 2025-01-19 09:17:54
  from '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/Kontakt.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_678cb532cd21f9_08371801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '904b52fd020bc6f4349d29ab4674e3ba4b963983' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/wypozyczalnia_samochodow/app/views/Kontakt.tpl',
      1 => 1736708776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678cb532cd21f9_08371801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_395341793678cb532cc5480_90288748', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_395341793678cb532cc5480_90288748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_395341793678cb532cc5480_90288748',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<!doctype html>
<html lang="en">
  <head>
    <title>Contact Form #07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="wrapper">
              <div class="row no-gutters">
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="contact-wrap w-100 p-md-5 p-4 py-5">
                    <h3 class="mb-4">Write us</h3>
                    <div id="form-message-warning" class="mb-4"></div>
                    <div id="form-message-success" class="mb-4">
                      Your message was sent, thank you!
                    </div>
                    <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Message"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12 mt-3">
                          <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                            <div class="submitting"></div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6 d-flex align-items-stretch">
                  <div class="info-wrap w-100 p-md-5 p-4 py-5 img">
                    <h3>Contact information</h3>
                    <p class="mb-4">We're open for any suggestion or just to have a chat</p>
                    <!-- Poprawiona sekcja z ikonami i tekstem -->
                    <div class="dbox w-100 d-flex align-items-start mb-3">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-map-marker"></span>
                      </div>
                      <div class="text" style="padding-left: 20px;"> <!-- Dodano padding-left do tekstu -->
                        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center mb-3">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-phone"></span>
                      </div>
                      <div class="text" style="padding-left: 20px;"> <!-- Dodano padding-left do tekstu -->
                        <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center mb-3">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-paper-plane"></span>
                      </div>
                      <div class="text" style="padding-left: 20px;"> <!-- Dodano padding-left do tekstu -->
                        <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                      </div>
                    </div>
                    <div class="dbox w-100 d-flex align-items-center">
                      <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-globe"></span>
                      </div>
                      <div class="text" style="padding-left: 20px;"> <!-- Dodano padding-left do tekstu -->
                        <p><span>Website:</span> <a href="#">yoursite.com</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/popper.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.js"><?php echo '</script'; ?>
>
  </body>
</html>







<?php
}
}
/* {/block 'content'} */
}
