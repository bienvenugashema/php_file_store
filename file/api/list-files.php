<?php
require_once '../includes/config.php';

try {
    $apiController = new ApiController();
    $apiController->handleListFiles();
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}