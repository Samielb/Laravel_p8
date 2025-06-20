<!DOCTYPE html>
<html>
<head>
    <title>Laravel API Documentation</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 0 auto; padding: 20px; }
        .endpoint { margin: 20px 0; padding: 15px; background-color: #f5f5f5; border-radius: 5px; }
        .method { color: #007bff; font-weight: bold; }
        .example { background-color: #fff; padding: 10px; border-radius: 3px; margin: 10px 0; }
    </style>
</head>
<body>
    <h1>Laravel API Documentation</h1>
    
    <div class="endpoint">
        <h2>Register User</h2>
        <p><span class="method">POST</span> /api/register</p>
        <div class="example">
            <pre>
                {
                    "name": "Your Name",
                    "email": "your@email.com",
                    "password": "yourpassword"
                }
            </pre>
        </div>
    </div>

    <div class="endpoint">
        <h2>Login User</h2>
        <p><span class="method">POST</span> /api/login</p>
        <div class="example">
            <pre>
                {
                    "email": "your@email.com",
                    "password": "yourpassword"
                }
            </pre>
        </div>
    </div>

    <div class="endpoint">
        <h2>Get User Info</h2>
        <p><span class="method">GET</span> /api/user</p>
        <p><em>Requires authentication token</em></p>
    </div>

    <div class="endpoint">
        <h2>Logout User</h2>
        <p><span class="method">POST</span> /api/logout</p>
        <p><em>Requires authentication token</em></p>
    </div>

    <div class="endpoint">
        <h2>Products</h2>
        <p><span class="method">GET</span> /api/products - List all products</p>
        <p><span class="method">POST</span> /api/products - Create new product</p>
        <p><span class="method">GET</span> /api/products/{id} - Get specific product</p>
        <p><span class="method">PUT</span> /api/products/{id} - Update product</p>
        <p><span class="method">DELETE</span> /api/products/{id} - Delete product</p>
    </div>
</body>
</html>
