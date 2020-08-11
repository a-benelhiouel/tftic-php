<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon super site</title>
    <style>
    body {
        display: grid;
        gap: 1ch;
        padding: 1ch;
        margin: 1ch;
        justify-items: center;
    }

    body * {
        max-width: 100ch;
    }
    li {
        display: inline;
    }
    img {
        max-height: 80vh;
        max-width: 80vw;
    }
    input {
        border-left: none;
        border-top: none;
        border-radius: 1ch;
    }
    input:required {
        border-width: thick;
    }
    input:not([type='button']):invalid {
        border-color: red;
    }
    input:not([type='button']):valid {
        border-color: green;
    }
    </style>
</head>
<body>
<a href="index.php?section=accueil"><img src='http://www.technofuturtic.be/Portals/0/Logo.png'/></a>
    
