# php-contact-form

## Objective

Learn PHP by solving a real life need: processing a contact form. HTML is good to create the visual interface of the form, but you need a backend script to process the data and compose the email message to be sent to the client.

## Mission

Create a fully-functioning html contact form which will be processed by a php script.

## How was it made?

This contact form was created using HTML, CSS and PHP.  
I started with the external class [PHP Mailer](https://github.com/PHPMailer/PHPMailer) and the Gmail SMTP server, then created a simple HTML form. Styling was done with CSS.

## Functionalities

When a user fills in the contact form correctly it will send a message to my emailaddress and a confirmation message 'message is sent' is displayed in the form. When the user leaves a field open or illegal characters are used in the email box, an error message is displayed.

**BONUS: Added animation**

When the page opens the contact form slides in from the left.

## Screenshot

![screenshot php-contact-form](./img/phpcontactformscreenshot.png)

## Snippet of PHP code

This piece of code checks if the email address filled in has the correct non-illegal characters and if the variable _\$email_ is a valid email address.

```php
$sanitized_email = filter_var($clientEmail, FILTER_SANITIZE_EMAIL);
    if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
        $mail;
    } else {
        echo "Enter a valid email address";
        exit;
    }
```

## Live version

[PHP Contact Form](https://php-contact-form-nic.herokuapp.com/ "Published Version") on [Heroku](https://www.heroku.com/ "Heroku")

## Credentials

I based the styling of my contact form on [this one](https://codepen.io/maaajo/pen/gEpXOJ/)
on codepen, made by maaajo.

## License

[MIT License](https://choosealicense.com/licenses/mit/)
