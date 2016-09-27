Feature: Check my site is up and running
  @javascript
  Scenario: Load the homepage
    Given I have loaded the homepage
    When It is loaded
    Then I should see site logo