slim-basecontroller
===================

Controller structure for Slim framework

All you need is the Base Controller in the Controller directory. Everything else is just example code.

Controllers should extend the Base Controller.

Calling controller functions goes like this:
```php
ControllerName::dispatch($app, 'functionName', $param1, $param2, ...);
```
