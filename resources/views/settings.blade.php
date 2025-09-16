<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset ('settings.css')}}">
    <title>settings</title>
    <style>
        body,
        html {
            overflow-x: hidden
        }

        .flex-parent {
            display: flex
        }
    </style>
</head>

<body>
    <p class="usi-full-legal-name">Full legal name</p>
    <input class="usi-rectangle-1" type="text" />
    <div class="usi-rectangle-98">
        <p class="usi-citizenship">Citizenship</p>
        <input class="usi-rectangle-88" type="text" />
        <p class="usi-passport-number">Passport Number</p>
        <p class="usi-">#########</p>
        <p class="usi-serbian">Serbian</p>
        <input class="usi-rectangle-86" type="text" />
    </div>
    <p class="usi-">#########</p>
    <p class="usi-month-of-birth">Month of birth</p>
    <div>
        <input class="usi-rectangle-84" type="text" placeholder="01">
        <input type="text" class="usi-01" placeholder="01">
        <input type="text" class="usi-2001" placeholder="2001">
    </div>
    <button type="text" class="usi-rectangle-99">Discard</button>
    <button><p class="usi-save">Save</p></button>
    </button>
</body>

</html>