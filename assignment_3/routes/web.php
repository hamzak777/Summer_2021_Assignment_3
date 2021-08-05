<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $questions = [
        '1. What are static properties and methods, how are they used, and what is a static class?' => ['answer' => 'Static properties and methods are properties and methods which are static. Static means that the properties/methods can be accessed without needing a previous instance of the method/property.
        The static property is commonly used when a method/property is called within or by classes multiple times, such as a collection of strings to reference multiple times, or a method that is called several times during a programs use.  
        A Static class refers to a class that consists of only static properties and methods (they are also called utility or helper classes).', 'source' => 'www.php.net/manual/en/, class notes'],
        '2. What is a namespace and what is it used for? What is autoloading?' => ['answer' => 'A namespace is a form of data encapsulation containing things such as classes (such as abstracts), functions and variables. This allows such data to be called in other namespaces. Think of it like calling an image from its folder from a php file in the root, an extremely oversimplified version but functionally similar.
        Autoloading is a method to create a class in which a new object of a class is created all properties of the class is loaded into the file.', 'source' => 'www.php.net/manual/en/, class notes'],
        '3. What is Laravel, what is it used for, and what are Blade templates and why are they used?' => ['answer' => 'Laravel is a custom web development framework (i.e., a set of resources and tools to build web applications). It is popularly used to create custom php based web applications and large-scale CRUD, also based on php.
        Blade is Laravels own templating engine, allowing easier creation of html files. It does so by allowing the creation of a Master/Parent templates assigning properties that can be inherited by Children pages.', 'source' => 'laravel.com/docs/8.x, class notes'],
        '4. What is Composer and what is it used for in relation to PHP and Laravel specifically?' => ['answer' => 'Composer is a manager for PHP based packages. Specifically, it allows for the installation of PHP packages such as Laravel into a new project, and only that project. This means a user does not have to worry about unwanted packages winding up in their project.
        By going to the project root file with Git bash, composer can be installed, thus allowing the creation of PHP package-based files, such as Laravel.', 'source' => 'getcomposer.org/doc/00-intro.md'],
        '5. Explain the MVC paradigm, identify and describe each of its three major concepts and explain how each relates to Laravel.' => ['answer' => 'MVC is a design model made up of three parts, Model-View-Controller.
        The Model is the data in the program which is modelled, such as an object or a sql database.
        The View refers to the front-end of a program, the user interface we see when we display the data.
        The Controller is how we control the data. For example, the code we used to add data to the Model (such as adding data to a database) or how the View translates the data into the UI.
        MVC is expressed differently in different PHP frameworks. In Laravel it is more straightforward with folders labeled Models, Views, and Controllers where respective files are meant to be stored in order with MVC. The Routes folder in Laravel can also be considered a part of the Controller as it helps to direct data for the Views.', 'source' => 'class notes']
    ];
    return view('assignment_3', [
        'title' => 'Assignment 3',
        'questions' => $questions
    ]);
});