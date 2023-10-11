# PHP Pushwoosh

A PHP Library to easily send PUSH notifications with the Pushwoosh REST Web Services.

Forked [gomoob/php-pushwoosh](https://github.com/gomoob/php-pushwoosh) because original project stalled.

<p align="center">
<a href="https://github.com/cybercog/php-pushwoosh/releases"><img src="https://img.shields.io/github/release/cybercog/php-pushwoosh.svg?style=flat-square" alt="Releases"></a>
<a href="https://github.com/cybercog/php-pushwoosh/actions/workflows/tests.yml"><img src="https://img.shields.io/github/actions/workflow/status/cybercog/php-pushwoosh/tests.yml?style=flat-square" alt="Build"></a>
<a href="https://github.com/cybercog/php-pushwoosh/blob/master/LICENSE"><img src="https://img.shields.io/github/license/cybercog/php-pushwoosh.svg?style=flat-square" alt="License"></a>
</p>

## Installation

Pull in the package through Composer.

```shell script
composer require cybercog/php-pushwoosh
```

## Usage

Sample of creating and sending the Pushwoosh message.

```php
// Create a Pushwoosh client
$pushwoosh = Pushwoosh::create()
    ->setApplication('XXXX-XXX')
    ->setAuth('xxxxxxxx');

// Create a request for the '/createMessage' Web Service
$request = CreateMessageRequest::create()
    ->addNotification(Notification::create()->setContent('Hello Jean !'));

// Call the REST Web Service
$response = $pushwoosh->createMessage($request);

// Check if it's ok
if ($response->isOk()) {
    print 'Great, my message has been sent !';
} else {
    print 'Oops, the sent failed :-('; 
    print 'Status code : ' . $response->getStatusCode();
    print 'Status message : ' . $response->getStatusMessage();
}
```

## License

- `PHP Pushwoosh` package is open-sourced software licensed under the [MIT license](LICENSE) by [Anton Komarev].

## About CyberCog

[CyberCog] is a Social Unity of enthusiasts. Research the best solutions in product & software development is our passion.

- [Follow us on Twitter](https://twitter.com/cybercog)

<a href="https://cybercog.su"><img src="https://cloud.githubusercontent.com/assets/1849174/18418932/e9edb390-7860-11e6-8a43-aa3fad524664.png" alt="CyberCog"></a>

[Anton Komarev]: https://komarev.com
[CyberCog]: https://cybercog.su
