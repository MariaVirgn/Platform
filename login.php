<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Login</title>
    </head>
    <body>
        <div class="col-md-5 mx-auto border mt-3" style="border-radius: 10px;">
            <h2 class="m-5 mb-0 mt-3">Login</h2>
            <form class="p-5" action="/login/authenticate" method="POST">
                <div class="mb-3">
                    <label for="InputUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" id="InputUsername" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="InputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="InputPassword" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
                <?php if (session()->getFlashdata('msg')): ?>
                    <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('msg') ?>
                    </div>
                    <div class="right">
                <img src="logosalon.png" alt="">
            </div>
                <?php endif; ?>
            </form>
        </div>
    </body>
</html>
