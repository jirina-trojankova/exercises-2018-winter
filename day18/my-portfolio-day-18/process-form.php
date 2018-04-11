<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Just an exercise target of one simple contact form.">
    <title>Process form</title>
    <style>
        body {
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid silver;
        }

        th,
        td {
            padding: .25rem 1rem;
        }
    </style>
</head>
<body>
    <h1>Processing form data</h1>
    <p>Well, just output, what we’ve received.</p>
    <?php $data = []; ?>
    <?php if(isset($_GET) && !empty($_GET)): ?>
        <p>Used method was <code>GET</code>. Check the URL to see all the parameters. Try to edit one and hit enter.</p>
        <?php $data = $_GET; ?>
    <?php elseif(isset($_POST) && !empty($_POST)): ?>
        <p>Used method was <code>POST</code>. Check the URL to see, there are no parameters at all.</p>
        <?php $data = $_POST; ?>
    <?php else: ?>
        <p>No data sent.</p>
        <?php exit; ?>
    <?php endif ?>
    <h2>Form data</h2>
    <?php if(isset($data) && !empty($data)): ?>
        <table>
            <caption>Input name/value pairs</caption>
            <thead>
                <tr>
                    <th>name</th>
                    <th>value</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value): ?>
                    <tr>
                        <td><code><?=$key;?></code></td>
                        <td><?=$value;?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    <?php endif ?>
    <h2>Raw output of received data</h2>
    <pre><?php print_r($data); ?></pre>
    <a href="<?=$_SERVER["HTTP_REFERER"];?>">Get back to portfolio page</a>
</body>
</html>
