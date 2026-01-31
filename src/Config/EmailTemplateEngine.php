<?php
// Database configuration
$host = 'localhost';
$db   = 'your_database';
$user = 'your_username';
$pass = 'your_password';

// Create a connection to the database
$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

class EmailTemplateEngine {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Function to get a template by id
    public function getTemplate($id) {
        $stmt = $this->pdo->prepare("SELECT subject, body FROM email_templates WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Function to send an email
    public function sendEmail($to, $templateId, $variables = []) {
        $template = $this->getTemplate($templateId);

        if (!$template) {
            throw new Exception('Template not found.');
        }

        $subject = $this->replaceVariables($template['subject'], $variables);
        $body = $this->replaceVariables($template['body'], $variables);

        mail($to, $subject, $body);
    }

    // Function to replace variables in the template
    private function replaceVariables($content, $variables) {
        foreach ($variables as $key => $value) {
            $content = str_replace("{{" . $key . "}}", $value, $content);
        }
        return $content;
    }
}

// Example usage
$emailTemplateEngine = new EmailTemplateEngine($pdo);
$emailTemplateEngine->sendEmail('recipient@example.com', 1, ['name' => 'John Doe']);
"