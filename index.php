<?php
// Array of quotes
$quotes = [
    "Twenty years from now you will be more disappointed by the things that you didn't do than by the ones you did do.",
    "Whatever you can do, or dream you can, begin it. Boldness has genius, power, and magic in it.",
    "The purpose of our lives is to be happy.",
    "Life is really simple, but we insist on making it complicated.",
    "Life is what happens when you're busy making other plans.",
    "The best time to plant a tree was 20 years ago. The second best time is now.",
    "The purpose of our lives is to be happy.",
    "Life is what happens when you're busy making other plans.",
    "Get busy living or get busy dying.",
    "You have within you right now, everything you need to deal with whatever the world can throw at you.",
    "The only way to do great work is to love what you do.",
    "Life is really simple, but we insist on making it complicated.",
    "Twenty years from now you will be more disappointed by the things that you didn't do than by the ones you did do.",
    "In three words I can sum up everything I've learned about life: it goes on.",
    "The best time to plant a tree was 20 years ago. The second best time is now.",
    "The purpose of our lives is to be happy.",
    "Life is what happens when you're busy making other plans.",
    "Get busy living or get busy dying.",
    "You have within you right now, everything you need to deal with whatever the world can throw at you.",
    "The only way to do great work is to love what you do.",
    "Life is really simple, but we insist on making it complicated.",
    "Twenty years from now you will be more disappointed by the things that you didn't do than by the ones you did do.",
    "In three words I can sum up everything I've learned about life: it goes on.",
    "The best time to plant a tree was 20 years ago. The second best time is now.",
    "The purpose of our lives is to be happy.",
    "Life is what happens when you're busy making other plans.",
    "Get busy living or get busy dying.",
    "You have within you right now, everything you need to deal with whatever the world can throw at you.",
    "The only way to do great work is to love what you do.",
    "Life is really simple, but we insist on making it complicated.",
    "Twenty years from now you will be more disappointed by the things that you didn't do than by the ones you did do.",
    "In three words I can sum up everything I've learned about life: it goes on.",
    "The best time to plant a tree was 20 years ago. The second best time is now.",
    "The purpose of our lives is to be happy.",
];


$randomQuote = $quotes[array_rand($quotes)];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random quote generator</title>
    <style>
        body {
            text-align: center;
            background-color: black;
            padding: 50px;
        }

        .quote-box {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="quote-box">
        <p><?php echo $randomQuote; ?></p>
    </div>
</body>

</html>