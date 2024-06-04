<?php

class Articles {
    public static $wpUrl;
    private static $instances = [];

    // Méthode statique pour initialiser $wpUrl
    public static function setWpUrl($url) {
        self::$wpUrl = $url;
    }

    protected function __construct() {}
    protected function __clone() {}
    public function __wakeup() {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Articles {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    public function connection($page) {
        $wpPosts = self::$wpUrl . 'wp-json/wp/v2/' . $page;  // Remplacez avec l'URL de votre site WordPress

        // Configuration pour accepter les réponses JSON
        $options = [
            "http" => [
                "method" => "GET",
                "header" => "Accept: application/json"
            ]
        ];
        $context = stream_context_create($options);

        // Effectuer la requête
        $response = @file_get_contents($wpPosts, false, $context);

        if ($response === FALSE) {
            // Afficher l'erreur si la requête a échoué
            echo "Erreur lors de la requête à l'API.";
            return null;
        }

        // Décoder la réponse JSON en PHP array
        $data = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            // Afficher l'erreur si le JSON n'a pas pu être décodé
            echo "Erreur lors du décodage du JSON : " . json_last_error_msg();
            return null;
        }

        return $data;
    }

    public function query($post) {
        $title = $post['title']['rendered'];
        $date = date("F j, Y", strtotime($post['date']));  // Formatage de la date
        $excerpt = $post['excerpt']['rendered'];

        // Extraire l'image de mise en avant et son alt
        if (isset($post['_embedded']['wp:featuredmedia'][0]['media_details'])) {
            $media_details = $post['_embedded']['wp:featuredmedia'][0]['media_details'];
            $image_url = $media_details['sizes']['full']['source_url'];
            $alt_text = $post['_embedded']['wp:featuredmedia'][0]['alt_text'];
        } else {
            $image_url = '/assets/images/placeholder/background-placeholder.webp';
            $alt_text = "Image de l'article";
        }

        return [
            'title' => $title,
            'date' => $date,
            'excerpt' => $excerpt,
            'image_url' => $image_url,
            'alt_text' => $alt_text
        ];
    }
}

// Initialiser la propriété statique $wpUrl en utilisant la méthode statique
Articles::setWpUrl($wpUrl);
