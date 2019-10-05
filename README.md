# Patterns
It's simple project with examples of patterns on PHP

[Creational Patterns](examplesPatterns/CreationalPatterns)
====================================================================================================================
*Creational patterns are design patterns that abstract the instantiation process. They allow making the system 
independent of the method of creation, composition and presentation of objects. The template that creates 
classes uses inheritance for modifying the instantiated class. The template that creates the objects delegates 
the instantiation to another object.*

| Name | Description |
| -------- | ----------- |
| [Simple Factory](examplesPatterns/CreationalPatterns/simpleFactory.php) | A simple factory generates an instance only for the client and does it without providing any instance logic. |
| [Factory Method](examplesPatterns/CreationalPatterns/factoryMethod.php) | Using this pattern we define an interface for creating an object but leave to subclasses a decision about which class to instantiate. |
| [Abstract Factory](examplesPatterns/CreationalPatterns/abstractFactory.php) | This pattern includes creating a class that represents an interface for creating system components.|
| [Builder](examplesPatterns/CreationalPatterns/builder.php) | A class that is an interface for creating a complex object. **This pattern is designed to find a solution to the problem of the antipattern Telescoping constructor.** |
| [Prototype](examplesPatterns/CreationalPatterns/prototype.php) | It defines the interface for creating an object by cloning another object instead of creating it through the constructor. |
| [Singleton](examplesPatterns/CreationalPatterns/singleton.php) | The pattern allows you to make sure that the created object is the only one class instance. |
| Lazy initialization | The object will be initialized only when it will be called. |


[Structural Patterns](examplesPatterns/StructuralPatterns)
=========================================================================================================
*Structural patterns define various complex structures that change the interface of existing objects or their implementation, 
that allows to facilitate the development and optimize the program.*

| Name | Description |
| ---- | ------------ |
| [Adapter](examplesPatterns/StructuralPatterns/adapter.php) | The "adapter" is an object that provides the interaction of two other objects, one of which uses, and the other provides an interface incompatible with the first. |
| [Bridge](examplesPatterns/StructuralPatterns/bridge.php) | A structure that allows you to independently change the interface of calling and the interface of class implementation. |
| [Composite](examplesPatterns/StructuralPatterns/composite.php) |	An object that combines objects like himself. |
| [Decorator](examplesPatterns/StructuralPatterns/decorator.php) | The class that extends the functionality of another class without using inheritance. **The template is often used to comply with the Single Responsibility Principle** |
| [Facade](examplesPatterns/StructuralPatterns/facade.php) | The object that hides work with several classes, combining them into a single whole. |
| [Flyweight](examplesPatterns/StructuralPatterns/flyweight.php) | This is an object that represents itself as a unique instance in different places of the program but is not actually such. |
| [Proxy](examplesPatterns/StructuralPatterns/proxy.php) | An object that mediates between two other objects and that implements/restricts access to the object that is accessed through it. |
| Front controller | This pattern provides a unified interface for interfaces in the subsystem. Front Controller defines a high-level interface that simplifies the use of the subsystem. |	



[Behavioral Patterns](examplesPatterns/BehavioralPatterns)
=========================================================================================================
*Поведенческие шаблоны (Behavioral) определяют взаимодействие между объектами, увеличивая таким образом его гибкость.*

| Name | Description |
| -------- | -------- |
| [Chain Responsibility](examplesPatterns/BehavioralPatterns/chainResponsibility.php)	| Предназначен для организации в системе уровней ответственности. |
| [Command](examplesPatterns/BehavioralPatterns/command.php)	| Представляет действие. Объект команды заключает в себе само действие и его параметры. |
| [Iterator](examplesPatterns/BehavioralPatterns/iterator.php)	| Представляет собой объект, позволяющий получить последовательный доступ к элементам объекта-агрегата без использования описаний каждого из объектов, входящих в состав агрегации. |
| [Mediator](examplesPatterns/BehavioralPatterns/mediator.php)	| Обеспечивает взаимодействие множества объектов, формируя при этом слабую связанность и избавляя объекты от необходимости явно ссылаться друг на друга. |
| [Memento](examplesPatterns/BehavioralPatterns/memento.php)	| Позволяет не нарушая инкапсуляцию зафиксировать и сохранить внутренние состояния объекта так, чтобы позднее восстановить его в этих состояниях. |
| [Observer](examplesPatterns/BehavioralPatterns/observer.php)	| Определяет зависимость типа «один ко многим» между объектами таким образом, что при изменении состояния одного объекта все зависящие от него оповещаются об этом событии. |
| [State](examplesPatterns/BehavioralPatterns/state.php)	| Используется в тех случаях, когда во время выполнения программы объект должен менять своё поведение в зависимости от своего состояния. |
| [Strategy](examplesPatterns/BehavioralPatterns/strategy.php)	| Предназначен для определения семейства алгоритмов, инкапсуляции каждого из них и обеспечения их взаимозаменяемости. |
| [Template method](examplesPatterns/BehavioralPatterns/templateMethod.php)	| Определяет основу алгоритма и позволяет наследникам переопределять некоторые шаги алгоритма, не изменяя его структуру в целом. |
| [Visitor](examplesPatterns/BehavioralPatterns/visitor.php)	| Описывает операцию, которая выполняется над объектами других классов. При изменении класса Visitor нет необходимости изменять обслуживаемые классы. **Это один из способов соблюдения принципа открытости/закрытости (open/closed principle).** |
| [Interpreter](examplesPatterns/BehavioralPatterns/interpreter.php) | Решает часто встречающуюся, но подверженную изменениям, задачу. |