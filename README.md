# ecommerce
An e-commerce website including user and admin panel. PHP MySQL
File Structure:
admin_area: All files pertaining to admin-only permissions need to be coded here.
            insert_products.php: Insert products. Connecting to the server, database and uploading the file. UI included.
            product_images: all the images of the products should be pasted here.
customer:   All files and folders pertaining to the customer need to be moved here.
            change_pass.php: user pw changing
            delete_account: Delete the user account
            edit_account: Edit the creds or the basic info of the customer.
            my_account.php: This is user's profile, will display on the page named: 'My Account'.
            customer_images: All the customers' images are pasted here.
            functions:
                    functions.php: All the functions that are used even once are written in here and called as per the need.
            includes:
                    db.php: Database connectivity.
            styles: If any stylesheet needed, include here.
                    style.css: The stylesheet of the complete framework.
functions:
          functions.php: The functions required for the entire framework are inserted in here. 
