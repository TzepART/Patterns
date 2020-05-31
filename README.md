# Patterns
It's simple project with examples of patterns on PHP

[Creational Patterns](src/CreationalPatterns)
====================================================================================================================
*Creational patterns are design patterns that abstract the instantiation process. They allow making the system 
independent of the method of creation, composition and presentation of objects. The template that creates 
classes uses inheritance for modifying the instantiated class. The template that creates the objects delegates 
the instantiation to another object.*


| Name | Description |
| -------- | ----------- |
| [Simple Factory](src/CreationalPatterns/simpleFactory/simpleFactory.php) | A simple factory generates an instance only for the client and does it without providing any instance logic. |
| [Factory Method](src/CreationalPatterns/factoryMethod/factoryMethod.php) | Using this pattern we define an interface for creating an object but leave to subclasses a decision about which class to instantiate. |
| [Abstract Factory](src/CreationalPatterns/abstractFactory/abstractFactory.php) | This pattern includes creating a class that represents an interface for creating system components.|
| [Builder](src/CreationalPatterns/builder/builder.php) | A class that is an interface for creating a complex object. **This pattern is designed to find a solution to the problem of the antipattern Telescoping constructor.** |
| [Prototype](src/CreationalPatterns/prototype/prototype.php) | It defines the interface for creating an object by cloning another object instead of creating it through the constructor. |
| [Singleton](src/CreationalPatterns/singleton/singleton.php) | The pattern allows you to make sure that the created object is the only one class instance. |
| Lazy initialization | The object will be initialized only when it will be called. |

[Structural Patterns](src/StructuralPatterns)
=========================================================================================================
*Structural patterns define various complex structures that change the interface of existing objects or their implementation, 
that allows to facilitate the development and optimize the program.*


| Name | Description |
| ---- | ------------ |
| [Adapter](src/StructuralPatterns/adapter/adapter.php) | The "adapter" is an object that provides the interaction of two other objects, one of which uses, and the other provides an interface incompatible with the first. |
| [Bridge](src/StructuralPatterns/bridge/bridge.php) | A structure that allows you to independently change the interface of calling and the interface of class implementation. |
| [Composite](src/StructuralPatterns/composite/composite.php) |	An object that combines objects like himself. |
| [Decorator](src/StructuralPatterns/decorator/decorator.php) | The class that extends the functionality of another class without using inheritance. **The template is often used to comply with the Single Responsibility Principle** |
| [Facade](src/StructuralPatterns/facade/facade.php) | The object that hides work with several classes, combining them into a single whole. |
| [Flyweight](src/StructuralPatterns/flyweight/flyweight.php) | This is an object that represents itself as a unique instance in different places of the program but is not actually such. |
| [Proxy](src/StructuralPatterns/proxy/proxy.php) | An object that mediates between two other objects and that implements/restricts access to the object that is accessed through it. |
| Front controller | This pattern provides a unified interface for interfaces in the subsystem. Front Controller defines a high-level interface that simplifies the use of the subsystem. |	

[Behavioral Patterns](src/BehavioralPatterns)
=========================================================================================================
*Behavioral patterns define the interaction between objects, thus increasing their flexibility.*


| Name | Description |
| -------- | -------- |
| [Chain Responsibility](src/BehavioralPatterns/ChainResponsibility/Runner.php)	| This pattern designed for an organization in a system of levels of responsibility. |
| [Command](src/BehavioralPatterns/command/command.php)	| The pattern represents an action. The command object contains the action itself and its parameters. |
| [Iterator](src/BehavioralPatterns/iterator/iterator.php)	| An iterator is an object that allows sequential access to the elements of an aggregate object without using descriptions of each of the objects that make up the aggregation. |
| [Mediator](src/BehavioralPatterns/mediator/mediator.php)	| The pattern provides the interaction of many objects while forming a weak connection and eliminating the need for objects to explicitly refer to each other. |
| [Memento](src/BehavioralPatterns/memento/memento.php)	| This pattern allows to fix and to save the internal state of the object so that it can be restored later to these states without breaking encapsulation. |
| [Observer](src/BehavioralPatterns/observer/observer.php)	| The task of this pattern is defining a one-to-many relationship between objects. When a state of one object changes, all dependent on it are notified about this event. |
| [State](src/BehavioralPatterns/state/state.php)	| It is used when, during the execution of a program, an object must change its behavior depending on its state. |
| [Strategy](src/BehavioralPatterns/strategy/strategy.php)	| This pattern designed to determine the family of algorithms, encapsulate each of them and ensure their interchangeability. |
| [Template method](src/BehavioralPatterns/templateMethod/templateMethod.php)	| The pattern defines the basis of the algorithm in the parent class and allows child classes to redefine some steps of the algorithm without changing its structure as a whole. |
| [Visitor](src/BehavioralPatterns/visitor/visitor.php)	| It describes the operation that is performed on objects of other classes. When changing the Visitor class, there is no need to change the classes served. **This is one way to adhere to the open/closed principle.** |
| [Interpreter](src/BehavioralPatterns/interpreter/interpreter.php) | It solves a frequently encountered, but subject to change, task. |
 
