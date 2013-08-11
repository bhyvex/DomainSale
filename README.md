DomainSale
==========

Domain Sale

Domain Sale is a small script that you can pull down to the root of a domain you're interested in selling. It implements a simple form utilizing Twitter Bootstrap and Google reCaptcha.
Nothing too fancy, great for small web servers running virtual hosts. Tested on EC2.

External Packages Used (Included)
- http://getbootstrap.com/2.3.2/index.html
- https://developers.google.com/recaptcha/


Features:
---------
Minimal configuration by utilizing server environment variables
* $_SERVER['HTTP_HOST'] for domain name
* $_SERVER['SERVER_ADMIN'] for send to address

To Do:
----------
* Form Validation
* AJAX Form Submission
