<!doctype html>
<html lang=fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <title>{{ $title ?? '' }}</title>

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--bootstrap/-->

    <!--HTMX-->
{{--    <script src="https://unpkg.com/htmx.org@2.0.4" integrity="sha384-HGfztofotfshcF7+8n44JQL2oJmowVChPTg48S+jvZoztPfvwD79OC/LTtG6dMp+" crossorigin="anonymous"></script>--}}
    <!--HTMX/-->

    <style>
        .container {
            margin-top: 50px;
        }
    </style>

    @vite(['resources/js/app.js'])

</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <button class="btn btn-primary"
                    hx-get="/first-test" hx-trigger="click" hx-target="#result"
                >
                    Coucou
                </button>

                <div id="result">

                </div>

            </div>

        </div>

    </div>

</body>
</html>

















