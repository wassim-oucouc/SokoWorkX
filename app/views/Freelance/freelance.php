
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation - ByteWebster</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css'>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .panel-container {
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            max-width: 600px;
            width: 90%;
        }

        h3 {
            color: #2c3e50;
            font-size: 1.5rem;
            margin-bottom: 2rem;
            line-height: 1.4;
        }

        .btn {
            background-color: #3498db;
            border: none;
            border-radius: 6px;
            color: white;
            cursor: pointer;
            font-size: 1rem;
            padding: 15px 30px;
            transition: background-color 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #2980b9;
        }

        .fas {
            font-size: 1.1rem;
        }

        @media (max-width: 480px) {
            .panel-container {
                padding: 25px;
            }

            h3 {
                font-size: 1.2rem;
            }

            .btn {
                padding: 12px 24px;
            }
        }
    </style>
</head>
<body>
    <div id="panel" class="panel-container">
        <h3>Nous Avons Bien Reçu Votre Inscription<br>Votre Candidature Est En Validation Par Notre Équipe Dédiée</h3>
        <a href="/">
            <button class="btn" id="send">
                <i class="fas fa-paper-plane"></i>
                Retour à la Page d'Accueil
            </button>
        </a>
    </div>
</body>
</html>


