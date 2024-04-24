<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PalindromeController extends AbstractController
{
    #[Route(path: "/", name: "home")]
    public function palindrome(Request $request): Response
    {
        $text = $request->get("text");
        $msg = '';

        // Sanitize the user input
        $text = filter_var(htmlspecialchars($text), FILTER_SANITIZE_SPECIAL_CHARS);

        // Check if the input is a string
        if (!is_string($text)) {
            $msg = 'Input must be a string';
        } else {
            // Handle the case where the input is empty or null
            if (empty($text)) {
                $msg = 'Please enter some text';
            } else {
                // Convert the input to lowercase and remove any leading or trailing whitespace
                $text = strtolower(trim($text));

                // Check if the input is a palindrome
                if (strrev($text) === $text) {
                    $msg = 'a palindrome';
                } else {
                    $msg = 'not a palindrome';
                }
            }
        }

        return $this->render("home/index.html.twig", [
            'text' => $text,
            'msg' => $msg,
        ]);
    }
}