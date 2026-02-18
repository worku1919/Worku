<?php
/**
 * Application Configuration
 */

class Config {
    // App settings
    const APP_NAME = 'Worku Fikadu Portfolio';
    const APP_VERSION = '1.0.0';
    const APP_URL = 'https://workufikadu.com';
    const ADMIN_EMAIL = 'worku.fikadu@example.com';
    
    // Security settings
    const ENCRYPTION_KEY = 'your-secret-encryption-key-here';
    const JWT_SECRET = 'your-jwt-secret-key-here';
    const PASSWORD_MIN_LENGTH = 8;
    
    // Upload settings
    const UPLOAD_MAX_SIZE = 5242880; // 5MB
    const UPLOAD_ALLOWED_TYPES = ['jpg', 'jpeg', 'png', 'gif', 'pdf', 'doc', 'docx'];
    const UPLOAD_PATH = 'uploads/';
    
    // Pagination
    const ITEMS_PER_PAGE = 10;
    
    // Cache settings
    const CACHE_ENABLED = true;
    const CACHE_DURATION = 3600; // 1 hour
    
    // API settings
    const API_VERSION = 'v1';
    const API_RATE_LIMIT = 100; // requests per hour
}