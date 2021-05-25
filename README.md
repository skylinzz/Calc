# PHP OOP Calculator
> Candidate Exercise -  **Mbit Group**
> 
> Solved by Eduardo Ribeiro

Requirements:
Webserver of your choice with PHP 8.0 installed.

You also need [Composer](https://getcomposer.org/) for the autoload. 
After installing it, run the following command:
```bash
➥ composer dumpautoload -o
```

Architecture:

Trying to follow the SOLID principles the best i can, i decided to use the Factory design pattern.
Essentially, it moves the constructor from the class itself, and moves it to the Factory method. This way i can create diferent classes depending on the operator i want to use.
Also trying to folow the Open/Close principle, i created diferent classes for the diferent operators, this way, if i want to add a new operator, for exemple, the remainder operator, i do not need to change an existing class, i can easily create a new one.
