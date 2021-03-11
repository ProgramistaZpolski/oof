# oof
JS Error Reporting in under 200 bytes.

Think of it as [Sentry](http://sentry.io/) Lite

### Setup
Run the SQL queries in the migration.sql file, and then just load the JS file on your website.

You can configure your error reporting url by setting `window._oof` to a URL with the error collector - by default it is set to `/error.php`.

Oh and also you need PHP and MySQL. PHPmyadmin is not required, but it's recommended for viewing the reports.
