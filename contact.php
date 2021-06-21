<!DOCTYPE html>
<html>
    <head>
        <title>Afpa</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Boostrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!--Font awesome icons-->
        <script src="https://kit.fontawesome.com/eaf337826d.js" crossorigin="anonymous"></script>

        <!-- Style -->
        <link rel="stylesheet" href="main.css">

        <!-- JS -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
        <script src="main.js" defer></script>

        <!-- jQuery, Popper.js, Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>
    </head>
    <body>
<!-- Contact -->
            <div class="container-fluid green-bg">
                <div class="row">
                    <div class="col-12">
                        
                        <h1 id="contact">Contact</h1>
                        
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6"> <!-- Info centre -->
                            
                                <H3>Nos coordonnées</H3>
                                <div class="card left">
                                    
                                        <ul class="list-unstyled">
                                            <li><i class="fas fa-map-marker-alt"></i>244 Route de Turin</li>
                                            <li>06300 Nice</li>
                                        </ul>
                                </div>
                                <H3>Votre formateur</H3>
                                <div class="card left">
                                    
                                        <ul class="list-unstyled">
                                            <li>Benoit Hézard</li>
                                            <li><i class="fas fa-phone"></i>04 93 27 63 00</li>
                                            <li><i class="fas fa-envelope"></i><a href="mailto: benoit.hezard@afpa.fr" target="_blank">benoit.hezard@afpa.fr</a></li>
                                        </ul>
                                    </li>
                                </div>
                        </div>
                        <div class="col-12 col-lg-6">
            
                                <h3>Vos coordonnées</h3>
                                <form method="post" action="traitement.php">
                                    <fieldset>
                                        
                    
                                        <div class="info_form">
                                            
                                            <label for="prénom" autofocus required><i class="fa fa-id-card" aria-hidden="true"></i>Nom Prénom :</label>
                                           
                                            <input type="text" name="prénom" id="prénom" placeholder="Ex: Elton John" class="no_border"/>
                                            <hr>
                                        
                                            
                                            <label for="email" required><i class="fas fa-envelope"></i>E-mail :</label>
                                            
                                            <input type="email" name="email" id="email" class="no_border"/>
                                            <hr>
            
                                            <label for="tel"><i class="fas fa-phone"></i>Téléphone :</label>
                                            
                                            <input type="tel" name="tel" id="tel" class="no_border"/>
                                            <hr>
            
                                            <label for="msg" required><i class="fa fa-comment" aria-hidden="true"></i>Votre message :</label>
                                            <textarea name="msg" id="msg"></textarea>
                                        
                                    
                                
                                            <input type="submit" value="Envoyer" />
                                        </div>
                                    </fieldset>
                                    
                                </form>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php include("footer.php"); ?>
        <!-- JS -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/slide.js"></script>
    </body>
</html>