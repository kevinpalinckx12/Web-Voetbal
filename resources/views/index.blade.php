
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to C3: Schoolsport</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <style>

        
            body {
                background-color: #f8f9fa;
                font-family: Arial, sans-serif;
            }
            .container {
                margin-top: 50px;
            }
            .welcome-header {
                text-align: center;
                margin-bottom: 30px;
            }
            .welcome-image {
                display: block;
                margin: 0 auto;
                max-width: 100%;
                height: auto;
            }
            .welcome-text {
                text-align: justify;
                margin-top: 20px;
            }
            .welcome-text p {
                margin-bottom: 20px;
            }
            .header {
                background-color: #343a40;
                padding: 10px 0;
                color: white;
                text-align: center;
            }
            .header a {
                color: white;
                margin: 0 15px;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div class="header">
        <nav>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            </nav>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <h1 class="h1">Welcome</h1>
                    <img class="m-5" src="images/soccerfield.webp" alt="Soccer field">
                </div>
                <div class="col-4">
                    <p class="m-5">
                        Bij C3: Schoolsport geloven we in de kracht van sport om de jeugd te inspireren en aan te moedigen. Onze reis begon met een opwindende uitdaging van Stichting Schoolsport, een organisatie die scholen helpt bij het organiseren van sporttoernooien. We werden aan boord gehaald door 4S, en nu staan we aan het begin van een opwindend avontuur om een innovatieve applicatie te ontwikkelen die het plannen en beheren van sporttoernooien naar een nieuw niveau tilt.
                    </p>
                    <p class="m-5">
                        Deze web-applicatie zal niet alleen de administratieve last verminderen, maar ook een revolutie teweegbrengen in hoe scholen sportevenementen organiseren. Geen gedoe meer met papierwerk en Excel-sheets; wij brengen alles samen in een intuïtieve en geavanceerde digitale omgeving.
                    </p>
                    <p class="m-5">
                        Als bezoeker van C3: Schoolsport sta je aan de frontlinie van deze opwindende ontwikkeling. We nodigen je uit om deel uit te maken van ons ontwikkelteam en samen met ons deze nieuwe stap te zetten. Of je nu een programmeur, ontwerper of sportliefhebber bent, hier vind je een gemeenschap die gedreven is om een positieve impact te maken.
                    </p>
                    <p class="m-5">
                        Dus, stap binnen, verken onze visie en ontdek hoe we sporttoernooien transformeren. Laten we samen bouwen aan een toekomst waarin sportorganisatie soepel, digitaal en verrijkend is voor iedereen!
                    </p>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php
    exit;
    ?>

<!-- User is logged in, redirect to the home page -->
