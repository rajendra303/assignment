Application Setup and Usage:

1. Database Setup:
   - Create a MySQL database named 'assigment'.

   - Inside the 'assigment' database, create a table named 'contact_form' with the columns:
     - id (int, auto-increment, primary key)
     - fullname (varchar)
     - phone (varchar)
     - email (varchar)
     - subject (varchar)
     - message (text)

2. Configure Database Connection:
   - Open 'conn.php' and update database connection details.

3. Running the Application:
   - Have a web server (e.g., Apache) with PHP.
   - Place 'conn.php' and 'index.html' (or 'index.php') in a web-accessible directory.
   - Access the files via a web browser.
   - Fill the form and click "Submit" to insert data.
   - Valid phone numbers (10 digits) will be inserted.




