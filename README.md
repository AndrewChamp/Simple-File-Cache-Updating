# Simple File Cache Updating

Have aggressive caching on your server or framework?  Have issues with clients seeing changes when you update a file or image?  Well, you're in luck!  Prevent aggressive browser cachinbg with this class.

Just instantiate the class and wrap your files with the method.  **Like magic!**

```php
$cache = new cache(__DIR__);
```

```html
<!-- Example -->
<link rel="stylesheet" href="<?=$cache->file('/styles/main.css');?>" />
```

The output will look something like this...
```html
<link rel="stylesheet" href="/styles/main.css?version=1476374736" />
```

Now everytime you edit/update your file or image it will grab the file's `filemtime` and append it to the end of the file with a query string, assuring you that the browser will download the "new file" anytime it's updated.

So damn good that you'll say, _"Thanks Obama"_.
