# PHP Basic Router
What this?
For a side project with certain challenges, I looked for a way to create a router homemade without any library or framework. After a long investigation, I mixed different proposals and created a basic router in PHP native including the `.htaccess` file obviously.
## How it works?
### Environment
- PHP 7.4+
- WAMP 3.2.6
### In first time
We need to create and configure the `.htaccess` file to create the conditions and rules for the routing behavior based on a URL rewrite. About these rules, I didn't invent anything. You can find examples anywhere and adapt them to your needs with some regex lines.
### In second time
We need to create a php file (in this case named `router.php`). This file is the routing engine. With a switch-case condition, you will define the behavior based on the URL value sought.
Before, we have to explode this URL into the magic constant parameter: `$_SERVER['REQUEST_URI']`, and select the key in the output array.
For example:
```php
../my-project/index.php
0 => ''
1 => 'my-project'
2 => 'index.php'
```
Our interest in a local workspace is the key number 2. With the rewrite rules in the `.htaccess` we have to expect `index` instead of `index.php`. In each case, we create a redirect to the desired page like follow:
```php
switch ($request[2]) {
    case '':
        require_once 'templates/main.php';
        break;
    case 'my-page':
        require_once 'templates/my-page.php';
        break;
```
Now, include the `router.php` file in your `index.php`. And, for each page you will create, fill in the `href` attribute only by the name you want to give it (example: `<a href="my-page">Link</a>`). Add a new case in the switch-case condition into the `router.php`, and enjoy the result.
## And?
And nothing else. This is the easiest way I found. But there are certainly many other solutions more efficient, but it works. It's just a basis on wich you can build a more complex router. So, be careful if you use it in a serious project. Test it, secure it, modify it, improve it. This proposal is a very basic proposal by a rooky dev. If you find a better way, share it please :)
And after all, there is nothing better than a good framework for that :D

By a rooky dev (for now).