## E-Commerce Website Backend Documentation

## Commands To run project
- npm run dev ( should be running continuously)
- php artisan migrate (once to prepare tables)
- php artisan serve (To run php project )

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
  
7. Discount Management




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
- Apply Discounts
- Placing an Order
- Viewing Order Confirmation
- Order Item Details


## Discount Pannal

- Create a New Discount
- Edit Existing Discounts
- Delete Discounts
- Apply Discounts to Products


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
- GET /products/category/{categoryName}?color={colorName}: Filters products by a specific colorName.
- GET /products/category/{categoryName}?size={sizeName}: Filters products by a specific sizeName.
- GET /products/category/{categoryName}?min_price={minPrice}&max_price={maxPrice}: Filters products within a specified price range.

Cart Management
Endpoints:
- POST /cart/{productId}: Adds a product to the user's cart with an optional quantity.
- GET /cart: Fetches the contents of the user's cart.
- delete /cart/{cartId}: delete product from cart.
- patch /cart/{cartId}: edits cartItem quantity,color,size.

Discount Panel
Endpoints:
- GET /discounts: Retrieve a list of all available discounts with their details.
- POST /discounts/create: Create a new discount with details like discount name, value, type (percentage or fixed amount), start date, and end date.
- PUT /discounts/{discountId}/edit: Update an existing discount with new details like discount name, value, type, start date, and end date.
- DELETE /discounts/{discountId}: Delete an existing discount.
- POST /discounts/{discountId}/products: Apply the discount to specific products. The request should contain an array of product IDs to which the discount will be applied.

Order Placement
Endpoint:
- POST /order: Places an order with required parameters shipping_address, billing_address, and payment_details.

Order Confirmation
Endpoint:
- GET /order/{orderId}: Fetches the details of a specific order using the orderId.


## Database Schema:

The database schema represents the structure of the database, including the tables, their relationships, and the fields with their corresponding data types. 
In the e-commerce website backend, we have the following tables and relationships:

1. Tables and Relationships:

### Users Table:

Fields:
- id (Primary Key)
- name (String)
- email (String, Unique)
- password (String)
- created_at (Timestamp)
- updated_at (Timestamp)
  
### Products Table:

Fields:
- id (Primary Key)
- title (String)
- description (Text)
- price (Decimal)
- image (String)
- category (String)
- color (String, Nullable)
- size (String, Nullable)
- created_at (Timestamp)
- updated_at (Timestamp)

### Categories Table:
 Fields:
- id (Primary Key)
- name (String)
- created_at (Timestamp)
- updated_at (Timestamp)\
  
### Carts Table:

Fields:
- id (Primary Key)
- user_id (Foreign Key to Users Table)
- product_id (Foreign Key to Products Table)
- quantity (Integer)
- created_at (Timestamp)
- updated_at (Timestamp)

### Orders Table:

Fields:
- id (Primary Key)
- user_id (Foreign Key to Users Table)
- shipping_address (String)
- billing_address (String)
- payment_details (String)
- total_price (Decimal)
- created_at (Timestamp)
- updated_at (Timestamp)
- 
### Order_Items Table:

Fields:
- id (Primary Key)
- order_id (Foreign Key to Orders Table)
- product_id (Foreign Key to Products Table)
- quantity (Integer)
- price (Decimal)
- created_at (Timestamp)
- updated_at (Timestamp)

### Discounts Table:
Fields:

- id (Primary Key)
- discount_name (String)
- discount_value (Decimal)
- discount_type (Enum: percentage, fixed_amount)
- start_date (Timestamp)
- end_date (Timestamp)
- created_at (Timestamp)
- updated_at (Timestamp)

### Discount_Products Table:
Fields:

- id (Primary Key)
- discount_id (Foreign Key to Discounts Table)
- product_id (Foreign Key to Products Table)
- created_at (Timestamp)
- updated_at (Timestamp)
  
2. Relationships:

- One-to-Many Relationship: Users can have multiple carts, orders, and order items. Each cart, order, and order item belongs to a single user.

- Many-to-Many Relationship: Products can belong to multiple categories, and categories can have multiple products. 
- This relationship is facilitated by the "category_product" pivot table, which stores the product_id and category_id.
