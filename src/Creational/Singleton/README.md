# 单例模式 (Singleton)

### 概念
单例模式(Singleton)，是一种常用的软件设计模式。在它的核心结构中只包含一个被称为单例的特殊类。通过单例模式可以保证系统中，应用该模式的类一个类只有一个实例。即一个类只有一个对象实例

### 简介
单例模式是设计模式中最简单的形式之一。这一模式的目的是使得类的一个对象成为系统中的唯一实例。要实现这一点，可以从客户端对其进行实例化开始。因此需要用一种只允许生成对象类的唯一实例的机制，“阻止”所有想要生成对象的访问。使用工厂方法来限制实例化过程。这个方法应该是静态方法（类方法），因为让类的实例去生成另一个唯一实例毫无意义。

> 概念及简介均引用百度百科 [单例模式](https://baike.baidu.com/item/%E5%8D%95%E4%BE%8B%E6%A8%A1%E5%BC%8F/5946627?fr=aladdin)

### UML
![UML](https://raw.githubusercontent.com/coder-morgan/design-pattern-practice/master/src/Creational/Singleton/UML/Singleton.png)




