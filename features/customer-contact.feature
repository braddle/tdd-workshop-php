Feature: Customer Contact
  As A Store Manager
  I Want my customers to be able to provide an email address when they provide their satifaction rating and feeback
  So That I can contact customer who have been helpful with vouchers, offers or discuss there feedback in more detail

  Scenario: Customer provides negative feedback, written feedback and their email address
    When a customer gives a "negative" feedback and writes feedback "No Milk" and provides email "test@test.com"
    Then the customer should be thanked for their feedback
    And the "positive" feedback count should have increased by 1 with a comment "No Milk" with email "test@test.com"