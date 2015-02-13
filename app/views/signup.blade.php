<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-Up: A Laravel Form</title>
    <style>
        label {
            display: block;
            padding-top: 1em;
        }
        input[type="submit"] {
            display: block;
            margin-top: 2em;
        }
        textarea {
            display: block;
            margin-bottom: 1em;
        }
        input[type="checkbox"] {
            display: inline-block;
            margin-top: 1em;
        }
        label[for="agree"] {
            display: inline;
        }

    </style>
</head>

<body>
<h1>The Opinion Point Sign up page</h1>
{{Form::open(array('url' => 'thanks'))}} <!--This points to the thanks.blade.php-->
    {{Form::label('FName', 'First name')}}
    {{Form::text('FName')}}

    {{Form::label('LName', 'Last Name')}}
    {{Form::text('LName')}}

    {{Form::label('UName', 'User Name')}}
    {{Form::text('UName')}}

    {{Form::label('email', 'E-mail address')}}
    {{Form::text('email')}}

    {{Form::label('gender' , 'Gender')}} <!--This allows you to create a selection -->
    {{Form::select('gender', array(
       'Male' => 'Male',
        'Female' => 'Female',
        'Transgender' => 'Transgender',
        'No Answer' => 'N/A'
        ))}}
    {{Form::label('comment', 'About you')}}
    {{Form::textarea('comment' , '' , array('placeholder' => 'A little about yourself'))}}

    {{Form::checkbox('agree', 'yes', false)}}
    {{Form::label('agree', 'I agree to your terms of service') }}
    {{Form::submit ('Sign Up') }}

{{Form::close()}}
</body>
</html>