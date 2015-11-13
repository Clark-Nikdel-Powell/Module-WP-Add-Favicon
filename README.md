## Add Favicon

This function returns a favicon link element.

### Arguments

array(): arguments are passed into the function in the following manner:

```
$args = array(
	'host.dev' => array(
		'public' => '[FAVICON URL]',
		'admin' => '[FAVICON URL]'
	),
	'another.host.dev' => array(
		'public' => '[FAVICON URL]',
		'admin' => '[FAVICON URL]'
	),
	'onemore.host.dev' => array(
		'public' => '[FAVICON URL]',
		'admin' => '[FAVICON URL]'
	)
);
```

### Defaults

```
'*' = array(
    'public' => '/img/icons/favicon.ico',
    'admin' => '/img/icons/admin-favicon.ico'
);
```

### Returns

A favicon link element.

```
<link rel="shortcut icon" href="[FAVICON-URL]" />
```

### Filters

You can adjust the `HREF` output of this function by adding this filter: `add_filter( 'cnp_add_favicon_filter', 'custom_filter_title', 20, 1 )`.
