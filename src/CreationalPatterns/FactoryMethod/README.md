## Description

Summarily

Defines the interface for creating an object, but leaves it to the subclasses to decide whether
which class to instantiate. The factory method allows the class to delegate creating subclasses.

When to use it?

- the class does not know in advance which subclass objects it needs to create.
- the class is designed so that the objects it creates are specified by subclasses.
- the class delegates its responsibilities to one of several auxiliary subclasses, and it is planned to
localize knowledge about which class is taking on these responsibilities


[русская версия](README-rus.md)
