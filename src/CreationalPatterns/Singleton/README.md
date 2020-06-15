## Description

Summarily

The template allows you to make sure that the object you are creating is unique in its class.
The "Single" template allows you to restrict class creation to a single object. This is convenient when for
coordination of actions within the system requires that the object is unique in its class.

disadvantages of the template:
- adds a global state to the app, so that a change in one place can affect all other usage cases
- it makes your code strongly coupled,
- creating a prototype (mocking) "Single" can be difficult.


[русская версия](README-rus.md)
