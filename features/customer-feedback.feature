Feature: Customer Feeback
  As A Store Manager
  I Want want my customers to be able to give written feedback allow with their satisfaction level
  So That I can have a better

  Scenario: Customer provides negative feedback and written feedback
    When a customer gives a "positive" feedback and writes feedback "The shop was lovely and easy to navigate"
    Then the customer should be thanked for their feedback
    And the "positive" feedback count should have increased by 1 with a comment "The shop was lovely and easy to navigate"