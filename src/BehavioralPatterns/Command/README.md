## Description

Summarily

The Command template allows you to encapsulate actions in objects. The key idea is to provide funds
separating the client from the recipient.

Or

In the Command template, the object is used to encapsulate all the information required for execution
actions or to initiate it later. The information includes the method name; the object that owns
method; values of method parameters.
A command is a behavioral template in which an object is used to encapsulate all information,
required to perform an action or call an event at a later time. This information includes
the method name, the object that owns the method, and the method parameter values.
Four terms are always associated with the Command template:
- commands (command),
- command receiver,
- command caller (invoker) client (client).

The Command object knows about the receiver and calls the receiver method. Parameter values of the receiver
saved in the team. The invoker knows how to execute the command and may be doing accounting and
recording completed commands. The invoker doesn't know anything about the specific command, it only knows
about the interface. Both objects (the caller and several command objects) belong to the client object.
The client decides which commands to execute and when. To execute a command it passes the command object to the caller
object (invoker).


[русская версия](README-rus.md)
