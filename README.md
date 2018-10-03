# Test Driven Developement Workshop

This is the PHP code base to use when attending my introduction to TDD workshop

## Tasks

### Demo 1 (Stack - Abstract Data Type)

As a group we will implement a String Stack (First In, Last Out - FILO) that will conform to the [Collection Interface](src/Collection.php).

### Task 1 (Queue - Abstract Data Type)

In pairs you will implement a String Queue (First In, First Out - FIFO) that will conform to the [Collection Interface](src/Collection.php).

### Demo 2 (Lunchtime Meal Deal - Simple Application)

As a group we will implement a Simple Application that conforms to the [Till Interface](src/Till/Till.php) to calculate the total cost of a basket based on the lunch time meal deal

  - Sandwich £2.00
  - Drink £0.90
  - Crisps £0.50
  - Sandwich, Drink & Crisp £3.00
  
### Task 2 (BOGOF & BTOHP - Simple Application)

In pairs you will continue to implement the [Till Interface](src/Till/Till.php)  to calculate the total cost of a basket based on Baked Beans and Spaghetti Hoop offers

  - Baked Beans £0.75
  - Spaghetti Hoops £0.80
  
  - Baked Beans Offer: Buy One Get One Free (BOGOF) 
    - 2 * Baked Beans = £0.75
    - 3 * Baked Beans = £1.50
  - Spaghetti Hoop Offer: Buy Two Get One Half Price (BTOHP)
    - 2 * Spaghetti Hoops = £1.60
    - 3 * Spaghetti Hoops = £2.00
    - 4 * Spaghetti Hoops = £2.80
     
### Demo 3 (Ledger - Dependencies: London Style)

As a group we will implement the [Ledger Interface](src/Ledger/Ledger.php) using the London / Interaction style of testing  

### Demo 4 (Ledger - Dependencies: Chicago Style)

As a group we will implement the [Ledger Interface](src/Ledger/Ledger.php) using the Chicago / State style of testing

### Task 3 (TODO - Dependencies: London Style)

TODO

### Task 4 (TODO - Dependencies: Chicago Style)

TODO

### Demo 5 (Interger - Mutation Testing)

Demonstrating how [Infection](https://infection.github.io/) a PHP mutation testing library can be used ensure tests full

