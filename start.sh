#!/bin/bash

# Exit on error and undefined variables
set -eu

# Function to check and install PHP
check_php_installation() {
    if ! command -v php &> /dev/null; then
        echo "PHP could not be found, installing PHP..."
        if command -v apt-get &> /dev/null; then
            sudo apt-get update
            sudo apt-get install php -y
        elif command -v yum &> /dev/null; then
            sudo yum install php -y
        else
            echo "Error: Package manager not found. Please install PHP manually."
            exit 1
        fi
    fi
}

# Function to check and create required files
check_required_files() {
    # Create index.php if not exists
    if [ ! -f "index.php" ]; then
        echo "Creating index.php..."
        cat > index.php << 'EOF'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to My Website</h1>
    <?php
        echo "<p>PHP is working!</p>";
    ?>
</body>
</html>
EOF
    fi

    # Create style.css if not exists
    if [ ! -f "style.css" ]; then
        echo "Creating style.css..."
        cat > style.css << 'EOF'
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f0f0f0;
}

h1 {
    color: #333;
    text-align: center;
}

p {
    color: #666;
    text-align: center;
}
EOF
    fi
}

# Function to start PHP server
start_php_server() {
    local port=${1:-3000}
    local host="0.0.0.0"
    
    echo "Starting PHP server at http://$host:$port"
    echo "Files available:"
    echo "- index.php"
    echo "- style.css"
    echo "Press Ctrl+C to stop the server"
    
    # Start PHP server in the current directory
    php -S "$host:$port"
}

# Main execution
check_php_installation
check_required_files
start_php_server 3000