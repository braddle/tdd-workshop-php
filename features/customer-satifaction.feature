Feature: Customer Satisfation Index
  As A Store Manager
  I want my customers to be able to give simple feedback on their shopping experience
  So that I can gage how changes I make to the store affect customer satisfaction

  Scenario: Customer leave positive feedback
    When a customer gives a "positive" feedback
    Then the customer should be thanked for their feedback
    And the "positive" feedback count should have increased by 1

  Scenario: Customer leave neutral feedback
    When a customer gives a "neutral" feedback
    Then the customer should be thanked for their feedback
    And the "neutral" feedback count should have increased by 1

  Scenario: Customer leave negative feedback
    When a customer gives a "negative" feedback
    Then the customer should be thanked for their feedback
    And the "negative" feedback count should have increased by 1
