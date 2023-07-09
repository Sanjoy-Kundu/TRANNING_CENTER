<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-------
        Step1:
    | kono user online or offline  e ace kina seita dekhar jonno amder Middleware er help nite hobe:::::
        php artisan make:middleware OnlineCheck
        OnlineCheck.php (middleware) add korlam
           if(Auth::check()){
            $expire_at = Carbon::now()->addMinutes(1);
            Cache::put('user_online'.Auth::user()->id, true, $expire_at);
        }

        step:2
        karnel.php te registrtion korbo

----------->
</body>
</html>
