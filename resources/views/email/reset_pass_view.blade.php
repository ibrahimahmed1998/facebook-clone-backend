<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>

<div>
    Hi {{ $name }},
    <br> this is reset password page
    <br> Please write new password
    <br>
    <!-- get password from box here -->
    <a href="{{ url('reset_pass',$vcode)}}">Set New Password</a>

    <br/>
</div>

</body></html>

