<!doctype html>
<html>

<head>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta charset="utf-8">
    <title>UGO Dynamic Form demo</title>
    <script src="../../webcomponentsjs/webcomponents-lite.min.js"></script>
    <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../bootstrap/dist/css/bootstrap-theme.min.css">
    <link rel="import" href="../ugo-dynamic-form.html">
</head>

<body unresolved>

<div class="container">
    <div class="row">
        <h1><code>UGO Dynamic Form with polymer</code> in action:</h1>

        <div class="row">
            <div class="form-group">
            <input type="text" id="reference" class="form-control" value="<?php echo htmlspecialchars(json_encode(json_decode(file_get_contents('input.json')))); ?>" />
            </div>
        </div>

        <div class="row">

            <form class="form-horizontal">
                <ugo-dynamic-form selector="#reference"></ugo-dynamic-form>
            </form>

        </div>
    </div>
</div>
<script>
    window.addEventListener('DOMContentLoaded', function () {
        document.body.removeAttribute('unresolved');
    }, false);
</script>
</body>
</html>
