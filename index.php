<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Css/card.css"?t=<?= time(); ?>"/>
    <title>Memory Game</title>
</head>

<body>

    <table border="1">
        <tr>
            <td> <img src="Assets/Pictures/capybara.jpg" alt=""></td>
            <td> <img src="Assets/Pictures/chat_noir.jpg" alt=""></td>
            <td> <img src="Assets/Pictures/chien_de_prairie.jpg" alt=""></td>
        </tr></span>
        <tr>
            <td> <img src="Assets/Pictures/chow_chow.jpg" alt=""></td>
            <td> <img src="Assets/Pictures/marmotte_cadre.jpg" alt=""></td>
            <td> <img src="Assets/Pictures/tigre.jpg" alt=""></td>
        </tr>
        <tr>
            <td> <img src="Assets/Pictures/capybara.jpg" alt=""></td>
            <td> <img src="Assets/Pictures/chat_noir.jpg" alt=""></td>
            <td> <img src="Assets/Pictures/chien_de_prairie.jpg" alt=""></td>
        </tr></span>
        <tr>
            <td> <img src="Assets/Pictures/chow_chow.jpg" alt=""></td>
            <td> <img src="Assets/Pictures/marmotte_cadre.jpg" alt=""></td>
            <td> <img src="Assets/Pictures/tigre.jpg" alt=""></td>
        </tr>
        
    </table>

    <?php
    session_start();

    class Card
    {
        public $id;
        public $name;

        private $mysqli;


        public function __construct($id, $name)
        {
            $this->mysqli = new mysqli('localhost', 'root', '', 'memory');

        }
    }



    ?>

</body>

</html>