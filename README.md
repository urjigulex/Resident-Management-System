# Resident Management System

## PHP Extensions Installation Guide

### Required PHP Extensions

1. **PDO and MySQLi**
   - For database connectivity
   - Usually comes with PHP installation

2. **JSON**
   - For JSON data handling
   - Usually comes with PHP installation

3. **GD**
   - For image processing
   - Install command:
     ```bash
     # For Windows (XAMPP/WAMP):
     # Enable extension=gd in php.ini
     
     # For Ubuntu/Debian:
     sudo apt-get install php-gd
     
     # For CentOS/RHEL:
     sudo yum install php-gd
     ```

4. **MBString**
   - For multibyte string handling
   - Install command:
     ```bash
     # For Ubuntu/Debian:
     sudo apt-get install php-mbstring
     
     # For CentOS/RHEL:
     sudo yum install php-mbstring
     ```

5. **XML**
   - For XML processing
   - Install command:
     ```bash
     # For Ubuntu/Debian:
     sudo apt-get install php-xml
     
     # For CentOS/RHEL:
     sudo yum install php-xml
     ```

6. **cURL**
   - For making HTTP requests
   - Install command:
     ```bash
     # For Ubuntu/Debian:
     sudo apt-get install php-curl
     
     # For CentOS/RHEL:
     sudo yum install php-curl
     ```

7. **ZIP**
   - For handling ZIP files
   - Install command:
     ```bash
     # For Ubuntu/Debian:
     sudo apt-get install php-zip
     
     # For CentOS/RHEL:
     sudo yum install php-zip
     ```

8. **Fileinfo**
   - For file type detection
   - Install command:
     ```bash
     # For Ubuntu/Debian:
     sudo apt-get install php-fileinfo
     
     # For CentOS/RHEL:
     sudo yum install php-fileinfo
     ```

### Installation Steps

1. Install Composer (PHP package manager):
   ```bash
   # Windows:
   # Download and run Composer-Setup.exe from https://getcomposer.org/download/
   
   # Linux/macOS:
   curl -sS https://getcomposer.org/installer | php
   sudo mv composer.phar /usr/local/bin/composer
   ```

2. Install project dependencies:
   ```bash
   composer install
   ```

3. Verify PHP extensions:
   ```bash
   php -m
   ```

### Additional Notes

- Make sure your PHP version is 7.4 or higher
- After installing extensions, restart your web server
- For Windows users using XAMPP/WAMP, most extensions can be enabled by uncommenting their lines in php.ini
- For Linux users, you might need to restart PHP-FPM after installing extensions:
  ```bash
  sudo systemctl restart php-fpm
  ``` 