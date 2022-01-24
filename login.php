<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>CONTACT US</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>

<body>
    <main class="container text-center">
        <div class="row">
            <div class="col-md-6 col-sm mx-auto">
                <form method="GET" action="infos.php">
                    <div class="h1-input">
                        <h1>
                            CONTACT US
                        </h1>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" fill="#e4e0db" height="20"
                                    viewBox="0 0 12 12.969">
                                    <path id="male" class="male"
                                        d="M118.5,99.938a14.181,14.181,0,0,1,4.5-1,12.936,12.936,0,0,1,4.5,1L129,104H117Zm4.5-8.907a3.6,3.6,0,0,1,3.5,3c0.033,0.2,0,1.256,0,1.469,0,0.858-1.357,2.5-3.5,2.5s-3.5-1.642-3.5-2.5c0-.189-0.026-1.288,0-1.469A3.531,3.531,0,0,1,123,91.031Z"
                                        transform="translate(-117 -91.031)" />
                                </svg>
                            </span>
                            <input type="email" name="email" class="email form-control" placeholder="exemple@mail.com"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group erreur">
                            <span class="ERR_mail" name="ERR_email"></span>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#e4e0db" width="26" height="20"
                                    viewBox="0 0 12 16">
                                    <defs>
                                        <style>
                                            .key {
                                                fill-rule: evenodd;
                                            }
                                        </style>
                                    </defs>
                                    <path id="locked" class="key"
                                        d="M123,140a3.775,3.775,0,0,1,4,3.5V152a4.036,4.036,0,0,1-8,0v-8.5A3.775,3.775,0,0,1,123,140Zm0,2a1.806,1.806,0,0,1,2,1.5V147a2.083,2.083,0,0,1-4,0v-3.5A1.805,1.805,0,0,1,123,142Zm-4.5,4.969h9c0.828,0,1.5,1.2,1.5,2.031v5.5a1.5,1.5,0,0,1-1.5,1.5h-9a1.5,1.5,0,0,1-1.5-1.5v-6.031A1.5,1.5,0,0,1,118.5,146.969ZM123,150.5a1,1,0,0,1,1,1V154a1,1,0,0,1-2,0v-2.5A1,1,0,0,1,123,150.5Zm0-1.5a2,2,0,1,1-2,2A2,2,0,0,1,123,149Z"
                                        transform="translate(-117 -140)" />
                                </svg>
                            </span>
                            <input type="text" name="username" class="username form-control" placeholder="username"
                                aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group">
                            <input type="text" name="subject" class="subject form-control" placeholder="subject"
                                aria-label="subject" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group">
                            <textarea name="message" class="form-control message" placeholder=".....Message"
                                id=""></textarea>
                        </div>
                    </div>
                    <div class="div-btn-sign text-center">
                        <button class="btn-sign-in">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="30" fill="#da4a28" height="30" viewBox="0 0 17.5 17.5">
                                <ellipse id="b" cx="8.75" cy="8.75" rx="8.75" ry="8.75" />
                                <image x="7" y="5.5" width="5" height="6"
                                    xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAGCAQAAACh8pzAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAACxIAAAsSAdLdfvwAAAAHdElNRQfmARIKNgKhPJEUAAAAN0lEQVQI12P4v/G/4n+G/wz/GRj+////7X/df04I8/////9v//dmYoAAZgZmiIJGiIIt/1Ug2gDoHyO4hyq/XAAAAABJRU5ErkJggg==" />
                            </svg>
                            &nbsp;&nbsp;Send</button>
                    </div>
                    <div class="div-btn-facebook text-center">
                        <button class="btn-login-facebook"><img src="./assets/media/icons/Facebook.svg" alt="">
                            &nbsp;&nbsp;Login with Facebook</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>