## E-Commerce Website Backend Documentation



## Purpose
The purpose of the e-commerce website backend is to serve as the backbone of the entire online shopping platform,
handling essential operations and providing various functionalities to ensure a smooth and secure user experience. 
The backend is designed to support the following key operations:

1. User Authentication

2. Product Listing: 

3. Filtering Products

4. Cart Management

5. Order Placement

6. Order Confirmation




## Authentication and Authorization


- User Registration and Login
- User Roles and Permissions
- Middleware for Authentication

  ## Products

- Displaying Products on the Home Page
- Fetching All Products
- Filtering Products by Category, Color, Size, and Price
- Adding Products to Cart

## Categories

- Displaying Categories
- Filtering Products by Category

 ## Order and Checkout

- Placing an Order
- Viewing Order Confirmation
- Order Item Details
- API Endpoints (if applicable)

## List of API Endpoints
Authentication
Endpoints:
- POST /register: Registers a new user with required parameters name, email, and password.
- POST /login: Logs in an existing user with email and password, returning an authentication token.
- POST /logout: Logs out the currently authenticated user by invalidating the token.

Product Listing
Endpoints:
- GET /products: Retrieves a list of all products from the backend, including details such as id, title, description, price, image, category, color, and size.
- GET /products/category/{categoryName}: Filters products by a specific categoryName.

Filtering Products
Endpoints:
- GET /products?color={colorName}: Filters products by a specific colorName.
- GET /products?size={sizeName}: Filters products by a specific sizeName.
- GET /products?min_price={minPrice}&max_price={maxPrice}: Filters products within a specified price range.

Cart Management
Endpoints:
- POST /cart/{productId}: Adds a product to the user's cart with an optional quantity.
- GET /cart: Fetches the contents of the user's cart.
- 
Order Placement
Endpoint:
- POST /order: Places an order with required parameters shipping_address, billing_address, and payment_details.

Order Confirmation
Endpoint:
- GET /order/{orderId}: Fetches the details of a specific order using the orderId.



