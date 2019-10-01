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
| [Factory Method](examplesPatterns/CreationalPatterns/factoryMethod.php) | Определяет интерфейс для создания объекта, но оставляет подклассам решение о том, какой класс инстанцировать. |
| [Abstract Factory](examplesPatterns/CreationalPatterns/abstractFactory.php) | Класс, который представляет собой интерфейс для создания компонентов системы.|
| [Builder](examplesPatterns/CreationalPatterns/builder.php) | Класс, который представляет собой интерфейс для создания сложного объекта. **Предназначен для поиска решения проблемы антипаттерна Telescoping constructor.** |
| [Prototype](examplesPatterns/CreationalPatterns/prototype.php) | Определяет интерфейс создания объекта через клонирование другого объекта вместо создания через конструктор. |
| [Singleton](examplesPatterns/CreationalPatterns/singleton.php) | Шаблон позволяет удостовериться, что создаваемый объект — единственный в своём классе. |
| Lazy initialization | Объект, инициализируемый во время первого обращения к нему. |


[Structural Patterns](examplesPatterns/StructuralPatterns)
=========================================================================================================
*Структурные шаблоны (Structural) определяют различные сложные структуры, которые изменяют интерфейс уже существующих 
объектов или его реализацию, позволяя облегчить разработку и оптимизировать программу.*

| Name | Description |
| ---- | ------------ |
| [Adapter](examplesPatterns/StructuralPatterns/adapter.php) | Объект, обеспечивающий взаимодействие двух других объектов, один из которых использует, а другой предоставляет несовместимый с первым интерфейс. |
| [Bridge](examplesPatterns/StructuralPatterns/bridge.php) | Структура, позволяющая изменять интерфейс обращения и интерфейс реализации класса независимо. |
| [Composite](examplesPatterns/StructuralPatterns/composite.php) |	Объект, который объединяет в себе объекты, подобные ему самому. |
| [Decorator](examplesPatterns/StructuralPatterns/decorator.php) | Класс, расширяющий функциональность другого класса без использования наследования. **Шаблон часто используется для соблюдения принципа  единственной обязанности (Single Responsibility Principle)** |
| [Facade](examplesPatterns/StructuralPatterns/facade.php) | Объект, который абстрагирует работу с несколькими классами, объединяя их в единое целое. |
| [Flyweight](examplesPatterns/StructuralPatterns/flyweight.php) | Это объект, представляющий себя как уникальный экземпляр в разных местах программы, но фактически не являющийся таковым. |
| [Proxy](examplesPatterns/StructuralPatterns/proxy.php) | Объект, который является посредником между двумя другими объектами, и который реализует/ограничивает доступ к объекту, к которому обращаются через него |
| Front controller | Обеспечивает унифицированный интерфейс для интерфейсов в подсистеме. Front Controller определяет высокоуровневый интерфейс, упрощающий использование подсистемы. |	



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
