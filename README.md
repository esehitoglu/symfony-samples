<h1 align="center">Installing</h1>

<h2 align="center">https://symfony.com/doc/5.4/setup.html</h2>

install Composer

```javascript
composer create-project symfony/skeleton:"^5.4" my_project_directory
cd my_project_directory
composer require webapp

```

```node
php -S 127.0.0.1:8000 -t public
```

```node
http://127.0.0.1:8000/
```
adresine gidiyoruz.

![image](https://user-images.githubusercontent.com/28044809/176267899-69580c7d-5928-4b6f-a602-ff3c81ca3b31.png)

<h3>Controller</h3>

```node
1- https://symfony.com/doc/5.4/controller.html#a-basic-controller
```

<h3>RequestResponse</h3>

![image](https://user-images.githubusercontent.com/28044809/177030344-ab47c7cb-560f-442e-83a6-ee0de05976db.png)

<h3>Templates</h3>

```node
3- https://symfony.com/doc/5.4/templates.html
```

When using the foo.bar notation, Twig tries to get the value of the variable in the following order:

### 1. $foo['bar'] (array and element);
### 2. $foo->bar (object and public property);
### 3. $foo->bar() (object and public method);
### 4. $foo->getBar() (object and getter method);
### 5. $foo->isBar() (object and isser method);
### 6. $foo->hasBar() (object and hasser method);
### 7. If none of the above exists, use null (or throw a Twig\Error\RuntimeError exception if the strict_variables option is enabled).

<h3>Forms</h3>

```node
4- https://symfony.com/doc/5.4/forms.html#installation
```

![image](https://user-images.githubusercontent.com/28044809/179401247-b5474b8d-ee4b-4c2a-a6a7-b3449621c190.png)
