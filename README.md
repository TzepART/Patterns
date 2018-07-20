# Patterns
It's simple project with examples of patterns on PHP


[Creational Patterns](https://github.com/TzepART/patterns/blob/master/examplesPatterns/CreationalPatterns)
====================================================================================================================
*Порождающие шаблоны (Creational) — шаблоны проектирования, которые абстрагируют процесс инстанцирования. Они позволяют 
сделать систему независимой от способа создания, композиции и представления объектов. Шаблон, порождающий классы, использует 
наследование, чтобы изменять инстанцируемый класс, а шаблон, порождающий объекты, делегирует инстанцирование другому объекту.*

| Название | Оригинальное название | Описание |
| -------- | --------------------- | -------- |
| Простая фабрика | [Simple Factory](https://github.com/TzepART/patterns/blob/master/examplesPatterns/CreationalPatterns/simpleFactory.php) | Простая фабрика просто генерирует экземпляр для клиента без предоставления какой-либо логики экземпляра. |
| Фабричный метод | [Factory Method](https://github.com/TzepART/patterns/blob/master/examplesPatterns/CreationalPatterns/factoryMethod.php) | Определяет интерфейс для создания объекта, но оставляет подклассам решение о том, какой класс инстанцировать. |
| Абстрактная фабрика | [Abstract Factory](https://github.com/TzepART/patterns/blob/master/examplesPatterns/CreationalPatterns/abstractFactory.php) | Класс, который представляет собой интерфейс для создания компонентов системы.|
| Строитель | [Builder](https://github.com/TzepART/patterns/blob/master/examplesPatterns/CreationalPatterns/builder.php) | Класс, который представляет собой интерфейс для создания сложного объекта. **Предназначен для поиска решения проблемы антипаттерна Telescoping constructor.** |
| Прототип | [Prototype](https://github.com/TzepART/patterns/blob/master/examplesPatterns/CreationalPatterns/prototype.php) | Определяет интерфейс создания объекта через клонирование другого объекта вместо создания через конструктор. |
| Одиночка | [Singleton](https://github.com/TzepART/patterns/blob/master/examplesPatterns/CreationalPatterns/singleton.php) | Шаблон позволяет удостовериться, что создаваемый объект — единственный в своём классе. |
| Отложенная инициализация | Lazy initialization | Объект, инициализируемый во время первого обращения к нему. |


[Structural Patterns](https://github.com/TzepART/patterns/blob/master/examplesPatterns/StructuralPatterns)
=========================================================================================================
*Структурные шаблоны (Structural) определяют различные сложные структуры, которые изменяют интерфейс уже существующих 
объектов или его реализацию, позволяя облегчить разработку и оптимизировать программу.*

| Название | Оригинальное название | Описание |
| -------- | --------------------- | -------- |
| Адаптер	| [Adapter](https://github.com/TzepART/patterns/blob/master/examplesPatterns/StructuralPatterns/adapter.php) | Объект, обеспечивающий взаимодействие двух других объектов, один из которых использует, а другой предоставляет несовместимый с первым интерфейс. |
| Мост	| [Bridge](https://github.com/TzepART/patterns/blob/master/examplesPatterns/StructuralPatterns/bridge.php) | Структура, позволяющая изменять интерфейс обращения и интерфейс реализации класса независимо. |
| Компоновщик	| [Composite](https://github.com/TzepART/patterns/blob/master/examplesPatterns/StructuralPatterns/composite.php) |	Объект, который объединяет в себе объекты, подобные ему самому. |
| Декоратор или Wrapper/Обёртка | [Decorator](https://github.com/TzepART/patterns/blob/master/examplesPatterns/StructuralPatterns/decorator.php) | Класс, расширяющий функциональность другого класса без использования наследования. **Шаблон часто используется для соблюдения принципа  единственной обязанности (Single Responsibility Principle)** |
| Фасад	| [Facade](https://github.com/TzepART/patterns/blob/master/examplesPatterns/StructuralPatterns/facade.php) | Объект, который абстрагирует работу с несколькими классами, объединяя их в единое целое. |
| Приспособленец | [Flyweight](https://github.com/TzepART/patterns/blob/master/examplesPatterns/StructuralPatterns/flyweight.php) | Это объект, представляющий себя как уникальный экземпляр в разных местах программы, но фактически не являющийся таковым. |
| Заместитель	| [Proxy](https://github.com/TzepART/patterns/blob/master/examplesPatterns/StructuralPatterns/proxy.php) | Объект, который является посредником между двумя другими объектами, и который реализует/ограничивает доступ к объекту, к которому обращаются через него |
| Единая точка входа | Front controller | Обеспечивает унифицированный интерфейс для интерфейсов в подсистеме. Front Controller определяет высокоуровневый интерфейс, упрощающий использование подсистемы. |	



[Behavioral Patterns](https://github.com/TzepART/patterns/blob/master/examplesPatterns/BehavioralPatterns)
=========================================================================================================
*Поведенческие шаблоны (Behavioral) определяют взаимодействие между объектами, увеличивая таким образом его гибкость.*

| Название | Оригинальное название | Описание |
| -------- | --------------------- | -------- |
| Цепочка обязанностей	| [Chain Responsibility](https://github.com/TzepART/patterns/blob/master/examplesPatterns/BehavioralPatterns/chainResponsibility.php)	| Предназначен для организации в системе уровней ответственности. |
| Команда, Action, Transaction	| [Command](https://github.com/TzepART/patterns/blob/master/examplesPatterns/BehavioralPatterns/command.php)	| Представляет действие. Объект команды заключает в себе само действие и его параметры. |
| Итератор, Cursor	| [Iterator](https://github.com/TzepART/patterns/blob/master/examplesPatterns/BehavioralPatterns/iterator.php)	| Представляет собой объект, позволяющий получить последовательный доступ к элементам объекта-агрегата без использования описаний каждого из объектов, входящих в состав агрегации. |
| Посредник	| [Mediator](https://github.com/TzepART/patterns/blob/master/examplesPatterns/BehavioralPatterns/mediator.php)	| Обеспечивает взаимодействие множества объектов, формируя при этом слабую связанность и избавляя объекты от необходимости явно ссылаться друг на друга. |
| Хранитель	| [Memento](https://github.com/TzepART/patterns/blob/master/examplesPatterns/BehavioralPatterns/memento.php)	| Позволяет не нарушая инкапсуляцию зафиксировать и сохранить внутренние состояния объекта так, чтобы позднее восстановить его в этих состояниях. |
| Наблюдатель или Издатель-подписчик	| [Observer](https://github.com/TzepART/patterns/blob/master/examplesPatterns/BehavioralPatterns/observer.php)	| Определяет зависимость типа «один ко многим» между объектами таким образом, что при изменении состояния одного объекта все зависящие от него оповещаются об этом событии. |
| Состояние	| [State](https://github.com/TzepART/patterns/blob/master/examplesPatterns/BehavioralPatterns/state.php)	| Используется в тех случаях, когда во время выполнения программы объект должен менять своё поведение в зависимости от своего состояния. |
| Стратегия	| [Strategy](https://github.com/TzepART/patterns/blob/master/examplesPatterns/BehavioralPatterns/strategy.php)	| Предназначен для определения семейства алгоритмов, инкапсуляции каждого из них и обеспечения их взаимозаменяемости. |
| Шаблонный метод	| [Template method](https://github.com/TzepART/patterns/blob/master/examplesPatterns/BehavioralPatterns/templateMethod.php)	| Определяет основу алгоритма и позволяет наследникам переопределять некоторые шаги алгоритма, не изменяя его структуру в целом. |
| Посетитель	| [Visitor](https://github.com/TzepART/patterns/blob/master/examplesPatterns/BehavioralPatterns/visitor.php)	| Описывает операцию, которая выполняется над объектами других классов. При изменении класса Visitor нет необходимости изменять обслуживаемые классы. **Это один из способов соблюдения принципа открытости/закрытости (open/closed principle).** |
| Интерпретатор | Interpreter | Решает часто встречающуюся, но подверженную изменениям, задачу. |
