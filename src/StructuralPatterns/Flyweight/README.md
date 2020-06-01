## Description

Summarily
The template is used to minimize memory usage or computational cost by using a common
use as many identical objects as possible.
Or
A "fitter" is an object that minimizes memory usage by sharing it with others,
the same objects use as much data as possible. This is a way to apply multiple
objects when a simple repeated representation will result in unacceptable memory consumption.
Goal
Optimize memory management by preventing instances of elements that share a common entity.
Description
Flyweight is used to reduce costs when working with a large number of small objects. When designing
the adaptor must be divided into external and internal properties. Internal properties are always unchanged,
while external ones may differ depending on the location and context of the application and should be taken out
beyond the fittest.
Flyweight complements the Factory Method template so that when the client accesses the Factory Method for
creating a new object searches for an already created object with the same parameters as the required one, and returns
his client. If there is no such object, the factory will create a new one.


[русская версия](README-rus.md)
