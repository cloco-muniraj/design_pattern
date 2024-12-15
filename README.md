# design_pattern

# Singleton Design Pattern
A singleton design pattern is a creational design pattern that ensures a class han only one instance and provides a global point of access to that instance.

# When to use singleton pattern
1. Database Connections
2. Logging
3. Configuration Manager
4. Caching

# Advantages of Singleton Pattern
1. Reduced Resource consumption
2. Provides a globally accessible instance
3. Ensures data consistency
4. Transaction Management

# Concept of Abstract Factory Design Pattern
1. Abstract Factory: Declares an interface for creating a family of related objects.
2. Concrete Factory: Implements the interfaces to product a family of related objects.
3. Abstract Products: Declares interfaces for a set of related objects.
4. Concrete Products: Implement the interfaces defined by the Abstract Products.
5. Client: Uses the factories and products but is decoupled from their concrete implementations.


# Concept of Builder Pattern
1. Builder: Declares methods to create parts of a complex product.
2. Concrete Builder: Implements the steps defined in the Builder interface and assembles the product.
3. Director: Oversees the construction process using a builder object.
4. Product: The final object that is constructed.

This pattern is particularly useful when creating objects with many optional or mandatory components.
