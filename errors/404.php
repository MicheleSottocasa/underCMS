<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
    <html lang="en">

        <head>
	        <title>404 Not Found</title>
        </head>

        <body>
            <img src="/assets/logos/logo.png" alt="MS Logo" width="150px">
            <h1>Not Found</h1>
            <p>The requested URL was not found on this server.</p>
            <hr>
            <address><?php echo $_SERVER['SERVER_SOFTWARE'] ?> Server at <?php echo $_SERVER['HTTP_HOST'] ?> Port <?php echo $_SERVER['SERVER_PORT'] ?></address>
            <hr>
            <i>Made by Michele Sottocasa</i>
        </body>

    </html> <?php
    http_response_code(404);