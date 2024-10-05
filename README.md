# Chat Application API Documentation

## Overview
The Chat Application is a real-time messaging platform that allows users to register, log in, send messages, and fetch chat history. The API is built using PHP and interacts with a MySQL database for data storage.

### Live Application URL
- **Main Application:** [http://chatappp.free.nf/](http://chatappp.free.nf/)
- **API Endpoint:** [http://chatappp.free.nf/api/](http://chatappp.free.nf/api/)

---

## API Endpoints

### 1. User Registration
- **Endpoint:** `/api/register.php`
- **Method:** `POST`
- **Request Body:**
  ```json
  {
    "username": "your_username",
    "password": "your_password"
  }
  ```
- **Response:**
  - **Success:**
    ```json
    {
      "status": "success",
      "message": "User registered successfully."
    }
    ```
  - **Error:**
    ```json
    {
      "status": "error",
      "message": "Error message detailing what went wrong."
    }
    ```

### 2. User Login
- **Endpoint:** `/api/login.php`
- **Method:** `POST`
- **Request Body:**
  ```json
  {
    "username": "your_username",
    "password": "your_password"
  }
  ```
- **Response:**
  - **Success:**
    ```json
    {
      "status": "success",
      "message": "Login successful."
    }
    ```
  - **Error:**
    ```json
    {
      "status": "error",
      "message": "Invalid username or password."
    }
    ```

### 3. Send Message
- **Endpoint:** `/api/send_message.php`
- **Method:** `POST`
- **Request Body:**
  ```json
  {
    "message": "Your message here"
  }
  ```
- **Response:**
  - **Success:**
    ```json
    {
      "status": "success",
      "message": "Message sent successfully."
    }
    ```
  - **Error:**
    ```json
    {
      "status": "error",
      "message": "Error message detailing what went wrong."
    }
    ```

### 4. Get Messages
- **Endpoint:** `/api/get_messages.php`
- **Method:** `GET`
- **Response:**
  ```json
  [
    {
      "username": "user1",
      "message": "Hello, world!",
      "timestamp": "2024-10-01 12:00:00"
    },
    {
      "username": "user2",
      "message": "Hi there!",
      "timestamp": "2024-10-01 12:01:00"
    }
  ]
  ```

---

## Usage Examples

### Register a User
```javascript
fetch('http://chatappp.free.nf/api/register.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({ username: 'newuser', password: 'password123' })
})
.then(response => response.json())
.then(data => console.log(data));
```

### Login a User
```javascript
fetch('http://chatappp.free.nf/api/login.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({ username: 'newuser', password: 'password123' })
})
.then(response => response.json())
.then(data => console.log(data));
```

### Send a Message
```javascript
fetch('http://chatappp.free.nf/api/send_message.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({ message: 'Hello, world!' })
})
.then(response => response.json())
.then(data => console.log(data));
```

### Get Messages
```javascript
fetch('http://chatappp.free.nf/api/get_messages.php')
.then(response => response.json())
.then(data => console.log(data));
```

---

## Security Considerations
- Ensure users' passwords are hashed and stored securely.
- Use HTTPS to encrypt data transmitted over the network.
- Validate and sanitize all inputs to prevent SQL injection and XSS attacks.

---

## Future Improvements
- Implement token-based authentication for improved security.
- Allow private messaging between users.
- Implement real-time notifications for new messages.

---
