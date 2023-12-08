<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
    <title>Leverantie Overzicht</title>
</head>

<body>

    <header>
        <a href="<?= URLROOT; ?>" class="logo">
            <i class="ri-home-3-fill"></i>
            <span>TJARDO</span>
        </a>

        <ul class="navbar">
            <li><a href="<?= URLROOT; ?>">Home</a></li>
            <li><a href="<?= URLROOT; ?>/overzicht">Magazijn Overzicht</a></li>
        </ul>

        <div class="main">
            <a href="#" class="user">
                <i class="ri-user-fill"></i>
                Sign In
            </a>
            <a href="#">Register</a>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>

    <div class="container">
        <div class="circle"></div>
        <div class="circle"></div>
        <h1>
            <?= $data['title']; ?>
        </h1>
        <h3>
            Naam Leverancier: <span><?= $data['naamLeverancier']; ?></span>
        </h3>
        <h3>
            Contactpersoon Leverancier: <span><?= $data['contactPersoon']; ?></span>
        </h3>
        <h3>
            Leveranciernummer: <span><?= $data['leverancierNummer']; ?></span>
        </h3>
        <h3>
            Mobiel: <span><?= $data['mobiel']; ?></span>
        </h3>
        <div class="card">
            <div class="ruimte">
                <table>
                    <thead>
                        <th>Naam Product</th>
                        <th>Datum Laatste Levering</th>
                        <th>Aantal</th>
                        <th>Eerstvolgende Levering</th>
                    </thead>
                    <tbody>
                        <?= $data['rows']; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="<?= URLROOT; ?>/js/nav.js"></script>

</body>

</html>