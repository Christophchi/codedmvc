<?php

function generateView($viewName ) {
    
    $viewName = $viewName ? $viewName : "CWB".substr(uniqid(),0,5); // Set default value if $viewName is empty
    if (!$viewName) {
        echo "View name not provided. Usage: create-view [viewName]\n";
        return;
    }

    $stubFile = './src/Stubs/create-view.stub';
    $viewPath = './src/Views/'; // Change this path to your desired view directory

    // Check if the view file already exists
    $existingViewFile = $viewPath . $viewName . '.php';
    if (file_exists($existingViewFile)) {
        echo "View '$viewName' already exists. Cannot overwrite.\n";
        return;
    }

    // Read the contents of the stub file
    $stubContent = file_get_contents($stubFile);

    if ($stubContent !== false) {
        // Replace placeholders with dynamic content
        $date = date('jS F Y - g:iA'); // Get the current date and time
        $dynamicContent = str_replace('{{DATE}}', $date, $stubContent);

        // Create the view file with dynamic content
        $viewFile = $viewPath . $viewName . '.php'; // Append '.php' to the view name
        $result = file_put_contents($viewFile, $dynamicContent);

        if ($result !== false) {
            echo "View created successfully: $viewFile\n";
        } else {
            echo "Failed to create view file.\n";
        }
    } else {
        echo "Failed to read stub file.\n";
    }
}


# createmiddleware.php
function generateMiddleware($middlewareName) {
    if (empty($middlewareName)) {
        echo "Error: No middleware name provided.\n";
        echo "Usage: php run create-middleware [MiddlewareName]\n";
        return;
    }

    $stubFile = './src/Stubs/create-middleware.stub'; // Path to your middleware stub file
    $middlewareFileName = ucfirst($middlewareName) . 'middleware.php';
    $middlewareFilePath = "./src/Middleware/$middlewareFileName";

    if (file_exists($middlewareFilePath)) {
        echo "Middleware '$middlewareFileName' already exists.\n";
        return;
    }

    $stubContent = file_get_contents($stubFile);

    if ($stubContent !== false) {
        $content = str_replace('{{MIDDLEWARE_NAME}}', ucfirst($middlewareName).'middleware', $stubContent);

        $result = file_put_contents($middlewareFilePath, $content);

        if ($result !== false) {
            echo "Middleware '$middlewareFileName' created successfully.\n";
        } else {
            echo "Failed to create middleware file.\n";
        }
    } else {
        echo "Failed to read stub file.\n";
    }
}



function  generateController($controllerName)
{
    echo 'passed';
}




