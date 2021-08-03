Order form

Repository: php-order-form
Type of Challenge: Learning challenge
Duration: 2-3 days
Team challenge : solo
Must-have features

Preparation

Have a look at the provided structure: you get both an index file and another file containing a form. How are these two working together?
Think of a funny / surprising / original name for a store that should definitely exist. (fancy suits for cats? bongo for dates? you name it!)
Think of some products to sell (feel free to be creative) and update the products array with these.
Check if all the products & prices are currently visible in the form.
Step 1: accepting orders

Show an order confirmation when the user submits the form. This should contain the chosen products and delivery address.
We will learn how to save this information to a database later, so no need to do this now.
Step 2: validation

Use PHP to check the following:
Required fields are not empty.
Zip code are only numbers.
Email address is valid.
Show any problems (empty or invalid data) with the fields at the top of the form. Tip: use the bootstrap alerts for inspiration. If they are valid, the confirmation of step 1 is shown.
If the form was not valid, show the previous values in the form so that the user doesn't have to retype everything.
Usually, validation is a combination of server side checks (for security, these can't be bypassed) and checks in html / JS (can be bypassed but can give live user feedback).
Step 3: improve UX by saving user data

Check out the possibilities of the PHP session and cookies.
We want to prefill the address (after the first usage), as long as the browser isn't closed. Which of these techniques is the better choice here?
When using cookies on a live site, check any legal requirements.
Step 4: expanding due to success

Read about get variables and what you can do with it.
Find commented navigation and activate it. Tweak the content for your own store.
Make a second category of products, and provide a new array for this info.
The navigation should work as a toggle to switch between the two categories of products.
Nice-to-have features

Delivery times

Show the expected delivery time in the confirmation message (2h by default).
A user can opt for express delivery (5$ for delivery in 45min).
Statistics

Show statistics about how much money has been spent. This info should be kept (can you use the session or cookies for this?) when the browser closes.
Include the most popular product (by this user) and amount of products bought by this user.
Look & feel

What kind of style would suit your store? Add a color schema and a suitable font.
Check what you can do for validation with html and JS. Use this to improve your validation.
Bulk orders

Allow the user to specify how much he or she wants to buy of a certain products
Sales are almost there... last thing to do is waiting for customers on a shopping spree!

