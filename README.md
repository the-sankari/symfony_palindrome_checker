## Palindrome Checker App

### Description

This is a simple Palindrome checker app built using Symfony 7. A palindrome is a word, phrase, number, or other sequences of characters that reads the same forward and backward.

### How to Use

1. Clone this repository.
2. Navigate to the project directory.
3. Install dependencies using Composer: `composer install`.
4. Run the Symfony server: `symfony serve`.
5. Open your browser and go to `http://localhost:8000` to access the app.

### Requirements/Specs

- Create a new standalone Symfony project using Symfony-cli e.g. `symfony new palindrome_checker --version=7.0 --webapp`.
- Navigate to your project directory.
- Write a controller logic inside `src/Controller` e.g. in `PalindromeController.php` file.
- Create a twig template for displaying the form and result.
- Keep it simple.

### Project Structure

- **src/Controller/PalindromeController.php**: Contains the controller logic for checking palindromes.
- **templates/home/index.html.twig**: Twig template for displaying the form and result.

Thank you!
