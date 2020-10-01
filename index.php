<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
		crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
		crossorigin="anonymous">
		<title>indexPage</title>
	</head>

	<body data-spy="scroll" data-target="#main-nav" id="home">
        <div class="row">
            <div class="col-lg-8 d-none d-lg-block">
                <div class="card text-center card-form">
				    <div class="card-body">
                        <form id="contact-form" method="post" action="contact.php" role="form">
                            <div class="controls"> 
                                <div class="form-group">
                                    Email
                                    <input id="form_email" type="email" maxlength="40" name="email" class="form-control form-control-lg" placeholder="email@email.com" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group">
                                    Password
                                    <input id="form_password" type="text" maxlength="15" name="password" class="form-control form-control-lg" placeholder="Password" required="required" data-error="Password is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <input type="submit" class="btn btn-success btn-send" value="LOGIN">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>