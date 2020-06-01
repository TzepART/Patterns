## Description

Summarily
The template allows you to create different properties of an object, avoiding contamination of the constructor (constructor pollution).
This is useful when an object can have multiple properties. Or when creating an object consists of a large number of stages.
The Builder template is designed to find a solution to the Telescoping constructor antipattern problem.

When to use it?
When an object can have multiple properties and when to avoid Telescoping constructor.
The key difference from the "Simple factory" template is that it is used in one — step creation, while "Builder" is used in multi-step creation.


[русская версия](README-rus.md)
